<?php

namespace Promethys\Revive\Tests\Feature\Concerns;

use Carbon\Carbon;
use Filament\Facades\Filament;
use Filament\Panel;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Promethys\Revive\Models\RecycleBinItem;
use Promethys\Revive\RevivePlugin;
use Promethys\Revive\Tests\TestCase;
use Promethys\Revive\Tests\Traits\InteractsWithPanel;
use Workbench\App\Models\Migration;
use Workbench\App\Models\Post;
use Workbench\App\Models\Team;
use Workbench\App\Models\User;
use Workbench\Database\Factories\PostFactory;
use Workbench\Database\Factories\TeamFactory;
use Workbench\Database\Factories\UserFactory;

class RecyclableTest extends TestCase
{
    use InteractsWithPanel;

    public function test_recycle_bin_items_table_is_created_by_migration()
    {
        $this->assertTrue(Schema::hasTable('recycle_bin_items'));
    }

    public function test_trait_does_not_throw_exception_when_used_with_soft_deletes()
    {
        UserFactory::new()->create();

        $this->assertInstanceOf(Collection::class, User::all());
    }

    public function test_trait_throws_exception_when_used_without_soft_deletes()
    {
        $this->assertThrows(
            fn () => Migration::all(),
            fn (\Exception $e) => $e->getMessage() === (Migration::class . ' must use SoftDeletes to be recyclable.')
        );
    }

    public function test_recyclable_model_has_one_polymorphic_recycle_bin_item()
    {
        $user = UserFactory::new()->create();

        $this->assertDatabaseMissing('recycle_bin_items', [
            'model_id' => $user->id,
            'model_type' => $user->getMorphClass(),
        ]);

        $user->delete();

        $this->assertDatabaseHas('recycle_bin_items', [
            'model_id' => $user->id,
            'model_type' => $user->getMorphClass(),
        ]);
        $this->assertInstanceOf(RecycleBinItem::class, $user->recycleBinItem);
    }

    public function test_force_deleting_a_recyclable_model_does_not_create_a_recycle_bin_item()
    {
        $user = UserFactory::new()->create();

        $this->assertDatabaseMissing('recycle_bin_items', [
            'model_id' => $user->id,
            'model_type' => $user->getMorphClass(),
        ]);

        $user->forceDelete();

        $this->assertDatabaseMissing('recycle_bin_items', [
            'model_id' => $user->id,
            'model_type' => $user->getMorphClass(),
        ]);
        $this->assertNull($user->recycleBinItem);
    }

    public function test_restoring_a_recyclable_model_deletes_its_recycle_bin_item()
    {
        $user = UserFactory::new()->create();
        $user->delete();

        $this->assertDatabaseHas('recycle_bin_items', [
            'model_id' => $user->id,
            'model_type' => $user->getMorphClass(),
        ]);

        $user->restore();

        $this->assertDatabaseMissing('recycle_bin_items', [
            'model_id' => $user->id,
            'model_type' => $user->getMorphClass(),
        ]);
        $this->assertNull($user->recycleBinItem);
    }

    public function test_deleting_stores_a_state_snapshot_of_the_model()
    {
        $user = UserFactory::new()->create();
        $user->delete();

        $this->assertDatabaseHas('recycle_bin_items', [
            'model_id' => $user->id,
            'model_type' => $user->getMorphClass(),
        ]);
        $this->assertArrayHasKey('name', $user->recycleBinItem->state);
        $this->assertArrayHasKey('email', $user->recycleBinItem->state);
        $this->assertContains($user->name, $user->recycleBinItem->state);
        $this->assertContains($user->email, $user->recycleBinItem->state);
    }

    public function test_deleting_stores_the_deleted_at_timestamp()
    {
        $user = UserFactory::new()->create();
        $user->delete();

        $recycleBinItem = RecycleBinItem::where('model_id', $user->id)
            ->where('model_type', $user->getMorphClass())
            ->first();

        $this->assertNotNull($recycleBinItem->deleted_at);
        $this->assertInstanceOf(Carbon::class, $recycleBinItem->deleted_at);
        $this->assertTrue($recycleBinItem->deleted_at->isPast());
    }

    public function test_force_deleting_an_already_trashed_model_removes_its_recycle_bin_item()
    {
        $user = UserFactory::new()->create();
        $user->delete();

        $this->assertDatabaseHas('recycle_bin_items', [
            'model_id' => $user->id,
            'model_type' => $user->getMorphClass(),
        ]);

        $user->forceDelete();

        $this->assertNull($user->recycleBinItem);
        $this->assertDatabaseMissing('recycle_bin_items', [
            'model_id' => $user->id,
            'model_type' => $user->getMorphClass(),
        ]);
    }

    public function test_deleting_records_the_authenticated_user_as_deleted_by()
    {
        $this->actingAs(UserFactory::new()->create());
        $post = PostFactory::new()->create(['user_id' => null]);

        $post->delete();

        $this->assertEquals(auth()->id(), $post->recycleBinItem->deleted_by);
    }

    public function test_deleting_records_deleted_by_from_the_model_attribute()
    {
        $post = PostFactory::new()->create();
        $post->deleted_by = 999;

        $post->delete();

        $this->assertEquals(999, $post->recycleBinItem->deleted_by);
    }

    public function test_deleting_falls_back_to_user_id_attribute_for_deleted_by()
    {
        $post = PostFactory::new()->create(['user_id' => 999]);

        $post->delete();

        $this->assertEquals(999, $post->recycleBinItem->deleted_by);
    }

    public function test_trait_can_get_user_who_deleted_the_model()
    {
        $this->actingAs(UserFactory::new()->create());
        $post = PostFactory::new()->create(['user_id' => auth()->id()]);

        $post->delete();

        $this->assertEquals(auth()->id(), $post->getDeletedByUser());
    }

    public function test_deleting_records_the_tenant_id_attribute()
    {
        $user = UserFactory::new()->create();
        $user->tenant_id = 999;

        $user->delete();

        $this->assertEquals(999, $user->recycleBinItem->tenant_id);
    }

    public function test_deleting_falls_back_to_team_id_attribute_for_tenant()
    {
        $user = UserFactory::new()->create(['team_id' => 999]);

        $user->delete();

        $this->assertEquals(999, $user->recycleBinItem->tenant_id);
    }

    public function test_deleting_records_the_current_filament_tenant_id()
    {
        $this->registerPanel(Panel::make()
            ->default()
            ->tenant(Team::class)
            ->plugins([
                RevivePlugin::make(),
            ]));

        $team = TeamFactory::new()->create();

        $this->actingAs(UserFactory::new()->create(['team_id' => $team->id]));
        Filament::setTenant($team);

        $post = PostFactory::new()->create(['user_id' => auth()->id()]);

        $post->delete();

        $this->assertEquals($team->id, $post->recycleBinItem->tenant_id);
    }

    public function test_trait_can_get_the_tenant_id()
    {
        $team = TeamFactory::new()->create();
        $user = UserFactory::new()->create(['team_id' => $team->id]);
        $user->delete();

        $this->assertEquals($user->team?->id, $user->getTenantId());
    }

    public function test_deleting_a_recyclable_model_logs_event()
    {
        $user = UserFactory::new()->create();

        Log::shouldReceive('info')
            ->once()
            ->with("Deleted {$user->getTable()} #{$user->id}");

        $user->delete();
    }

    public function test_force_deleting_a_recyclable_model_logs_event()
    {
        $user = UserFactory::new()->create();

        Log::shouldReceive('info')
            ->once()
            ->with("Permanently deleted {$user->getTable()} #{$user->id}");

        $user->forceDelete();
    }

    public function test_restoring_a_recyclable_model_logs_event()
    {
        $user = UserFactory::new()->create();
        $user->delete();

        Log::shouldReceive('info')
            ->once()
            ->with("Restored {$user->getTable()} #{$user->id}");

        $user->restore();
    }

    public function test_recycle_bin_query_scope_returns_only_trashed_records()
    {
        $user1 = UserFactory::new()->create();
        $user2 = UserFactory::new()->create();

        $user1->delete();

        $this->assertEquals(1, User::recycleBinQuery()->count());
        $this->assertEquals($user1->id, User::recycleBinQuery()->first()?->id);
        $this->assertNull(User::recycleBinQuery()->where('id', $user2->id)->first());
    }

    public function test_recycle_bin_query_scope_filters_by_the_user_relation()
    {
        $user1 = UserFactory::new()->create();
        $user2 = UserFactory::new()->create();

        $post1 = PostFactory::new()->create(['user_id' => $user1->id]);
        $post2 = PostFactory::new()->create(['user_id' => $user2->id]);

        $post1->delete();
        $post2->delete();

        $results = Post::recycleBinQuery($user1)->get();

        $this->assertTrue($results->contains('id', $post1->id));
        $this->assertFalse($results->contains('id', $post2->id));
    }

    public function test_recycle_bin_query_scope_filters_by_the_tenant_team_id()
    {
        $team1 = TeamFactory::new()->create();
        $team2 = TeamFactory::new()->create();

        $user1 = UserFactory::new()->create(['team_id' => $team1->id]);
        $user2 = UserFactory::new()->create(['team_id' => $team2->id]);

        $user1->delete();
        $user2->delete();

        $results = User::recycleBinQuery(null, $team1)->get();

        $this->assertTrue($results->contains('id', $user1->id));
        $this->assertFalse($results->contains('id', $user2->id));
    }

    public function test_show_trashed_returns_only_trashed_records()
    {
        $user1 = UserFactory::new()->create();
        $user2 = UserFactory::new()->create();

        $user1->delete();

        $results = User::showTrashed()->get();

        $this->assertTrue($results->contains('id', $user1->id));
        $this->assertFalse($results->contains('id', $user2->id));
    }
}
