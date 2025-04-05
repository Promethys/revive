<?php

namespace Mango\FilamentRevive\Tables;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Infolists\Components\KeyValueEntry;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;
use Mango\FilamentRevive\Models\RecycleBinItem;

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
            ->columns([
                TextColumn::make('model_id')
                    ->label('Model ID')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('model_type')
                    ->label('Model Type')
                    ->tooltip('View details')
                    ->badge()
                    ->sortable()
                    ->searchable()
                    ->action(
                        ViewAction::make('view_details')
                            ->modalHeading('Record details')
                            ->infolist([
                                KeyValueEntry::make('state'),
                            ])
                    ),

                TextColumn::make('deleted_at')
                    ->label('Deleted At')
                    ->dateTime()
                    ->sinceTooltip()
                    ->sortable(),
            ])
            ->filters([
                // SelectFilter::make('model_type')
                //     ->searchable()
                //     ->options(function() {

                //     }),
            ])
            ->headerActions([
                //
            ])
            ->actions([
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
                        $this->restoreModel($record);
                    }),
                DeleteAction::make('force_delete')
                    ->button()
                    ->tooltip('Delete permanently')
                    ->requiresConfirmation()
                    ->modalHeading('Delete permanently')
                    ->using(function ($record) {
                        $this->forceDeleteModel($record);
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
                        foreach ($models as $model) {
                            try {
                                $this->restoreModel($model);
                            } catch (\Throwable $th) {
                                Notification::make()
                                    ->title("Unable to restore [$model->model_type]:[$model->model_id]")
                                    ->danger()
                                    ->send();

                                continue;
                            }
                        }
                    })
                    ->successNotification(Notification::make()
                        ->title('Record successfully restored')
                        ->success())
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
                        foreach ($models as $model) {
                            try {
                                $this->forceDeleteModel($model);
                            } catch (\Throwable $th) {
                                Notification::make()
                                    ->title("Unable to delete [$model->model_type]:[$model->model_id]")
                                    ->danger()
                                    ->send();

                                continue;
                            }
                        }
                    })
                    ->successNotification(Notification::make()
                        ->title('Record permanently deleted')
                        ->success())
                    ->deselectRecordsAfterCompletion(),
            ]);
    }

    protected function restoreModel(Model $record)
    {
        $record->model?->restore();
        $record->delete();
    }

    protected function forceDeleteModel(Model $record)
    {
        $record->model?->forceDelete();
        $record->delete();
    }

    public function render()
    {
        return view('filament-revive::tables.recycle-bin');
    }
}
