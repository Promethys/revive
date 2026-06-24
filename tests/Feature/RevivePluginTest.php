<?php

namespace Promethys\Revive\Tests\Feature;

use Filament\Facades\Filament;
use Filament\Panel;
use Promethys\Revive\Pages\RecycleBin as RecycleBinPage;
use Promethys\Revive\RevivePlugin;
use Promethys\Revive\Tests\TestCase;
use Promethys\Revive\Tests\Traits\InteractsWithPanel;
use Workbench\App\Filament\Pages\CustomPage;

class RevivePluginTest extends TestCase
{
    use InteractsWithPanel;

    public function test_cannot_get_plugin_outside_panel()
    {
        $this->assertNull(RevivePlugin::get());
    }

    public function test_can_get_plugin_inside_panel()
    {
        $this->registerPanelWithBasicPlugin();

        $this->assertNotNull(RevivePlugin::get());
    }

    public function test_plugin_is_available_inside_panel()
    {
        $this->registerPanelWithBasicPlugin();

        $this->assertTrue(RevivePlugin::isAvailable());
    }

    public function test_plugin_is_not_available_outside_panel()
    {
        $this->assertFalse(RevivePlugin::isAvailable());
    }

    public function test_register_method_registers_plugin_page()
    {
        $this->registerPanelWithBasicPlugin();

        $panel = filament()->getCurrentPanel();

        $this->assertNotEmpty($panel->getPages());
        $this->assertContains(RecycleBinPage::class, $panel->getPages());
    }

    public function test_plugin_can_register_custom_page()
    {
        $this->registerPanel(Panel::make()
            ->default()
            ->plugins([
                RevivePlugin::make()
                    ->registerPage(CustomPage::class)
            ]));

        $panel = filament()->getCurrentPanel();

        $this->assertNotEmpty($panel->getPages());
        $this->assertContains(CustomPage::class, $panel->getPages());
        $this->assertNotContains(RecycleBinPage::class, $panel->getPages());
    }

    public function test_plugin_has_default_title()
    {
        $plugin = RevivePlugin::make();

        $this->assertEquals(__('revive::translations.pages.title'), $plugin->getTitle());
    }

    public function test_plugin_falls_back_to_default_title_when_setting_empty_title()
    {
        $plugin = RevivePlugin::make()
            ->title('');

        $this->assertEquals(__('revive::translations.pages.title'), $plugin->getTitle());
    }

    public function test_plugin_has_default_navigation_label()
    {
        $plugin = RevivePlugin::make();

        $this->assertEquals(__('revive::translations.pages.title'), $plugin->getNavigationLabel());
    }
}
