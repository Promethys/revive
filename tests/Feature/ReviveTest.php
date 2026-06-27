<?php

namespace Promethys\Revive\Tests\Feature;

use Illuminate\Support\Facades\Log;
use Promethys\Revive\Revive;
use Promethys\Revive\RevivePlugin;
use Promethys\Revive\Tests\TestCase;
use Promethys\Revive\Tests\Traits\InteractsWithPanel;
use Workbench\App\Domain\Models\Widget;
use Workbench\App\Models\Post;
use Workbench\App\Models\User;

class ReviveTest extends TestCase
{
    use InteractsWithPanel;

    public function test_it_discovers_models_from_a_custom_namespace()
    {
        $this->registerPanelWithPlugin(
            RevivePlugin::make()->modelsNamespace('Workbench\\App\\Domain\\Models\\')
        );

        $models = Revive::getRecyclableModels();

        $this->assertArrayHasKey(Widget::class, $models);
        $this->assertArrayNotHasKey(Post::class, $models);
    }

    public function test_it_discovers_models_from_multiple_namespaces()
    {
        $this->registerPanelWithPlugin(
            RevivePlugin::make()->modelsNamespace([
                'Workbench\\App\\Models\\',
                'Workbench\\App\\Domain\\Models\\',
            ])
        );

        $models = Revive::getRecyclableModels();

        $this->assertArrayHasKey(Post::class, $models);
        $this->assertArrayHasKey(User::class, $models);
        $this->assertArrayHasKey(Widget::class, $models);
    }

    public function test_it_skips_and_logs_an_unresolvable_namespace()
    {
        Log::shouldReceive('warning')
            ->once()
            ->with('Could not resolve an existing directory for namespace Does\\Not\\Exist\\');

        $this->registerPanelWithPlugin(
            RevivePlugin::make()->modelsNamespace('Does\\Not\\Exist\\')
        );

        $this->assertSame([], Revive::getRecyclableModels());
    }
}
