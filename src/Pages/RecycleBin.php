<?php

namespace Promethys\Revive\Pages;

use Filament\Pages\Page;
use Filament\Panel;
use Illuminate\Support\Facades\Auth;
use Promethys\Revive\RevivePlugin;

class RecycleBin extends Page
{
    protected string $view = 'revive::pages.recycle-bin';

    protected function getCurrentTenant()
    {
        // Try to get current Filament tenant
        if (function_exists('filament') && filament()->getTenant()) {
            return filament()->getTenant();
        }

        // Try to get tenant from authenticated user
        $user = Auth::user();
        if ($user && method_exists($user, 'getCurrentTenant')) {
            return $user->getCurrentTenant();
        }

        return null;
    }

    public static function getNavigationGroup(): ?string
    {
        return static::getPlugin()?->getNavigationGroup();
    }

    public static function getNavigationSort(): ?int
    {
        return static::getPlugin()?->getNavigationSort() ?? parent::getNavigationSort();
    }

    public static function getNavigationIcon(): string
    {
        return static::getPlugin()?->getNavigationIcon() ?? parent::getNavigationIcon();
    }

    public static function getActiveNavigationIcon(): string
    {
        return static::getPlugin()?->getActiveNavigationIcon() ?? parent::getActiveNavigationIcon();
    }

    public static function getNavigationLabel(): string
    {
        return static::getPlugin()?->getNavigationLabel() ?? parent::getNavigationLabel();
    }

    public static function getSlug(?Panel $panel = null): string
    {
        /** @phpstan-ignore method.notFound (`getSlug` exists for the RevivePlugin, not in Plugin. False positive) */
        return $panel->getPlugin('revive')->getSlug() ?? parent::getSlug();
    }

    public function getTitle(): string
    {
        return static::getPlugin()?->getTitle() ?? parent::getTitle();
    }

    public static function canAccess(): bool
    {
        return static::getPlugin()?->isAuthorized() ?? false;
    }

    public function getViewData(): array
    {
        $plugin = static::getPlugin();

        return [
            'recycleBinComponent' => $plugin->getTable(),
            'componentParams' => [
                'user' => $plugin->shouldShowAllRecords() ? null : Auth::user(),
                'tenant' => $plugin->shouldShowAllRecords() ? null : $this->getCurrentTenant(),
                'models' => $plugin->getModels(),
                'showAllRecords' => $plugin->shouldShowAllRecords(),
                'enableUserScoping' => $plugin->isUserScopingEnabled(),
                'enableTenantScoping' => $plugin->isTenantScopingEnabled(),
            ],
        ];
    }

    public static function getPlugin(): ?RevivePlugin
    {
        return RevivePlugin::get();
    }
}
