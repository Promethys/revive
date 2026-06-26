<?php

namespace Promethys\Revive\Tests\Feature\Models;

use Carbon\Carbon;
use Promethys\Revive\Models\RecycleBinItem;
use Promethys\Revive\Tests\TestCase;
use Workbench\App\Models\User;
use Workbench\Database\Factories\UserFactory;

class RecycleBinItemTest extends TestCase
{
    // --- Schema / configuration ---

    public function test_it_uses_the_recycle_bin_items_table()
    {
        $recycleBinItem = RecycleBinItem::create([
            'model_id' => 1,
            'model_type' => User::class,
            'state' => [],
            'deleted_at' => now(),
            'deleted_by' => 1,
            'tenant_id' => 1,
        ]);

        $this->assertDatabaseHas('recycle_bin_items', [
            'id' => $recycleBinItem->id,
            'model_id' => 1,
            'model_type' => User::class,
            'state' => json_encode([]),
            'deleted_by' => 1,
            'tenant_id' => 1,
        ]);
    }

    public function test_it_allows_mass_assignment_of_fillable_attributes()
    {
        RecycleBinItem::create([
            'model_id' => 1,
            'model_type' => User::class,
            'state' => [],
            'deleted_at' => now(),
            'deleted_by' => 1,
            'tenant_id' => 1,
        ]);

        RecycleBinItem::create([
            'model_id' => 2,
            'model_type' => User::class,
            'state' => [],
            'deleted_at' => now(),
            'deleted_by' => 1,
            'tenant_id' => 1,
        ]);

        $this->assertDatabaseCount('recycle_bin_items', 2);

        RecycleBinItem::where('model_type', User::class)->update([
            'state' => ['foo' => 'bar'],
            'deleted_by' => null,
            'tenant_id' => null,
        ]);

        $this->assertDatabaseCount('recycle_bin_items', 2);
        $this->assertDatabaseHas('recycle_bin_items', [
            'model_id' => 1,
            'model_type' => User::class,
            'state' => json_encode(['foo' => 'bar']),
            'deleted_by' => null,
            'tenant_id' => null,
        ]);
        $this->assertDatabaseHas('recycle_bin_items', [
            'model_id' => 2,
            'model_type' => User::class,
            'state' => json_encode(['foo' => 'bar']),
            'deleted_by' => null,
            'tenant_id' => null,
        ]);
    }

    // --- Casts ---

    public function test_it_casts_state_to_an_array()
    {
        $recycleBinItem = RecycleBinItem::create([
            'model_id' => 1,
            'model_type' => User::class,
            'state' => ['foo' => 'bar'],
            'deleted_at' => now(),
            'deleted_by' => 1,
            'tenant_id' => 1,
        ]);

        $this->assertIsArray($recycleBinItem->state);
        $this->assertEquals(['foo' => 'bar'], $recycleBinItem->state);
    }

    public function test_it_persists_and_returns_state_as_an_array()
    {
        RecycleBinItem::create([
            'model_id' => 1,
            'model_type' => User::class,
            'state' => ['foo' => 'bar'],
            'deleted_at' => now(),
            'deleted_by' => 1,
            'tenant_id' => 1,
        ]);

        $recycleBinItem = RecycleBinItem::where([
            'model_id' => 1,
            'model_type' => User::class,
        ])->first();

        $this->assertNotNull($recycleBinItem);
        $this->assertIsArray($recycleBinItem->state);
        $this->assertEquals(['foo' => 'bar'], $recycleBinItem->state);
    }

    public function test_it_casts_deleted_at_to_a_carbon_instance()
    {
        $user = UserFactory::new()->create();
        $user->delete();

        $this->assertNotNull($user->recycleBinItem->deleted_at);
        $this->assertInstanceOf(Carbon::class, $user->recycleBinItem->deleted_at);
    }

    // --- model() relationship ---

    public function test_it_defines_a_morph_to_model_relationship()
    {
        $user = UserFactory::new()->create();
        $user->delete();

        $this->assertNotNull($user->recycleBinItem);
        $this->assertInstanceOf(RecycleBinItem::class, $user->recycleBinItem);
        $this->assertInstanceOf(User::class, $user->recycleBinItem->model);
    }

    public function test_it_resolves_the_related_model()
    {
        $user = UserFactory::new()->create();
        RecycleBinItem::create([
            'model_id' => $user->id,
            'model_type' => User::class,
            'state' => [],
            'deleted_at' => now(),
            'deleted_by' => 1,
            'tenant_id' => 1,
        ]);

        $this->assertNotNull($user->recycleBinItem);
        $this->assertInstanceOf(User::class, $user->recycleBinItem->model);
        $this->assertTrue($user->is($user->recycleBinItem->model));
    }

    public function test_it_resolves_the_related_model_even_when_soft_deleted()
    {
        $user = UserFactory::new()->create();
        $user->delete();

        $this->assertNotNull($user->recycleBinItem);
        $this->assertInstanceOf(User::class, $user->recycleBinItem->model);
        $this->assertTrue($user->is($user->recycleBinItem->model));
    }

    public function test_it_eager_loads_the_model_relationship_by_default()
    {
        $user = UserFactory::new()->create();
        $user->delete();

        $recycleBinItem = RecycleBinItem::first();

        $this->assertTrue($recycleBinItem->relationLoaded('model'));
    }
}
