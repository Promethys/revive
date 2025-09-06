<?php

namespace Promethys\Revive\Tables;

use Carbon\Carbon;
use Livewire\Component;
use Filament\Tables\Table;
use Filament\Actions\ViewAction;
use Filament\Actions\RestoreAction;
use Illuminate\Support\Facades\App;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Notifications\Notification;
use Filament\Tables\Filters\SelectFilter;
use Filament\Actions\Contracts\HasActions;
use Filament\Schemas\Contracts\HasSchemas;
use Filament\Actions\ForceDeleteBulkAction;
use Promethys\Revive\Models\RecycleBinItem;
use Illuminate\Database\Eloquent\Collection;
use Filament\Infolists\Components\KeyValueEntry;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Actions\Concerns\InteractsWithActions;

class RecycleBin extends Component implements HasActions, HasSchemas, HasTable
{
    use InteractsWithActions;
    use InteractsWithSchemas;
    use InteractsWithTable;

    public function table(Table $table): Table
    {
        $query = RecycleBinItem::query();

        return $table
            ->query($query)
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
                    ->options(function () use ($query) {
                        return $query->get()->pluck('model_type', 'model_type')->toArray();
                    })
                    ->searchable()
                    ->multiple(),
            ])
            ->headerActions([
                //
            ])
            ->actions([
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
                    // ->modalHeading('Restore model')
                    // ->modalDescription(fn($record) => <<<BLADE
                    //     <p>Do you really want to restore the
                    //         <x-filament::badge>
                    //             {{ $record->model_type }}
                    //         </x-filament::badge>
                    //         with ID
                    //         <x-filament::badge>
                    //             {{ $record->id }}
                    //         </x-filament::badge>
                    //         ?
                    //     </p>
                    // BLADE)
                    ->action(function ($record) {
                        try {
                            $this->restoreModel($record);

                            Notification::make()
                                ->success()
                                ->title(__('revive::translations.tables.actions.restore.success_notification_title'))
                                ->send();
                        } catch (\Throwable $th) {
                            Notification::make()
                                ->danger()
                                ->title(__('revive::translations.tables.actions.restore.failure_notification_title'))
                                ->send();
                        }
                    }),
                ForceDeleteAction::make('force_delete')
                    ->button()
                    ->visible(true)
                    ->using(function ($record) {
                        try {
                            $is_deleted = $this->forceDeleteModel($record);

                            if ($is_deleted === true) {
                                $result = $record->delete();

                                return $result;
                            } else {
                                throw new \Exception;
                            }
                        } catch (\Throwable $th) {
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
                        foreach ($models as $model) {
                            try {
                                $this->restoreModel($model);
                            } catch (\Throwable $th) {
                                Notification::make()
                                    ->title('Unable to restore model')
                                    ->danger()
                                    ->send();

                                continue;
                            }
                        }
                    })
                    ->deselectRecordsAfterCompletion(),
                ForceDeleteBulkAction::make('force_delete_selected')
                    ->button()
                    ->action(function (Collection $models) {
                        foreach ($models as $model) {
                            try {
                                $this->forceDeleteModel($model);
                            } catch (\Throwable $th) {
                                Notification::make()
                                    ->title('Unable to delete model permanently')
                                    ->danger()
                                    ->send();

                                continue;
                            }
                        }
                    })
                    ->deselectRecordsAfterCompletion(),
            ]);
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
