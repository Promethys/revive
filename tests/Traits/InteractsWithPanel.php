<?php

namespace Promethys\Revive\Tests\Traits;

use Filament\Facades\Filament;
use Filament\Panel;
use Promethys\Revive\RevivePlugin;

trait InteractsWithPanel
{
    public function panel(Panel $panel): Panel
    {
        return $panel;
    }

    public function registerPanel(Panel $panel): void
    {
        Filament::registerPanel(
            fn (): Panel => $this->panel(
                $panel
            ),
        );

        Filament::setCurrentPanel($panel);
    }

    public function registerPanelWithPlugin(?RevivePlugin $plugin = null, array $options = []): void
    {
        $plugin ??= RevivePlugin::make();
        $panel = Panel::make()
            ->default()
            ->plugins([
                $plugin,
            ]);

        if (isset($options['tenant']) && ! is_null($options['tenant'])) {
            $panel->tenant($options['tenant']);
        }

        $this->registerPanel($panel);
    }
}
