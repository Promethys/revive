<?php

namespace Promethys\Revive;

use Closure;
use Filament\Contracts\Plugin;
use Filament\FilamentManager;
use Filament\Panel;
use Filament\Support\Concerns\EvaluatesClosures;
use Livewire\Component;
use Promethys\Revive\Pages\RecycleBin;

class RevivePlugin implements Plugin
{
    use EvaluatesClosures;

    protected bool|Closure $authorizeUsing = true;
    protected string $recycleBin = RecycleBin::class;
    protected string|Closure|null $navigationGroup = null;
    protected int|Closure $navigationSort = 100;
    protected string|Closure $navigationIcon = 'heroicon-o-archive-box-arrow-down';
    protected string|Closure $activeNavigationIcon = 'heroicon-o-archive-box-arrow-down';
    protected string|Closure|null $navigationLabel = null;
    protected string|Closure $slug = 'recycle-bin';
    protected string|Closure $title = '';
    protected array|Closure $models = [];
    protected string $modelsNamespace = 'App\\Models\\';
    protected bool $enableUserScoping = true;
    protected bool $enableTenantScoping = true;
    protected bool $showAllRecords = false;

    /**
     * Create a new instance of the plugin.
     *
     * @return static
     */
    public static function make(): static
    {
        return new static();
    }

    /**
     * Get the unique plugin ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return 'revive';
    }

    /**
     * Get the plugin instance from the current panel.
     *
     * @return static | null
     */
    public static function get(): static|null
    {
        try {
            $currentPanel = filament()->getCurrentPanel();

            if (!$currentPanel) {
                return null;
            }

            // Get the plugin instance directly from the current panel
            if ($currentPanel->hasPlugin(app(static::class)->getId())) {
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
     *
     * @param Panel $panel
     * @return void
     */
    public function register(Panel $panel): void
    {
        $panel
            ->pages([
                $this->recycleBin,
            ]);
    }

    /**
     * Boot the plugin (called after registration).
     *
     * @param Panel $panel
     * @return void
     */
    public function boot(Panel $panel): void
    {
        //
    }

    /**
     * Set authorization logic for accessing the plugin.
     *
     * @param bool | Closure $callback
     * @return static
     */
    public function authorize(bool|Closure $callback = true): static
    {
        $this->authorizeUsing = $callback;

        return $this;
    }

    /**
     * Check if the current user is authorized to access the plugin.
     *
     * @return bool
     */
    public function isAuthorized(): bool
    {
        return $this->evaluate($this->authorizeUsing) === true;
    }

    /**
     * Set the navigation group for the plugin in the sidebar.
     *
     * @param string | Closure | null $navigationGroup
     * @return static
     */
    public function navigationGroup(string|Closure|null $navigationGroup): static
    {
        $this->navigationGroup = $navigationGroup;

        return $this;
    }

    /**
     * Get the navigation group name.
     *
     * @return string | null
     */
    public function getNavigationGroup(): ?string
    {
        return $this->evaluate($this->navigationGroup) ?? null;
    }

    /**
     * Set the navigation sort order for the plugin.
     *
     * @param int | Closure $navigationSort
     * @return static
     */
    public function navigationSort(int|Closure $navigationSort): static
    {
        $this->navigationSort = $navigationSort;

        return $this;
    }

    /**
     * Get the navigation sort order.
     *
     * @return int
     */
    public function getNavigationSort(): int
    {
        return $this->evaluate($this->navigationSort);
    }

    /**
     * Set the navigation icon for the plugin.
     *
     * @param string | Closure $navigationIcon
     * @return static
     */
    public function navigationIcon(string|Closure $navigationIcon): static
    {
        $this->navigationIcon = $navigationIcon;

        return $this;
    }

    /**
     * Get the navigation icon name.
     *
     * @return string
     */
    public function getNavigationIcon(): string
    {
        return $this->evaluate($this->navigationIcon);
    }

    /**
     * Set the active navigation icon for the plugin.
     *
     * @param string | Closure $activeNavigationIcon
     * @return static
     */
    public function activeNavigationIcon(string|Closure $activeNavigationIcon): static
    {
        $this->activeNavigationIcon = $activeNavigationIcon;

        return $this;
    }

    /**
     * Get the active navigation icon name.
     *
     * @return string
     */
    public function getActiveNavigationIcon(): string
    {
        return $this->evaluate($this->activeNavigationIcon);
    }

    /**
     * Set the navigation label for the plugin.
     *
     * @param string | Closure | null $navigationLabel
     * @return static
     */
    public function navigationLabel(string|Closure|null $navigationLabel): static
    {
        $this->navigationLabel = $navigationLabel;

        return $this;
    }

    /**
     * Get the navigation label.
     *
     * @return string
     */
    public function getNavigationLabel(): string
    {
        return $this->evaluate($this->navigationLabel) ?? $this->getTitle();
    }

    /**
     * Set the page slug for the plugin.
     *
     * @param string | Closure $slug
     * @return static
     */
    public function slug(string|Closure $slug): static
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get the page slug.
     *
     * @return string
     */
    public function getSlug(): string
    {
        return $this->evaluate($this->slug);
    }

    /**
     * Set the page title for the plugin.
     *
     * @param string | Closure $title
     * @return static
     */
    public function title(string|Closure $title): static
    {
        $this->title = empty($title) ? __('revive::translations.pages.title') : $title;

        return $this;
    }

    /**
     * Get the page title.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return empty($this->title) ? __('revive::translations.pages.title') : $this->evaluate($this->title);
    }

    /**
     * Set the namespace for models managed by the plugin.
     *
     * @internal This method is just here for future features, not used yet but does not throw exception. 
     * 
     * @param string $modelsNamespace
     * @return static
     */
    public function modelsNamespace(string $modelsNamespace): static
    {
        $this->modelsNamespace = $modelsNamespace;

        return $this;
    }

    /**
     * Get the models namespace.
     *
     * @return string
     */
    public function getModelsNamespace(): string
    {
        return $this->evaluate($this->modelsNamespace);
    }

    /**
     * Limit the recycle bin to specific models.
     *
     * @param array|Closure $models
     * @return static
     */
    public function models(array|Closure $models): static
    {
        $this->models = $models;

        return $this;
    }

    /**
     * Get the list of models managed by the recycle bin.
     *
     * @return array
     */
    public function getModels(): array
    {
        return $this->evaluate($this->models);
    }

    /**
     * Enable or disable user-based scoping for records.
     *
     * @param bool $enable
     * @return static
     */
    public function enableUserScoping(bool $enable = true): static
    {
        $this->enableUserScoping = $enable;

        return $this;
    }

    /**
     * Check if user-based scoping is enabled.
     *
     * @return bool
     */
    public function isUserScopingEnabled(): bool
    {
        return $this->enableUserScoping;
    }

    /**
     * Enable or disable tenant-based scoping for records.
     *
     * @param bool $enable
     * @return static
     */
    public function enableTenantScoping(bool $enable = true): static
    {
        $this->enableTenantScoping = $enable;

        return $this;
    }

    /**
     * Check if tenant-based scoping is enabled.
     *
     * @return bool
     */
    public function isTenantScopingEnabled(): bool
    {
        return $this->enableTenantScoping;
    }

    /**
     * Show all records, ignoring user and tenant scoping (admin mode).
     *
     * @param bool $showAll
     * @return static
     */
    public function showAllRecords(bool $showAll = true): static
    {
        $this->showAllRecords = $showAll;

        return $this;
    }

    /**
     * Check if all records should be shown (admin mode).
     *
     * @return bool
     */
    public function shouldShowAllRecords(): bool
    {
        return $this->showAllRecords;
    }

    /**
     * Disable both user and tenant scoping and show all records.
     *
     * @return static
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
