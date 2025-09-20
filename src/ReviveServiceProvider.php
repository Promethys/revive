<?php

namespace Promethys\Revive;

use Filament\Support\Assets\Asset;
use Livewire\Livewire;
use Promethys\Revive\Commands\DiscoverSoftDeletedRecords;
use Promethys\Revive\Pages\RecycleBin as RecycleBinPage;
use Promethys\Revive\Tables\RecycleBin as RecycleBinTable;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ReviveServiceProvider extends PackageServiceProvider
{
    public static string $name = 'revive';

    public static string $viewNamespace = 'revive';

    public function boot()
    {
        parent::boot();

        // Register Livewire components
        $this->registerLivewireComponents();
    }

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasMigrations([
                '2025_04_05_173836_create_recycle_bin_items_table',
                '2025_08_09_183550_add_user_and_tenant_to_recycle_bin_items_table',
            ])
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

    public function packageBooted(): void {}

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
            'add_user_and_tenant_to_recycle_bin_items_table',
        ];
    }

    protected function registerLivewireComponents(): void
    {
        Livewire::component('revive::pages.recycle-bin', RecycleBinPage::class);
        Livewire::component('revive::tables.recycle-bin', RecycleBinTable::class);
    }
}
