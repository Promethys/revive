<?php

namespace Mango\FilamentRevive;

use Filament\Support\Assets\Asset;
use Filament\Support\Facades\FilamentAsset;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentReviveServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-revive';

    public static string $viewNamespace = 'filament-revive';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasMigration('2025_04_05_173836_create_recycle_bin_items_table')
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishMigrations()
                    ->askToRunMigrations()
                    ->askToStarRepoOnGitHub('MangoDevMG/filament-revive')
                    ->endWith(function (InstallCommand $command) {
                        $command->info('✨ Happy Mango coding 🥭 ✨');
                    });
            });

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

        Livewire::component('filament-revive.tables.recycle-bin', \Mango\FilamentRevive\Tables\RecycleBin::class);
    }

    protected function getAssetPackageName(): ?string
    {
        return 'mango/filament-revive';
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
