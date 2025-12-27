<?php

namespace Promethys\Revive;

use Closure;
use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Concerns\EvaluatesClosures;
use Livewire\Component;
use Promethys\Revive\Pages\RecycleBin as RecycleBinPage;
use Promethys\Revive\Tables\RecycleBin as RecycleBinTable;

final class RevivePlugin implements Plugin
{
    use EvaluatesClosures;

    protected bool | Closure $authorizeUsing = true;

    protected string $page = RecycleBinPage::class;

    protected string $table = RecycleBinTable::class; // raw value 'revive::tables.recycle-bin'

    protected string | Closure | null $navigationGroup = null;

    protected int | Closure $navigationSort = 100;

    protected string | Closure $navigationIcon = 'heroicon-o-archive-box-arrow-down';

    protected string | Closure $activeNavigationIcon = 'heroicon-o-archive-box-arrow-down';

    protected string | Closure | null $navigationLabel = null;

    protected string | Closure $slug = 'recycle-bin';

    protected string | Closure $title = '';

    protected array | Closure $models = [];

    protected string $modelsNamespace = 'App\\Models\\';

    protected bool | Closure $enableUserScoping = true;

    protected bool | Closure $enableTenantScoping = true;

    protected bool | Closure $showAllRecords = false;

    /**
     * Create a new instance of the plugin.
     */
    public static function make(): static
    {
        return new self;
    }

    /**
     * Get the unique plugin ID.
     */
    public function getId(): string
    {
        return 'revive';
    }

    /**
     * Get the plugin instance from the current panel.
     */
    public static function get(): ?static
    {
        try {
            $currentPanel = filament()->getCurrentPanel();

            if (! $currentPanel) {
                return null;
            }

            // Get the plugin instance directly from the current panel
            if ($currentPanel->hasPlugin(app(static::class)->getId())) {
                /** @phpstan-ignore return.type (`static` is RevivePlugin, extends Plugin. False positive) */
                return $currentPanel->getPlugin(app(static::class)->getId());
            }

            return null;
        } catch (\Exception $e) {
            return null;
        }
    }

    /**
     * Check if the plugin is available in the current context
     */
    public static function isAvailable(): bool
    {
        return static::get() !== null;
    }

    /**
     * Register plugin pages with the Filament panel.
     */
    public function register(Panel $panel): void
    {
        $panel
            ->pages([
                $this->getPage(),
            ]);
    }

    /**
     * Register a custom page
     */
    public function registerPage(string $page): static
    {
        $this->page = $page;

        return $this;
    }

    /**
     * Return the page namespace
     */
    public function getPage(): string
    {
        return $this->page;
    }

    /**
     * Register custom table
     */
    public function registerTable(string $table): static
    {
        $this->table = $table;

        return $this;
    }

    /**
     * Return the table namespace
     */
    public function getTable(): string
    {
        return $this->table;
    }

    /**
     * Boot the plugin (called after registration).
     */
    public function boot(Panel $panel): void
    {
        //
    }

    /**
     * Set authorization logic for accessing the plugin.
     */
    public function authorize(bool | Closure $callback = true): static
    {
        $this->authorizeUsing = $callback;

        return $this;
    }

    /**
     * Check if the current user is authorized to access the plugin.
     */
    public function isAuthorized(): bool
    {
        return $this->evaluate($this->authorizeUsing) === true;
    }

    /**
     * Set the navigation group for the plugin in the sidebar.
     */
    public function navigationGroup(string | Closure | null $navigationGroup): static
    {
        $this->navigationGroup = $navigationGroup;

        return $this;
    }

    /**
     * Get the navigation group name.
     */
    public function getNavigationGroup(): ?string
    {
        return $this->evaluate($this->navigationGroup) ?? null;
    }

    /**
     * Set the navigation sort order for the plugin.
     */
    public function navigationSort(int | Closure $navigationSort): static
    {
        $this->navigationSort = $navigationSort;

        return $this;
    }

    /**
     * Get the navigation sort order.
     */
    public function getNavigationSort(): int
    {
        return $this->evaluate($this->navigationSort);
    }

    /**
     * Set the navigation icon for the plugin.
     */
    public function navigationIcon(string | Closure $navigationIcon): static
    {
        $this->navigationIcon = $navigationIcon;

        return $this;
    }

    /**
     * Get the navigation icon name.
     */
    public function getNavigationIcon(): string
    {
        return $this->evaluate($this->navigationIcon);
    }

    /**
     * Set the active navigation icon for the plugin.
     */
    public function activeNavigationIcon(string | Closure $activeNavigationIcon): static
    {
        $this->activeNavigationIcon = $activeNavigationIcon;

        return $this;
    }

    /**
     * Get the active navigation icon name.
     */
    public function getActiveNavigationIcon(): string
    {
        return $this->evaluate($this->activeNavigationIcon);
    }

    /**
     * Set the navigation label for the plugin.
     */
    public function navigationLabel(string | Closure | null $navigationLabel): static
    {
        $this->navigationLabel = $navigationLabel;

        return $this;
    }

    /**
     * Get the navigation label.
     */
    public function getNavigationLabel(): string
    {
        return $this->evaluate($this->navigationLabel) ?? $this->getTitle();
    }

    /**
     * Set the page slug for the plugin.
     */
    public function slug(string | Closure $slug): static
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get the page slug.
     */
    public function getSlug(): string
    {
        return $this->evaluate($this->slug);
    }

    /**
     * Set the page title for the plugin.
     */
    public function title(string | Closure $title): static
    {
        $this->title = empty($title) ? __('revive::translations.pages.title') : $title;

        return $this;
    }

    /**
     * Get the page title.
     */
    public function getTitle(): string
    {
        return empty($this->title) ? __('revive::translations.pages.title') : $this->evaluate($this->title);
    }

    /**
     * Set the namespace for models managed by the plugin.
     *
     * @internal This method is just here for future features, not used yet but does not throw exception.
     */
    public function modelsNamespace(string $modelsNamespace): static
    {
        $this->modelsNamespace = $modelsNamespace;

        return $this;
    }

    /**
     * Get the models namespace.
     */
    public function getModelsNamespace(): string
    {
        return $this->evaluate($this->modelsNamespace);
    }

    /**
     * Limit the recycle bin to specific models.
     */
    public function models(array | Closure $models): static
    {
        $this->models = $models;

        return $this;
    }

    /**
     * Get the list of models managed by the recycle bin.
     */
    public function getModels(): array
    {
        return $this->evaluate($this->models);
    }

    /**
     * Enable or disable user-based scoping for records.
     */
    public function enableUserScoping(bool | Closure $enable = true): static
    {
        $this->enableUserScoping = $enable;

        return $this;
    }

    /**
     * Check if user-based scoping is enabled.
     */
    public function isUserScopingEnabled(): bool
    {
        return $this->evaluate($this->enableUserScoping);
    }

    /**
     * Enable or disable tenant-based scoping for records.
     */
    public function enableTenantScoping(bool | Closure $enable = true): static
    {
        $this->enableTenantScoping = $enable;

        return $this;
    }

    /**
     * Check if tenant-based scoping is enabled.
     */
    public function isTenantScopingEnabled(): bool
    {
        return $this->evaluate($this->enableTenantScoping);
    }

    /**
     * Show all records, ignoring user and tenant scoping (admin mode).
     */
    public function showAllRecords(bool | Closure $showAll = true): static
    {
        $this->showAllRecords = $showAll;

        return $this;
    }

    /**
     * Check if all records should be shown (admin mode).
     */
    public function shouldShowAllRecords(): bool
    {
        return $this->evaluate($this->showAllRecords);
    }

    /**
     * Disable both user and tenant scoping and show all records.
     */
    public function withoutScoping(): static
    {
        return $this->enableUserScoping(false)
            ->enableTenantScoping(false)
            ->showAllRecords(true);
    }

    /**
     * TODO: register custom table. Also do a custom page registering.
     *
     * @return RevivePlugin
     */
    // public function table(Component $table): static
    // {
    //     $this->table = $table;

    //     return $this;
    // }

    // public function getTable(): Component
    // {
    //     return $this->evaluate($this->table);
    // }

    // public function page(Component $table): static
    // {
    //     $this->table = $table;

    //     return $this;
    // }

    // public function getPage(): Component
    // {
    //     return $this->evaluate($this->table);
    // }
}
