<?php

namespace Promethys\Revive\Tests\Unit;

use Filament\Support\Concerns\EvaluatesClosures;
use PHPUnit\Framework\TestCase;
use Promethys\Revive\Models\RecycleBinItem;
use Promethys\Revive\Pages\RecycleBin as RecycleBinPage;
use Promethys\Revive\RevivePlugin;
use Promethys\Revive\Tables\RecycleBin as RecycleBinTable;
use Workbench\App\Filament\Tables\CustomTable;

class RevivePluginTest extends TestCase
{
    public function test_plugin_uses_evaluates_closures_trait()
    {
        $this->assertContains(EvaluatesClosures::class, class_uses(RevivePlugin::class));
    }

    public function test_plugin_has_default_id()
    {
        $plugin = RevivePlugin::make();

        $this->assertEquals('revive', $plugin->getId());
    }

    public function test_plugin_can_get_page()
    {
        $plugin = RevivePlugin::make();

        $this->assertEquals(RecycleBinPage::class, $plugin->getPage());
    }

    public function test_plugin_can_register_custom_table()
    {
        $plugin = RevivePlugin::make()
            ->registerTable(CustomTable::class);

        $this->assertEquals(CustomTable::class, $plugin->getTable());
    }

    public function test_plugin_can_get_table()
    {
        $plugin = RevivePlugin::make();

        $this->assertEquals(RecycleBinTable::class, $plugin->getTable());
    }

    public function test_plugin_can_use_custom_authorization_logic()
    {
        $plugin = RevivePlugin::make()
            ->authorize(fn () => false);

        $this->assertFalse($plugin->isAuthorized());
    }

    public function test_plugin_uses_a_simple_default_authorization_logic()
    {
        $plugin = RevivePlugin::make();

        $this->assertIsBool($plugin->isAuthorized());
        $this->assertTrue($plugin->isAuthorized());
    }

    public function test_plugin_can_set_navigation_group()
    {
        $plugin = RevivePlugin::make()
            ->navigationGroup('Settings');

        $this->assertEquals('Settings', $plugin->getNavigationGroup());
    }

    public function test_plugin_has_default_navigation_group()
    {
        $plugin = RevivePlugin::make();

        $this->assertNull($plugin->getNavigationGroup());
    }

    public function test_plugin_can_set_navigation_sort()
    {
        $plugin = RevivePlugin::make()
            ->navigationSort(5);

        $this->assertEquals(5, $plugin->getNavigationSort());
    }

    public function test_plugin_has_default_navigation_sort()
    {
        $plugin = RevivePlugin::make();

        $this->assertEquals(100, $plugin->getNavigationSort());
    }

    public function test_plugin_can_set_navigation_icon()
    {
        $plugin = RevivePlugin::make()
            ->navigationIcon('heroicon-o-trash');

        $this->assertEquals('heroicon-o-trash', $plugin->getNavigationIcon());
    }

    public function test_plugin_has_default_navigation_icon()
    {
        $plugin = RevivePlugin::make();

        $this->assertEquals('heroicon-o-archive-box-arrow-down', $plugin->getNavigationIcon());
    }

    public function test_plugin_can_set_active_navigation_icon()
    {
        $plugin = RevivePlugin::make()
            ->activeNavigationIcon('heroicon-o-trash');

        $this->assertEquals('heroicon-o-trash', $plugin->getActiveNavigationIcon());
    }

    public function test_plugin_has_default_active_navigation_icon()
    {
        $plugin = RevivePlugin::make();

        $this->assertEquals('heroicon-o-archive-box-arrow-down', $plugin->getActiveNavigationIcon());
    }

    public function test_plugin_can_set_navigation_label()
    {
        $plugin = RevivePlugin::make()
            ->navigationLabel('Deleted Items');

        $this->assertEquals('Deleted Items', $plugin->getNavigationLabel());
    }

    public function test_plugin_can_set_slug()
    {
        $plugin = RevivePlugin::make()
            ->slug('trash');

        $this->assertEquals('trash', $plugin->getSlug());
    }

    public function test_plugin_has_default_slug()
    {
        $plugin = RevivePlugin::make();

        $this->assertEquals('recycle-bin', $plugin->getSlug());
    }

    public function test_plugin_can_set_title()
    {
        $plugin = RevivePlugin::make()
            ->title('Custom Title');

        $this->assertEquals('Custom Title', $plugin->getTitle());
    }

    public function test_plugin_can_set_models_namespace()
    {
        $plugin = RevivePlugin::make()
            ->modelsNamespace('App\\Domain\\Models\\');

        $this->assertEquals('App\\Domain\\Models\\', $plugin->getModelsNamespace());
    }

    public function test_plugin_has_default_models_namespace()
    {
        $plugin = RevivePlugin::make();

        $this->assertEquals('App\\Models\\', $plugin->getModelsNamespace());
    }

    public function test_plugin_can_set_models()
    {
        $models = [RecycleBinItem::class];

        $plugin = RevivePlugin::make()
            ->models($models);

        $this->assertEquals($models, $plugin->getModels());
    }

    public function test_plugin_has_default_models()
    {
        $plugin = RevivePlugin::make();

        $this->assertEquals([], $plugin->getModels());
    }

    public function test_plugin_can_enable_user_scoping()
    {
        $plugin = RevivePlugin::make()
            ->enableUserScoping(false);

        $this->assertFalse($plugin->isUserScopingEnabled());
    }

    public function test_plugin_can_check_user_scoping()
    {
        $plugin = RevivePlugin::make();

        $this->assertIsBool($plugin->isUserScopingEnabled());
        $this->assertTrue($plugin->isUserScopingEnabled());
    }

    public function test_plugin_can_enable_tenant_scoping()
    {
        $plugin = RevivePlugin::make()
            ->enableTenantScoping(false);

        $this->assertFalse($plugin->isTenantScopingEnabled());
    }

    public function test_plugin_can_check_tenant_scoping()
    {
        $plugin = RevivePlugin::make();

        $this->assertIsBool($plugin->isTenantScopingEnabled());
        $this->assertTrue($plugin->isTenantScopingEnabled());
    }

    public function test_plugin_can_show_all_records()
    {
        $plugin = RevivePlugin::make()
            ->showAllRecords();

        $this->assertTrue($plugin->shouldShowAllRecords());
    }

    public function test_plugin_can_check_if_it_show_all_records()
    {
        $plugin = RevivePlugin::make();

        $this->assertIsBool($plugin->shouldShowAllRecords());
        $this->assertFalse($plugin->shouldShowAllRecords());
    }

    public function test_plugin_can_disable_all_scopings()
    {
        $plugin = RevivePlugin::make()
            ->withoutScoping();

        $this->assertFalse($plugin->isUserScopingEnabled());
        $this->assertFalse($plugin->isTenantScopingEnabled());
        $this->assertTrue($plugin->shouldShowAllRecords());
    }
}
