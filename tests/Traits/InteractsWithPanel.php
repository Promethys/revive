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

    public function registerPanelWithBasicPlugin(): void
    {
        $this->registerPanel(Panel::make()
            ->default()
            ->plugins([
                RevivePlugin::make()
            ]));
    }
}
