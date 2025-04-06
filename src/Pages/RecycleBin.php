<?php

namespace MangoDev\FilamentRevive\Pages;

use Filament\Pages\Page;
use MangoDev\FilamentRevive\FilamentRevivePlugin;

class RecycleBin extends Page
{
    protected static string $view = 'filament-revive::pages.recycle-bin';

    public static function getNavigationGroup(): ?string
    {
        return FilamentRevivePlugin::get()->getNavigationGroup();
    }

    public static function getNavigationSort(): ?int
    {
        return FilamentRevivePlugin::get()->getNavigationSort();
    }

    public static function getNavigationIcon(): string
    {
        return FilamentRevivePlugin::get()->getNavigationIcon();
    }

    public static function getActiveNavigationIcon(): string
    {
        return FilamentRevivePlugin::get()->getActiveNavigationIcon();
    }

    public static function getNavigationLabel(): string
    {
        return FilamentRevivePlugin::get()->getNavigationLabel();
    }

    public static function getSlug(): string
    {
        return FilamentRevivePlugin::get()->getSlug();
    }

    public function getTitle(): string
    {
        return 'Recycle bin';
    }

    public static function canAccess(): bool
    {
        return FilamentRevivePlugin::get()->isAuthorized();
    }
}
