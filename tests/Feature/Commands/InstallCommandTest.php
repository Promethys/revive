<?php

namespace Promethys\Revive\Tests\Feature\Commands;

use Illuminate\Support\Facades\File;
use Promethys\Revive\ReviveServiceProvider;
use Promethys\Revive\Tests\TestCase;

class InstallCommandTest extends TestCase
{
    private ?string $tempDatabasePath = null;

    protected function tearDown(): void
    {
        if ($this->tempDatabasePath !== null) {
            File::deleteDirectory($this->tempDatabasePath);
        }

        parent::tearDown();
    }

    // Re-run the package's boot so its publish map is recomputed against the
    // current database path, mimicking a fresh `php artisan` process.
    private function rebootRevive(): void
    {
        $this->app->register(new ReviveServiceProvider($this->app), force: true);
    }

    // Decline both prompts so the run only publishes migrations.
    private function runInstall(): void
    {
        $this->artisan('revive:install')
            ->expectsConfirmation('Would you like to run the migrations now?', 'no')
            ->expectsConfirmation('Would you like to star our repo on GitHub?', 'no')
            ->run();
    }

    public function test_reinstalling_does_not_duplicate_the_migrations()
    {
        $this->tempDatabasePath = sys_get_temp_dir() . '/revive_install_' . uniqid();
        File::ensureDirectoryExists($this->tempDatabasePath . '/migrations');

        $this->app->useDatabasePath($this->tempDatabasePath);

        $this->rebootRevive();
        $this->runInstall();

        // Second process: the first migration now exists on disk, so the
        // dedup glob must resolve to it instead of stamping a new timestamp.
        $this->rebootRevive();
        $this->runInstall();

        $migrations = File::glob($this->tempDatabasePath . '/migrations/*_create_recycle_bin_items_table.php');

        $this->assertCount(1, $migrations);
    }
}
