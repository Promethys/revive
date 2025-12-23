<?php

namespace Promethys\Revive;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Promethys\Revive\Concerns\Recyclable;

class Revive
{
    public static function getRecyclableModels()
    {
        $models = [];
        $modelNamespace = RevivePlugin::get()?->getModelsNamespace() ?? 'App\\Models\\';
        $modelsPath = app_path('Models');

        foreach (File::allFiles($modelsPath) as $file) {
            if ($file->getExtension() !== 'php') {
                continue;
            }

            // Get the full relative path and convert to namespace
            $relativePath = str_replace(
                [$modelsPath . DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR, '.php'],
                ['', '\\', ''],
                $file->getPathname()
            );

            $modelClass = $modelNamespace . $relativePath;

            try {
                if (class_exists($modelClass) && is_subclass_of($modelClass, Model::class)) {
                    if (in_array(Recyclable::class, class_uses_recursive($modelClass))) {
                        $models[$modelClass] = class_basename($modelClass);
                    }
                }
            } catch (\Throwable $th) {
                \Illuminate\Support\Facades\Log::warning("Error when processing Recyclable model $modelClass", [
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
}
