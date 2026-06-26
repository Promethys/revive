<?php

namespace Promethys\Revive\Tests\Feature\Tables;

use Filament\Actions\Testing\TestAction;
use Filament\Facades\Filament;
use Filament\Tables\Columns\TextColumn;
use Livewire\Livewire;
use Promethys\Revive\Models\RecycleBinItem;
use Promethys\Revive\Tables\RecycleBin;
use Promethys\Revive\Tests\TestCase;
use Promethys\Revive\Tests\Traits\InteractsWithPanel;
use Workbench\App\Models\Post;
use Workbench\App\Models\Team;
use Workbench\App\Models\User;
use Workbench\Database\Factories\PostFactory;
use Workbench\Database\Factories\TeamFactory;
use Workbench\Database\Factories\UserFactory;

class RecycleBinTest extends TestCase
{
    use InteractsWithPanel;

    // --- Rendering & columns ---

    public function test_it_renders_successfully()
    {
        Livewire::test(RecycleBin::class)
            ->assertSuccessful();
    }

    public function test_it_lists_trashed_records()
    {
        $this->seedWithDeletedUsers(5);

        Livewire::test(RecycleBin::class)
            ->loadTable()
            ->assertCountTableRecords(5);
    }

    public function test_it_shows_an_empty_state_when_there_are_no_records()
    {
        Livewire::test(RecycleBin::class)
            ->loadTable()
            ->assertCountTableRecords(0)
            ->assertSee(__('revive::translations.tables.empty_state.title'))
            ->assertSee(__('revive::translations.tables.empty_state.description'));
    }

    public function test_it_shows_the_deleted_by_column_when_showing_all_records()
    {
        $this->seedWithDeletedUsers(5);

        Livewire::test(RecycleBin::class, ['showAllRecords' => true])
            ->loadTable()
            ->assertTableColumnExists('deleted_by')
            ->assertCanRenderTableColumn('deleted_by');
    }

    public function test_it_hides_the_deleted_by_column_when_user_scoping_is_enabled()
    {
        $this->seedWithDeletedUsers(5);

        Livewire::test(RecycleBin::class)
            ->loadTable()
            ->assertCanNotRenderTableColumn('deleted_by');
    }

    public function test_it_resolves_the_deleter_display_name_in_the_deleted_by_column()
    {
        $user = UserFactory::new()->create();

        $this->actingAs($user);

        $this->seedWithDeletedUserPosts($user, 1);

        Livewire::test(RecycleBin::class, ['showAllRecords' => true])
            ->loadTable()
            ->assertTableColumnExists('deleted_by', function (TextColumn $column) use ($user): bool {
                return $column->getState() === $user->name;
            }, RecycleBinItem::first());
    }

    public function test_the_deleted_by_column_is_empty_when_no_deleter_is_recorded()
    {
        $post = PostFactory::new()->create(['user_id' => null]);
        $post->delete();

        Livewire::test(RecycleBin::class, ['showAllRecords' => true])
            ->loadTable()
            ->assertTableColumnExists('deleted_by', function (TextColumn $column): bool {
                return $column->getState() === null;
            }, RecycleBinItem::first());
    }

    public function test_the_deleted_by_column_falls_back_to_an_id_label_when_the_user_is_not_found()
    {
        $post = PostFactory::new()->create();
        $post->delete();

        $recycleBinItem = $post->recycleBinItem;
        $recycleBinItem->update(['deleted_by' => 999999]);

        Livewire::test(RecycleBin::class, ['showAllRecords' => true])
            ->loadTable()
            ->assertTableColumnExists('deleted_by', function (TextColumn $column): bool {
                return $column->getState() === 'User #999999';
            }, $recycleBinItem);
    }

    public function test_the_deleted_by_column_falls_back_to_an_id_label_when_the_user_model_is_missing()
    {
        config(['auth.providers.users.model' => 'App\\Models\\NonExistentUser']);

        $post = PostFactory::new()->create();
        $post->delete();

        $recycleBinItem = $post->recycleBinItem;
        $recycleBinItem->update(['deleted_by' => 123]);

        Livewire::test(RecycleBin::class, ['showAllRecords' => true])
            ->loadTable()
            ->assertTableColumnExists('deleted_by', function (TextColumn $column): bool {
                return $column->getState() === 'User #123';
            }, $recycleBinItem);
    }

    // --- getQuery() scoping (the multi-tenancy / user feature) ---

    public function test_it_scopes_records_to_the_given_user_when_user_scoping_is_enabled()
    {
        $user1 = UserFactory::new()->create();
        $user2 = UserFactory::new()->create();

        $this->actingAs($user1);

        $this->seedWithDeletedUserPosts($user1, 1);
        $this->seedWithDeletedUserPosts($user2, 1);

        $record1 = RecycleBinItem::where('deleted_by', $user1->id)->first();
        $record2 = RecycleBinItem::where('deleted_by', $user2->id)->first();

        Livewire::test(RecycleBin::class)
            ->loadTable()
            ->assertCanSeeTableRecords([$record1])
            ->assertCanNotSeeTableRecords([$record2]);
    }

    public function test_it_scopes_records_to_the_given_tenant_when_tenant_scoping_is_enabled()
    {
        $tenant1 = TeamFactory::new()->create();
        $tenant2 = TeamFactory::new()->create();

        $user1 = UserFactory::new()->create(['team_id' => $tenant1]);
        $user2 = UserFactory::new()->create(['team_id' => $tenant2]);

        $this->registerPanelWithPlugin(options: ['tenant' => Team::class]);

        $this->actingAs($user1);
        Filament::setTenant($tenant1);

        $this->seedWithDeletedUserPosts($user1, 1);
        $this->seedWithDeletedUserPosts($user2, 1);

        $record1 = RecycleBinItem::where('deleted_by', $user1->id)->first();
        $record2 = RecycleBinItem::where('deleted_by', $user2->id)->first();

        Livewire::test(RecycleBin::class)
            ->loadTable()
            ->assertCanSeeTableRecords([$record1])
            ->assertCanNotSeeTableRecords([$record2]);
    }

    public function test_it_shows_all_records_and_bypasses_scoping_when_show_all_records_is_enabled()
    {
        $tenant1 = TeamFactory::new()->create();
        $tenant2 = TeamFactory::new()->create();

        $user1 = UserFactory::new()->create(['team_id' => $tenant1]);
        $user2 = UserFactory::new()->create(['team_id' => $tenant2]);

        $this->registerPanelWithPlugin(options: ['tenant' => Team::class]);

        $this->actingAs($user1);
        Filament::setTenant($tenant1);

        $this->seedWithDeletedUserPosts($user1, 1);
        $this->seedWithDeletedUserPosts($user2, 1);

        $record1 = RecycleBinItem::where('deleted_by', $user1->id)->first();
        $record2 = RecycleBinItem::where('deleted_by', $user2->id)->first();

        Livewire::test(RecycleBin::class, ['showAllRecords' => true])
            ->loadTable()
            ->assertCanSeeTableRecords([$record1, $record2]);
    }

    public function test_it_filters_records_to_the_configured_models()
    {
        $user1 = UserFactory::new()->create();
        $user2 = UserFactory::new()->create();

        $this->seedWithDeletedUserPosts($user1, 1);
        $user2->delete();

        $record1 = RecycleBinItem::where('deleted_by', $user1->id)->first();
        $record2 = $user2->recycleBinItem;

        Livewire::test(RecycleBin::class, ['showAllRecords' => true, 'models' => [Post::class]])
            ->loadTable()
            ->assertCanSeeTableRecords([$record1])
            ->assertCanNotSeeTableRecords([$record2]);
    }

    public function test_it_auto_detects_the_authenticated_user_on_mount()
    {
        $user = UserFactory::new()->create();

        $this->registerPanelWithPlugin();

        $this->actingAs($user);

        Livewire::test(RecycleBin::class)
            ->loadTable()
            ->assertSet('user.id', $user->id)
            ->assertSet('user.name', $user->name);
    }

    public function test_it_auto_detects_the_current_filament_tenant_on_mount()
    {
        $tenant = TeamFactory::new()->create();
        $user = UserFactory::new()->create(['team_id' => $tenant]);

        $this->registerPanelWithPlugin(options: ['tenant' => Team::class]);

        $this->actingAs($user);
        Filament::setTenant($tenant);

        Livewire::test(RecycleBin::class)
            ->loadTable()
            ->assertSet('tenant.id', $tenant->id)
            ->assertSet('tenant.name', $tenant->name);
    }

    // --- Filters ---

    public function test_it_can_filter_records_by_model_type()
    {
        Livewire::test(RecycleBin::class)
            ->loadTable()
            ->assertTableFilterExists('model_type');
    }

    public function test_the_model_type_filter_only_offers_model_types_that_are_present()
    {
        $user1 = UserFactory::new()->create();
        $user2 = UserFactory::new()->create();

        $this->seedWithDeletedUserPosts($user1, 1);
        $user2->delete();

        $record1 = RecycleBinItem::where('deleted_by', $user1->id)->first();
        $record2 = $user2->recycleBinItem;

        Livewire::test(RecycleBin::class, ['showAllRecords' => true])
            ->loadTable()
            ->assertCanSeeTableRecords([$record1, $record2])
            ->filterTable('model_type', $record1->model_type)
            ->assertCanSeeTableRecords([$record1])
            ->assertCanNotSeeTableRecords([$record2])
            ->filterTable('model_type', $record2->model_type)
            ->assertCanSeeTableRecords([$record2])
            ->assertCanNotSeeTableRecords([$record1]);
    }

    // --- Row actions ---

    public function test_it_can_restore_a_record()
    {
        $post = PostFactory::new()->create();
        $post->delete();

        $recycleBinItem = $post->recycleBinItem;
        $testAction = TestAction::make('restore')->table($recycleBinItem);

        Livewire::test(RecycleBin::class, ['showAllRecords' => true])
            ->loadTable()
            ->assertCanSeeTableRecords([$recycleBinItem])
            ->assertActionExists($testAction)
            ->callAction($testAction)
            ->assertCanNotSeeTableRecords([$recycleBinItem]);
    }

    public function test_restoring_a_record_removes_its_recycle_bin_item()
    {
        $post = PostFactory::new()->create();
        $post->delete();

        $recycleBinItem = $post->recycleBinItem;
        $testAction = TestAction::make('restore')->table($recycleBinItem);

        $this->assertDatabaseHas('recycle_bin_items', [
            'model_id' => $post->id,
            'model_type' => $post->getMorphClass(),
        ]);

        Livewire::test(RecycleBin::class, ['showAllRecords' => true])
            ->loadTable()
            ->assertActionExists($testAction)
            ->callAction($testAction);

        $this->assertDatabaseMissing('recycle_bin_items', [
            'model_id' => $post->id,
            'model_type' => $post->getMorphClass(),
        ]);
    }

    public function test_it_can_permanently_delete_a_record()
    {
        $post = PostFactory::new()->create();
        $post->delete();

        $recycleBinItem = $post->recycleBinItem;
        $testAction = TestAction::make('force_delete')->table($recycleBinItem);

        Livewire::test(RecycleBin::class, ['showAllRecords' => true])
            ->loadTable()
            ->assertCanSeeTableRecords([$recycleBinItem])
            ->assertActionExists($testAction)
            ->callAction($testAction)
            ->assertCanNotSeeTableRecords([$recycleBinItem]);
    }

    public function test_force_deleting_a_record_removes_the_model_and_its_recycle_bin_item()
    {
        $post = PostFactory::new()->create();
        $post->delete();

        $recycleBinItem = $post->recycleBinItem;
        $testAction = TestAction::make('force_delete')->table($recycleBinItem);

        $this->assertDatabaseHas('recycle_bin_items', [
            'model_id' => $post->id,
            'model_type' => $post->getMorphClass(),
        ]);

        Livewire::test(RecycleBin::class, ['showAllRecords' => true])
            ->loadTable()
            ->assertActionExists($testAction)
            ->callAction($testAction);

        $this->assertDatabaseMissing('recycle_bin_items', [
            'model_id' => $post->id,
            'model_type' => $post->getMorphClass(),
        ]);
    }

    public function test_it_can_view_record_details_with_the_state_snapshot()
    {
        $post = PostFactory::new()->create();
        $post->delete();

        $recycleBinItem = $post->recycleBinItem;
        $testAction = TestAction::make('view_details')->table($recycleBinItem);

        Livewire::test(RecycleBin::class, ['showAllRecords' => true])
            ->loadTable()
            ->mountAction($testAction)
            ->assertMountedActionModalSee(__('revive::translations.tables.actions.view_details.modal_heading'))
            ->assertMountedActionModalSee($post->title);
    }

    // --- view_details state rendering (buildStateSchema / splitScalarAndNested) ---

    public function test_view_details_renders_scalar_attributes()
    {
        $post = PostFactory::new()->create();
        $post->delete();

        $recycleBinItem = $post->recycleBinItem;
        $recycleBinItem->update(['state' => ['id' => 42, 'title' => 'A Scalar Title']]);

        Livewire::test(RecycleBin::class, ['showAllRecords' => true])
            ->loadTable()
            ->mountAction(TestAction::make('view_details')->table($recycleBinItem))
            ->assertMountedActionModalSee('A Scalar Title')
            ->assertMountedActionModalSee('42');
    }

    public function test_view_details_renders_nested_relations_as_collapsible_sections()
    {
        $post = PostFactory::new()->create();
        $post->delete();

        $recycleBinItem = $post->recycleBinItem;
        $recycleBinItem->update(['state' => [
            'title' => 'Parent',
            'author' => ['name' => 'Jane Doe', 'email' => 'jane@example.com'],
        ]]);

        Livewire::test(RecycleBin::class, ['showAllRecords' => true])
            ->loadTable()
            ->mountAction(TestAction::make('view_details')->table($recycleBinItem))
            ->assertMountedActionModalSee('Author')
            ->assertMountedActionModalSee('Jane Doe')
            ->assertMountedActionModalSee('jane@example.com');
    }

    public function test_view_details_formats_null_and_boolean_values()
    {
        $post = PostFactory::new()->create();
        $post->delete();

        $recycleBinItem = $post->recycleBinItem;
        $recycleBinItem->update(['state' => [
            'title' => 'Has flags',
            'is_published' => true,
            'archived_at' => null,
        ]]);

        Livewire::test(RecycleBin::class, ['showAllRecords' => true])
            ->loadTable()
            ->mountAction(TestAction::make('view_details')->table($recycleBinItem))
            ->assertMountedActionModalSee(__('Yes'))
            ->assertMountedActionModalSee('—');
    }

    public function test_view_details_renders_list_values_as_numbered_sections()
    {
        $post = PostFactory::new()->create();
        $post->delete();

        $recycleBinItem = $post->recycleBinItem;
        $recycleBinItem->update(['state' => [
            'title' => 'Tagged',
            'tags' => ['php', 'laravel'],
        ]]);

        Livewire::test(RecycleBin::class, ['showAllRecords' => true])
            ->loadTable()
            ->mountAction(TestAction::make('view_details')->table($recycleBinItem))
            ->assertMountedActionModalSee('Tags')
            ->assertMountedActionModalSee('php')
            ->assertMountedActionModalSee('laravel');
    }

    // --- Bulk (toolbar) actions ---

    public function test_it_can_restore_selected_records()
    {
        $posts = PostFactory::new()->times(2)->create();
        $posts->map(fn ($post) => $post->delete());

        $recycleBinItems = $posts->map(fn ($post) => $post->recycleBinItem);

        $testAction = TestAction::make('restore_selected')->table()->bulk();

        Livewire::test(RecycleBin::class, ['showAllRecords' => true])
            ->loadTable()
            ->assertCanSeeTableRecords($recycleBinItems)
            ->selectTableRecords($recycleBinItems->pluck('id')->toArray())
            ->assertActionExists($testAction)
            ->callAction($testAction)
            ->assertCanNotSeeTableRecords([$recycleBinItems]);
    }

    public function test_it_can_permanently_delete_selected_records()
    {
        $posts = PostFactory::new()->times(2)->create();
        $posts->map(fn ($post) => $post->delete());

        $recycleBinItems = $posts->map(fn ($post) => $post->recycleBinItem);

        $testAction = TestAction::make('force_delete_selected')->table()->bulk();

        Livewire::test(RecycleBin::class, ['showAllRecords' => true])
            ->loadTable()
            ->assertCanSeeTableRecords($recycleBinItems)
            ->selectTableRecords($recycleBinItems->pluck('id')->toArray())
            ->assertActionExists($testAction)
            ->callAction($testAction)
            ->assertCanNotSeeTableRecords([$recycleBinItems]);
    }

    public function test_it_sends_a_warning_notification_on_partial_bulk_success()
    {
        $post = PostFactory::new()->create();
        $post->delete();
        $restorable = $post->recycleBinItem;

        $orphan = RecycleBinItem::create([
            'model_id' => 999999,
            'model_type' => Post::class,
            'state' => [],
            'deleted_at' => now(),
        ]);

        $testAction = TestAction::make('restore_selected')->table()->bulk();

        Livewire::test(RecycleBin::class, ['showAllRecords' => true])
            ->loadTable()
            ->selectTableRecords([$restorable->id, $orphan->id])
            ->callAction($testAction)
            ->assertNotified(__('revive::translations.tables.bulk_actions.restore.warning_notification_title'));
    }

    public function test_it_sends_a_failure_notification_when_all_bulk_actions_fail()
    {
        $orphan1 = RecycleBinItem::create([
            'model_id' => 999998,
            'model_type' => Post::class,
            'state' => [],
            'deleted_at' => now(),
        ]);

        $orphan2 = RecycleBinItem::create([
            'model_id' => 999999,
            'model_type' => Post::class,
            'state' => [],
            'deleted_at' => now(),
        ]);

        $testAction = TestAction::make('restore_selected')->table()->bulk();

        Livewire::test(RecycleBin::class, ['showAllRecords' => true])
            ->loadTable()
            ->selectTableRecords([$orphan1->id, $orphan2->id])
            ->callAction($testAction)
            ->assertNotified(__('revive::translations.tables.bulk_actions.restore.failure_notification_title'));
    }

    // --- Test helpers ---

    protected function seedWithDeletedUsers(int $count = 5)
    {
        UserFactory::new()->times($count)->create();

        User::inRandomOrder()
            ->take($count)
            ->get()
            ->map(fn (User $user) => $user->delete());
    }

    protected function seedWithDeletedUserPosts(User $user, int $count = 5)
    {
        $posts = PostFactory::new()->times($count)->create(['user_id' => $user->id]);

        $posts->map(fn (Post $post) => $post->delete());
    }
}
