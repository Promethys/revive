<?php

namespace Promethys\Revive\Tests\Feature\Concerns;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Promethys\Revive\Models\RecycleBinItem;
use Promethys\Revive\Tests\TestCase;
use Workbench\App\Models\Migration;
use Workbench\App\Models\User;
use Workbench\Database\Factories\UserFactory;

class RecyclableTest extends TestCase
{
    public function test_recycle_bin_items_table_is_created_by_migration()
    {
        $this->assertTrue(Schema::hasTable('recycle_bin_items'));
    }

    public function test_trait_does_not_throw_exception_when_used_with_soft_deletes()
    {
        $this->assertDoesntThrow(
            fn () => User::all()
        );
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

    // public function test_deleting_a_recyclable_model_logs_event()
    // {
    //     $user = UserFactory::new()->create();

    //     $user->delete();

    //     Log::shouldReceive('info')
    //         ->with("Deleted {$user->getTable()} #{$user->id}");
    // }

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

    // public function test_deleting_stores_a_state_snapshot_of_the_model(){}

    // public function test_deleting_stores_the_deleted_at_timestamp(){}

    // public function test_force_deleting_an_already_trashed_model_removes_its_recycle_bin_item(){}

    // public function test_deleting_records_the_authenticated_user_as_deleted_by(){}

    // public function test_deleting_records_deleted_by_from_the_model_attribute(){}

    // public function test_deleting_falls_back_to_user_id_attribute_for_deleted_by(){}

    // public function test_get_deleted_by_user_can_be_overridden_by_the_model(){}

    // public function test_trait_can_get_user_who_deleted_the_model(){}

    // public function test_deleting_records_the_tenant_id_attribute(){}

    // public function test_deleting_falls_back_to_team_id_attribute_for_tenant(){}

    // public function test_deleting_records_the_current_filament_tenant_id(){}

    // public function test_get_tenant_id_can_be_overridden_by_the_model(){}

    // public function test_trait_can_get_the_tenant_id(){}

    // public function test_deleting_a_recyclable_model_logs_event(){}

    // public function test_force_deleting_a_recyclable_model_logs_event(){}

    // public function test_restoring_a_recyclable_model_logs_event(){}

    // public function test_recycle_bin_query_scope_returns_only_trashed_records(){}
}
