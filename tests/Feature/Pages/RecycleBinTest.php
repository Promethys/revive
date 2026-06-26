<?php

namespace Promethys\Revive\Tests\Feature\Pages;

use Filament\Facades\Filament;
use Filament\Panel;
use Promethys\Revive\Pages\RecycleBin;
use Promethys\Revive\RevivePlugin;
use Promethys\Revive\Tests\TestCase;
use Promethys\Revive\Tests\Traits\InteractsWithPanel;
use Workbench\App\Filament\Tables\CustomTable;
use Workbench\App\Models\Team;
use Workbench\Database\Factories\TeamFactory;
use Workbench\Database\Factories\UserFactory;

class RecycleBinTest extends TestCase
{
    use InteractsWithPanel;

    // --- Authorization ---

    public function test_it_can_be_accessed_when_the_plugin_authorizes()
    {
        $this->registerPanelWithPlugin();

        $this->assertTrue(RecycleBin::canAccess());
    }

    public function test_it_cannot_be_accessed_when_the_plugin_denies()
    {
        $this->registerPanelWithPlugin(
            RevivePlugin::make()
                ->authorize(false)
        );

        $this->assertFalse(RecycleBin::canAccess());
    }

    // --- Navigation / identity from the plugin config ---

    public function test_it_uses_the_configured_slug()
    {
        $this->registerPanelWithPlugin(
            RevivePlugin::make()
                ->slug('custom-slug')
        );

        $this->assertEquals('custom-slug', RecycleBin::getSlug(filament()->getCurrentPanel()));
    }

    public function test_it_uses_the_configured_navigation_group()
    {
        $this->registerPanelWithPlugin(
            RevivePlugin::make()
                ->navigationGroup('Settings')
        );

        $this->assertEquals('Settings', RecycleBin::getNavigationGroup());
    }

    public function test_it_uses_the_configured_navigation_sort()
    {
        $this->registerPanelWithPlugin(
            RevivePlugin::make()
                ->navigationSort(7)
        );

        $this->assertEquals(7, RecycleBin::getNavigationSort());
    }

    public function test_it_uses_the_configured_navigation_icon()
    {
        $this->registerPanelWithPlugin(
            RevivePlugin::make()
                ->navigationIcon('heroicon-o-trash')
        );

        $this->assertEquals('heroicon-o-trash', RecycleBin::getNavigationIcon());
    }

    public function test_it_uses_the_configured_active_navigation_icon()
    {
        $this->registerPanelWithPlugin(
            RevivePlugin::make()
                ->activeNavigationIcon('heroicon-o-trash')
        );

        $this->assertEquals('heroicon-o-trash', RecycleBin::getActiveNavigationIcon());
    }

    public function test_it_uses_the_configured_navigation_label()
    {
        $this->registerPanelWithPlugin(
            RevivePlugin::make()
                ->navigationLabel('Deleted Items')
        );

        $this->assertEquals('Deleted Items', RecycleBin::getNavigationLabel());
    }

    public function test_it_uses_the_configured_title()
    {
        $this->registerPanelWithPlugin(
            RevivePlugin::make()
                ->title('Custom Title')
        );

        $this->assertEquals('Custom Title', app(RecycleBin::class)->getTitle());
    }

    // --- getViewData() wiring to the table component ---

    public function test_it_passes_the_scoping_params_to_the_table_component()
    {
        $this->registerPanelWithPlugin();

        $viewData = app(RecycleBin::class)->getViewData();

        $this->assertIsArray($viewData);
        $this->assertArrayHasKey('recycleBinComponent', $viewData);
        $this->assertArrayHasKey('componentParams', $viewData);
        $this->assertIsString($viewData['recycleBinComponent']);
        $this->assertIsArray($viewData['componentParams']);
        $this->assertArrayHasKey('user', $viewData['componentParams']);
        $this->assertArrayHasKey('tenant', $viewData['componentParams']);
        $this->assertArrayHasKey('models', $viewData['componentParams']);
        $this->assertArrayHasKey('showAllRecords', $viewData['componentParams']);
        $this->assertArrayHasKey('enableUserScoping', $viewData['componentParams']);
        $this->assertArrayHasKey('enableTenantScoping', $viewData['componentParams']);
        $this->assertCount(2, $viewData);
        $this->assertCount(6, $viewData['componentParams']);
    }

    public function test_it_passes_null_user_and_tenant_when_showing_all_records()
    {
        $this->registerPanelWithPlugin(
            RevivePlugin::make()
                ->showAllRecords()
        );

        $viewData = app(RecycleBin::class)->getViewData();

        $this->assertNull($viewData['componentParams']['user']);
        $this->assertNull($viewData['componentParams']['tenant']);
    }

    public function test_it_renders_the_registered_custom_table()
    {
        $this->registerPanelWithPlugin(
            RevivePlugin::make()
                ->registerTable(CustomTable::class)
        );

        $viewData = app(RecycleBin::class)->getViewData();

        $this->assertEquals(CustomTable::class, $viewData['recycleBinComponent']);
    }

    public function test_it_resolves_the_current_tenant()
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

        $viewData = app(RecycleBin::class)->getViewData();

        $this->assertTrue($team->is($viewData['componentParams']['tenant']));
    }
}
