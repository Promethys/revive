<?php

namespace Promethys\Revive\Pages;

use Filament\Panel;
use Filament\Pages\Page;
use Promethys\Revive\RevivePlugin;

class RecycleBin extends Page
{
    protected string $view = 'revive::pages.recycle-bin';

    public static function getNavigationGroup(): ?string
    {
        return RevivePlugin::get()->getNavigationGroup();
    }

    public static function getNavigationSort(): ?int
    {
        return RevivePlugin::get()->getNavigationSort();
    }

    public static function getNavigationIcon(): string
    {
        return RevivePlugin::get()->getNavigationIcon();
    }

    public static function getActiveNavigationIcon(): string
    {
        return RevivePlugin::get()->getActiveNavigationIcon();
    }

    public static function getNavigationLabel(): string
    {
        return RevivePlugin::get()->getNavigationLabel();
    }

    public static function getSlug(?Panel $panel = null): string
    {
        return RevivePlugin::get()->getSlug();
    }

    public function getTitle(): string
    {
        return RevivePlugin::get()->getTitle();
    }

    public static function canAccess(): bool
    {
        return RevivePlugin::get()->isAuthorized();
    }
}
