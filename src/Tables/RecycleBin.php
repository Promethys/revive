<?php

namespace Promethys\Revive\Tables;

use Carbon\Carbon;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Infolists\Components\KeyValueEntry;
use Filament\Notifications\Notification;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Contracts\HasSchemas;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Promethys\Revive\Models\RecycleBinItem;

class RecycleBin extends Component implements HasActions, HasSchemas, HasTable
{
    use InteractsWithActions;
    use InteractsWithSchemas;
    use InteractsWithTable;

    /**
     * User to scope the recycle bin to
     * If null, uses the current authenticated user
     */
    public $user = null;

    /**
     * Tenant to scope the recycle bin to
     * If null, uses the current tenant (if multi-tenancy is enabled)
     */
    public $tenant = null;

    /**
     * Specific models to include in the recycle bin
     * If null, includes all Recyclable models
     */
    public array $models = [];

    /**
     * Whether to show all records (admin mode) or scope to user/tenant
     */
    public bool $showAllRecords = false;

    /**
     * Whether to enable user-based filtering
     */
    public bool $enableUserScoping = true;

    /**
     * Whether to enable tenant-based filtering
     */
    public bool $enableTenantScoping = true;

    public function mount(
        $user = null,
        $tenant = null,
        array $models = [],
        bool $showAllRecords = false,
        bool $enableUserScoping = true,
        bool $enableTenantScoping = true
    ): void {
        $this->user = $user;
        $this->tenant = $tenant;
        $this->models = $models;
        $this->showAllRecords = $showAllRecords;
        $this->enableUserScoping = $enableUserScoping;
        $this->enableTenantScoping = $enableTenantScoping;

        // Auto-detect current user and tenant if not provided
        if (! $this->showAllRecords) {
            if ($this->user === null && $this->enableUserScoping) {
                $this->user = Auth::user();
            }

            if ($this->tenant === null && $this->enableTenantScoping) {
                // Try to get current Filament tenant
                if (function_exists('filament') && filament()->getTenant()) {
                    $this->tenant = filament()->getTenant();
                }
            }
        }
    }

    public function table(Table $table): Table
    {
        return $table
            ->query($this->getQuery())
            ->emptyStateIcon('heroicon-o-archive-box')
            ->emptyStateHeading(__('revive::translations.tables.empty_state'))
            ->defaultSort('deleted_at', 'desc')
            ->recordAction('view_details')
            ->columns([
                TextColumn::make('model_id')
                    ->label(__('revive::translations.tables.columns.model_id'))
                    ->sortable()
                    ->searchable(),

                TextColumn::make('model_type')
                    ->label(__('revive::translations.tables.columns.model_type'))
                    ->badge()
                    ->sortable()
                    ->searchable(),

                TextColumn::make('deleted_by')
                    ->label('Deleted By')
                    ->getStateUsing(function (RecycleBinItem $record) {
                        if (! $record->deleted_by) {
                            return null;
                        }

                        // Try to get user name
                        $userModel = config('auth.providers.users.model', \App\Models\User::class);
                        if (class_exists($userModel)) {
                            $user = $userModel::find($record->deleted_by);

                            return $user ? ($user->name ?? $user->email ?? "User #{$user->id}") : "User #{$record->deleted_by}";
                        }

                        return "User #{$record->deleted_by}";
                    })
                    ->placeholder('N/A')
                    ->visible(fn () => $this->showAllRecords || ! $this->enableUserScoping),

                TextColumn::make('deleted_at')
                    ->label(__('revive::translations.tables.columns.deleted_at'))
                    ->dateTime()
                    ->tooltip(function ($state) {
                        $date = new Carbon($state);

                        return $date
                            ->locale(App::getLocale())
                            ->diffForHumans();
                    })
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('model_type')
                    ->label(__('revive::translations.tables.columns.model_type'))
                    ->options($this->getModelTypeOptions())
                    ->searchable()
                    ->multiple(),
            ])
            ->headerActions([
                //
            ])
            ->recordActions([
                ViewAction::make('view_details')
                    ->button()
                    ->modalHeading(__('revive::translations.tables.actions.view_details.modal_heading'))
                    ->infolist([
                        KeyValueEntry::make('state'),
                    ]),
                RestoreAction::make('restore')
                    ->button()
                    ->visible(true)
                    ->requiresConfirmation()
                    ->modalHeading('Restore Item')
                    ->modalDescription('Are you sure you want to restore this item?')
                    ->using(function ($record) {
                        try {
                            $isRestored = $this->restoreModel($record);

                            if ($isRestored === true) {
                                return $isRestored;
                            } else {
                                throw new \Exception;
                            }
                        } catch (\Throwable $th) {
                            \Log::error('Unable to restore model.', [
                                'message' => $th->getMessage(),
                                'file' => $th->getFile(),
                                'line' => $th->getLine(),
                                'trace' => $th->getTrace(),
                            ]);

                            return false;
                        }
                    })
                    ->successNotification(Notification::make()
                        ->success()
                        ->title(__('revive::translations.tables.actions.restore.success_notification_title')))
                    ->failureNotification(Notification::make()
                        ->danger()
                        ->title(__('revive::translations.tables.actions.restore.failure_notification_title'))),
                ForceDeleteAction::make('force_delete')
                    ->button()
                    ->visible(true)
                    ->modalHeading('Permanently Delete Item')
                    ->modalDescription('Are you sure you want to permanently delete this item? This action cannot be undone.')
                    ->using(function ($record) {
                        try {
                            $isDeleted = $this->forceDeleteModel($record);

                            if ($isDeleted === true) {
                                return $isDeleted;
                            } else {
                                throw new \Exception;
                            }
                        } catch (\Throwable $th) {
                            \Log::error('Unable to permanently delete model.', [
                                'message' => $th->getMessage(),
                                'file' => $th->getFile(),
                                'line' => $th->getLine(),
                                'trace' => $th->getTrace(),
                            ]);

                            return false;
                        }
                    })
                    ->successNotification(Notification::make()
                        ->success()
                        ->title(__('revive::translations.tables.actions.force_delete.success_notification_title')))
                    ->failureNotification(Notification::make()
                        ->danger()
                        ->title(__('revive::translations.tables.actions.force_delete.failure_notification_title'))),
            ])
            ->bulkActions([
                RestoreBulkAction::make('restore_selected')
                    ->button()
                    ->action(function (Collection $models) {
                        $total = $models->count();
                        $success = 0;

                        foreach ($models as $model) {
                            try {
                                if ($this->restoreModel($model)) {
                                    $success++;
                                }
                            } catch (\Throwable $th) {
                                \Log::error("Restore failed for {$model->model_type}#{$model->model_id}: {$th->getMessage()}");
                            }
                        }

                        $this->sendBulkNotification('restore', $success, $total);
                    })
                    ->deselectRecordsAfterCompletion(),
                ForceDeleteBulkAction::make('force_delete_selected')
                    ->button()
                    ->action(function (Collection $models) {
                        $total = $models->count();
                        $success = 0;

                        foreach ($models as $model) {
                            try {
                                if ($this->forceDeleteModel($model)) {
                                    $success++;
                                }
                            } catch (\Throwable $th) {
                                \Log::error("Force delete failed for {$model->model_type}#{$model->model_id}: {$th->getMessage()}");
                            }
                        }

                        $this->sendBulkNotification('force_delete', $success, $total);
                    })
                    ->deselectRecordsAfterCompletion(),
            ]);
    }

    protected function getQuery(): Builder
    {
        $query = RecycleBinItem::query();

        // Apply model filtering
        if (! empty($this->models)) {
            $query->whereIn('model_type', $this->models);
        }

        // Apply user scoping
        if (! $this->showAllRecords && $this->enableUserScoping && $this->user) {
            $userId = is_object($this->user) ? $this->user->getKey() : $this->user;
            $query->where('deleted_by', $userId);
        }

        // Apply tenant scoping
        if (! $this->showAllRecords && $this->enableTenantScoping && $this->tenant) {
            $tenantId = is_object($this->tenant) ? $this->tenant->getKey() : $this->tenant;
            $query->where('tenant_id', $tenantId);
        }

        return $query;
    }

    protected function getModelTypeOptions(): array
    {
        $query = $this->getQuery();

        return $query
            ->select('model_type')
            ->distinct()
            ->pluck('model_type', 'model_type')
            ->toArray();
    }

    protected function sendBulkNotification(string $action, int $success, int $total): void
    {
        if ($success === $total) {
            // FIXME: temporarly disable custom success notification. Use the default Filament one
            // Notification::make()
            //     ->title(trans_choice('revive::translations.tables.bulk_actions.' . $action . '.success_notification_title', $total, ['count' => $total]))
            //     ->body(trans_choice('revive::translations.tables.bulk_actions.' . $action . '.success_notification_body', $total, ['count' => $total]))
            //     ->success()
            //     ->send();
        } elseif ($success > 0) {
            Notification::make()
                ->title(__('revive::translations.tables.bulk_actions.' . $action . '.warning_notification_title'))
                ->body(__('revive::translations.tables.bulk_actions.' . $action . '.warning_notification_body', [
                    'success' => $success,
                    'total' => $total,
                    'failed' => $total - $success,
                ]))
                ->warning()
                ->send();
        } else {
            Notification::make()
                ->title(__('revive::translations.tables.bulk_actions.' . $action . '.failure_notification_title'))
                ->body(trans_choice('revive::translations.tables.bulk_actions.' . $action . '.failure_notification_body', $total, ['count' => $total]))
                ->danger()
                ->send();
        }
    }

    protected function restoreModel($record)
    {
        return $record->model?->restore();
    }

    protected function forceDeleteModel($record)
    {
        return $record->model?->forceDelete();
    }

    public function render()
    {
        return view('revive::tables.recycle-bin');
    }
}
