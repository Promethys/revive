<?php

namespace Promethys\Revive\Tests\Feature\Commands;

use Illuminate\Support\Collection;
use Promethys\Revive\Models\RecycleBinItem;
use Promethys\Revive\RevivePlugin;
use Promethys\Revive\Tests\TestCase;
use Promethys\Revive\Tests\Traits\InteractsWithPanel;
use Workbench\App\Models\Post;
use Workbench\App\Models\User;
use Workbench\Database\Factories\PostFactory;
use Workbench\Database\Factories\UserFactory;

class DiscoverSoftDeletedRecordsTest extends TestCase
{
    use InteractsWithPanel;

    // Point the command's model discovery at the workbench models. The namespace
    // is resolved to its directory via Composer's PSR-4 map (Workbench\App\ ->
    // workbench/app), so no app path override is needed.
    protected function discoverWorkbenchModels(string $namespace = 'Workbench\\App\\Models\\'): void
    {
        $this->registerPanelWithPlugin(
            RevivePlugin::make()->modelsNamespace($namespace)
        );
    }

    // Soft-delete while bypassing the Recyclable hook, to mimic records that were
    // trashed before the plugin was installed (no RecycleBinItem tracking them).
    protected function softDeleteWithoutTracking(Collection $models): void
    {
        $models->each(fn ($model) => $model::withoutEvents(fn () => $model->delete()));
    }

    // --- Discovery (the core backfill behavior) ---

    public function test_it_warns_when_no_recyclable_models_are_found()
    {
        $this->discoverWorkbenchModels('Does\\Not\\Exist\\');

        $this->artisan('revive:discover-soft-deleted')
            ->expectsOutputToContain('No recyclable models found')
            ->assertFailed()
            ->run();
    }

    public function test_it_discovers_untracked_soft_deleted_records()
    {
        $this->discoverWorkbenchModels();

        $this->softDeleteWithoutTracking(PostFactory::new()->times(3)->create());

        $this->assertDatabaseCount('recycle_bin_items', 0);

        $this->artisan('revive:discover-soft-deleted')->assertSuccessful()->run();

        $this->assertDatabaseCount('recycle_bin_items', 3);
        $this->assertDatabaseHas('recycle_bin_items', ['model_type' => Post::class]);
    }

    public function test_it_does_not_recreate_already_tracked_records()
    {
        $this->discoverWorkbenchModels();

        PostFactory::new()->times(3)->create()->each->delete();

        $this->assertDatabaseCount('recycle_bin_items', 3);

        $this->artisan('revive:discover-soft-deleted')->assertSuccessful()->run();

        $this->assertDatabaseCount('recycle_bin_items', 3);
    }

    // --- Options ---

    public function test_dry_run_reports_counts_without_writing_to_the_database()
    {
        $this->discoverWorkbenchModels();

        $this->softDeleteWithoutTracking(PostFactory::new()->times(3)->create());

        $this->artisan('revive:discover-soft-deleted', ['--dry-run' => true])
            ->expectsOutputToContain('Dry run')
            ->assertSuccessful()
            ->run();

        $this->assertDatabaseCount('recycle_bin_items', 0);
    }

    public function test_the_model_option_limits_discovery_to_a_single_model()
    {
        $this->discoverWorkbenchModels();

        $this->softDeleteWithoutTracking(PostFactory::new()->times(2)->create());
        $this->softDeleteWithoutTracking(UserFactory::new()->times(2)->create());

        $this->artisan('revive:discover-soft-deleted', ['--model' => 'Post'])->assertSuccessful()->run();

        $this->assertDatabaseCount('recycle_bin_items', 2);
        $this->assertDatabaseHas('recycle_bin_items', ['model_type' => Post::class]);
        $this->assertDatabaseMissing('recycle_bin_items', ['model_type' => User::class]);
    }

    public function test_it_errors_when_the_model_option_does_not_match()
    {
        $this->discoverWorkbenchModels();

        $this->artisan('revive:discover-soft-deleted', ['--model' => 'NonExistentModel'])
            ->expectsOutputToContain("Model 'NonExistentModel' not found")
            ->assertFailed()
            ->run();
    }

    public function test_it_skips_models_that_do_not_use_soft_deletes()
    {
        $this->discoverWorkbenchModels();

        $this->artisan('revive:discover-soft-deleted')
            ->expectsOutputToContain("doesn't use SoftDeletes")
            ->assertSuccessful()
            ->run();
    }

    public function test_with_scope_option_reports_scoping_information()
    {
        $this->discoverWorkbenchModels();

        $this->softDeleteWithoutTracking(PostFactory::new()->times(2)->create());

        $this->artisan('revive:discover-soft-deleted', ['--with-scope' => true])
            ->expectsOutputToContain('scoping information was')
            ->assertSuccessful()
            ->run();
    }
}
