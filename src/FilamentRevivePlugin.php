<?php

namespace MangoDev\FilamentRevive;

use Closure;
use Filament\Contracts\Plugin;
use Filament\FilamentManager;
use Filament\Panel;
use Filament\Support\Concerns\EvaluatesClosures;
use Livewire\Component;
use MangoDev\FilamentRevive\Pages\RecycleBin;
use MangoDev\FilamentRevive\Tables\RecycleBin as RecycleBinTable;

class FilamentRevivePlugin implements Plugin
{
    use EvaluatesClosures;

    protected bool | Closure $authorizeUsing = true;

    protected string $recycleBin = RecycleBin::class;

    protected string | Closure | null $navigationGroup = null;

    protected int | Closure $navigationSort = 1;

    protected string | Closure $navigationIcon = 'heroicon-o-archive-box-arrow-down';

    protected string | Closure $activeNavigationIcon = 'heroicon-o-archive-box-arrow-down';

    protected string | Closure | null $navigationLabel = null;

    protected string | Closure $slug = 'recycle-bin';

    protected string $modelsNamespace = 'App\\Models\\';

    // protected Component $table;
    // protected Page $page;

    public function getId(): string
    {
        return 'filament-revive';
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): FilamentManager | static
    {
        return filament(app(static::class)->getId());
    }

    public function register(Panel $panel): void
    {
        $panel
            ->pages([
                $this->recycleBin,
            ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public function authorize(bool | Closure $callback = true): static
    {
        $this->authorizeUsing = $callback;

        return $this;
    }

    public function isAuthorized(): bool
    {
        return $this->evaluate($this->authorizeUsing) === true;
    }

    public function navigationGroup(string | Closure | null $navigationGroup): static
    {
        $this->navigationGroup = $navigationGroup;

        return $this;
    }

    public function getNavigationGroup(): string
    {
        return $this->evaluate($this->navigationGroup) ?? '';
    }

    public function navigationSort(int | Closure $navigationSort): static
    {
        $this->navigationSort = $navigationSort;

        return $this;
    }

    public function getNavigationSort(): int
    {
        return $this->evaluate($this->navigationSort);
    }

    public function navigationIcon(string | Closure $navigationIcon): static
    {
        $this->navigationIcon = $navigationIcon;

        return $this;
    }

    public function getNavigationIcon(): string
    {
        return $this->evaluate($this->navigationIcon);
    }

    public function activeNavigationIcon(string | Closure $activeNavigationIcon): static
    {
        $this->activeNavigationIcon = $activeNavigationIcon;

        return $this;
    }

    public function getActiveNavigationIcon(): string
    {
        return $this->evaluate($this->activeNavigationIcon);
    }

    public function navigationLabel(string | Closure | null $navigationLabel): static
    {
        $this->navigationLabel = $navigationLabel;

        return $this;
    }

    public function getNavigationLabel(): string
    {
        // TODO: use translations : filament.revive.navigation.label
        return $this->evaluate($this->navigationLabel) ?? 'Recycle Bin';
    }

    public function slug(string | Closure $slug): static
    {
        $this->slug = $slug;

        return $this;
    }

    public function getSlug(): string
    {
        return $this->evaluate($this->slug);
    }

    public function modelsNamespace(string $modelsNamespace): static
    {
        $this->modelsNamespace = $modelsNamespace;

        return $this;
    }

    public function getModelsNamespace(): string
    {
        return $this->evaluate($this->modelsNamespace);
    }

    /**
     * TODO: register custom table. Also do a custom page registering.
     *
     * @return FilamentRevivePlugin
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
