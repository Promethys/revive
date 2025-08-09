<?php

namespace Promethys\Revive;

use Filament\Support\Assets\Asset;
use Filament\Support\Facades\FilamentAsset;
use Livewire\Livewire;
use Promethys\Revive\Commands\DiscoverSoftDeletedRecords;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ReviveServiceProvider extends PackageServiceProvider
{
    public static string $name = 'revive';

    public static string $viewNamespace = 'revive';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasMigration('2025_04_05_173836_create_recycle_bin_items_table')
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishMigrations()
                    ->askToRunMigrations()
                    ->askToStarRepoOnGitHub('promethys/revive')
                    ->endWith(function (InstallCommand $command) {
                        $command->info('✨ Happy coding 🔥 ✨');
                    });
            })
            ->hasCommand(DiscoverSoftDeletedRecords::class);

        if (file_exists($package->basePath('/../config/' . static::$name . '.php'))) {
            $package->hasConfigFile();
        }

        if (file_exists($package->basePath('/../resources/lang'))) {
            $package->hasTranslations();
        }

        if (file_exists($package->basePath('/../resources/views'))) {
            $package->hasViews(static::$viewNamespace);
        }
    }

    public function packageRegistered(): void {}

    public function packageBooted(): void
    {
        // Asset Registration
        FilamentAsset::register(
            $this->getAssets(),
            $this->getAssetPackageName()
        );

        Livewire::component('revive.tables.recycle-bin', \Promethys\Revive\Tables\RecycleBin::class);
    }

    protected function getAssetPackageName(): ?string
    {
        return 'promethys/revive';
    }

    /**
     * @return array<Asset>
     */
    protected function getAssets(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getIcons(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getRoutes(): array
    {
        return [];
    }

    /**
     * @return array<string, mixed>
     */
    protected function getScriptData(): array
    {
        return [];
    }

    protected function getMigrations(): array
    {
        return [
            'create_recycle_bin_items_table',
        ];
    }
}
