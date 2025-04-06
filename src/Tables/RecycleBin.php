<?php

namespace MangoDev\FilamentRevive\Tables;

use Livewire\Component;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Model;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Filters\SelectFilter;
use MangoDev\FilamentRevive\FilamentRevive;
use Illuminate\Database\Eloquent\Collection;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Infolists\Components\KeyValueEntry;
use Filament\Tables\Concerns\InteractsWithTable;
use MangoDev\FilamentRevive\Models\RecycleBinItem;

class RecycleBin extends Component implements HasForms, HasTable
{
    use InteractsWithForms;
    use InteractsWithTable;

    public function table(Table $table): Table
    {
        $query = RecycleBinItem::query();

        return $table
            ->query($query)
            ->emptyStateHeading('You don\'t have any Recyclable model.')
            ->defaultSort('deleted_at', 'desc')
            ->recordAction('view_details')
            ->columns([
                TextColumn::make('model_id')
                    ->label('Model ID')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('model_type')
                    ->label('Model Type')
                    ->badge()
                    ->sortable()
                    ->searchable(),

                TextColumn::make('deleted_at')
                    ->label('Deleted At')
                    ->dateTime()
                    ->sinceTooltip()
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('model_type')
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
                    // ->hidden()
                    ->modalHeading('Record details')
                    ->infolist([
                        KeyValueEntry::make('state')
                            ->keyLabel('Model column'),
                    ]),
                Action::make('restore')
                    ->button()
                    ->color('gray')
                    ->icon('heroicon-s-arrow-uturn-left')
                    ->tooltip('Restore model')
                    ->requiresConfirmation()
                    ->modalHeading('Restore model')
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
                                ->title('Model restored')
                                ->send();
                        } catch(\Throwable $th) {
                            Notification::make()
                                ->danger()
                                ->title('Failed restoring model')
                                ->send();
                        }
                    }),
                DeleteAction::make('force_delete')
                    ->button()
                    ->tooltip('Delete permanently')
                    ->requiresConfirmation()
                    ->modalHeading('Delete permanently')
                    ->using(function ($record) {
                        try {
                            $this->forceDeleteModel($record);

                            Notification::make()
                                ->success()
                                ->title('Model permanently deleted')
                                ->send();
                        } catch(\Throwable $th) {
                            Notification::make()
                                ->danger()
                                ->title('Failed deleted model permanently')
                                ->send();
                        }
                    }),
            ])
            ->bulkActions([
                BulkAction::make('restore_selected')
                    ->button()
                    ->label('Restore')
                    ->icon('heroicon-s-arrow-uturn-left')
                    ->color('gray')
                    ->tooltip('Restore selected models')
                    ->requiresConfirmation()
                    ->modalHeading('Restore selected models')
                    ->action(function (Collection $models) {
                        $restored_models = 0;
                        $selected_models = count($models->toArray());
                        $model_name = $selected_models > 1 ? 'models' : 'model';

                        foreach ($models as $model) {
                            try {
                                $this->restoreModel($model);
                                $restored_models++;
                            } catch (\Throwable $th) {
                                Notification::make()
                                    ->title("Unable to restore model")
                                    ->danger()
                                    ->send();

                                continue;
                            }

                            Notification::make()
                                ->title("Restored $restored_models $model_name out of $selected_models")
                                ->success()
                                ->send();
                        }
                    })
                    ->successNotification(null)
                    ->deselectRecordsAfterCompletion(),
                BulkAction::make('force_delete_selected')
                    ->button()
                    ->label('Delete')
                    ->icon('heroicon-s-trash')
                    ->color('danger')
                    ->tooltip('Delete permanently')
                    ->requiresConfirmation()
                    ->modalHeading('Delete permanently')
                    ->action(function (Collection $models) {
                        $deleted_models = 0;
                        $selected_models = count($models->toArray());
                        $model_name = $selected_models > 1 ? 'models' : 'model';

                        foreach ($models as $model) {
                            try {
                                $this->forceDeleteModel($model);
                            } catch (\Throwable $th) {
                                Notification::make()
                                    ->title("Unable to delete model permanently")
                                    ->danger()
                                    ->send();

                                continue;
                            }
                        }

                        Notification::make()
                            ->title("Permanently deleted $deleted_models $model_name out of $selected_models")
                            ->success()
                            ->send();
                    })
                    ->successNotification(Notification::make()
                        ->title('Record permanently deleted')
                        ->success())
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
        return view('filament-revive::tables.recycle-bin');
    }
}
