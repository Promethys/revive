<?php

namespace Promethys\Revive;

use Composer\Autoload\ClassLoader;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Promethys\Revive\Concerns\Recyclable;

class Revive
{
    /**
     * @return array<class-string, string>
     */
    public static function getRecyclableModels()
    {
        $models = [];
        $namespaces = RevivePlugin::get()?->getModelsNamespaces() ?? ['App\\Models\\'];
        $prefixes = static::psr4Prefixes();

        foreach ($namespaces as $namespace) {
            $directories = array_filter(
                static::resolveNamespaceDirectories($namespace, $prefixes),
                fn (string $directory): bool => File::isDirectory($directory)
            );

            if ($directories === []) {
                Log::warning("Could not resolve an existing directory for namespace $namespace");

                continue;
            }

            foreach ($directories as $directory) {
                $models += static::discoverInDirectory($directory, $namespace);
            }
        }

        return $models;
    }

    /**
     * @return array<class-string, string>
     */
    protected static function discoverInDirectory(string $directory, string $namespace): array
    {
        $models = [];

        foreach (File::allFiles($directory) as $file) {
            if ($file->getExtension() !== 'php') {
                continue;
            }

            // Get the full relative path and convert to namespace
            $relativePath = str_replace(
                [$directory . DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR, '.php'],
                ['', '\\', ''],
                $file->getPathname()
            );

            $modelClass = $namespace . $relativePath;

            try {
                if (class_exists($modelClass) && is_subclass_of($modelClass, Model::class)) {
                    if (in_array(Recyclable::class, class_uses_recursive($modelClass))) {
                        $models[$modelClass] = class_basename($modelClass);
                    }
                }
            } catch (\Throwable $th) {
                Log::warning("Error when processing Recyclable model $modelClass", [
                    'message' => $th->getMessage(),
                    'file' => $th->getFile(),
                    'line' => $th->getLine(),
                    'trace' => $th->getTrace(),
                ]);

                continue;
            }
        }

        return $models;
    }

    /**
     * Resolve a namespace to its candidate directories via the longest matching
     * PSR-4 prefix.
     *
     * @param  array<string, array<int, string>>  $prefixes
     * @return array<int, string>
     */
    protected static function resolveNamespaceDirectories(string $namespace, array $prefixes): array
    {
        $matchedPrefix = '';
        $baseDirectories = [];

        foreach ($prefixes as $prefix => $directories) {
            if (str_starts_with($namespace, $prefix) && strlen($prefix) > strlen($matchedPrefix)) {
                $matchedPrefix = $prefix;
                $baseDirectories = $directories;
            }
        }

        if ($matchedPrefix === '') {
            return [];
        }

        $remainder = str_replace('\\', DIRECTORY_SEPARATOR, substr($namespace, strlen($matchedPrefix)));

        return array_map(
            fn (string $base): string => rtrim($base, '/\\') . DIRECTORY_SEPARATOR . rtrim($remainder, '/\\'),
            $baseDirectories
        );
    }

    /**
     * @return array<string, array<int, string>>
     */
    protected static function psr4Prefixes(): array
    {
        foreach (spl_autoload_functions() as $autoloader) {
            if (is_array($autoloader) && $autoloader[0] instanceof ClassLoader) {
                return $autoloader[0]->getPrefixesPsr4();
            }
        }

        return [];
    }
}
