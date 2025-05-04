<?php

namespace Promethys\FilamentRevive\Concerns;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Promethys\FilamentRevive\Models\RecycleBinItem;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait Recyclable
{
    public static function bootRecyclable(): void
    {
        if (!method_exists(static::class, 'bootSoftDeletes')) {
            throw new \Exception(static::class . ' must use SoftDeletes to be recyclable.');
        }
    }

    public function recycleBinItem(): MorphOne
    {
        return $this->morphOne(RecycleBinItem::class, 'model');
    }

    protected static function booted(): void
    {
        parent::booted();

        static::deleted(function ($model) {
            // avoid creating a RecycleBinItem for a forceDeleted model
            if ($model->isForceDeleting()) {
                return;
            }

            $model->recycleBinItem()->create([
                'state' => $model,
                'deleted_at' => $model->deleted_at,
            ]);
        });

        static::forceDeleted(function ($model) {
            RecycleBinItem::where('model_id', $model->id)
                ->where('model_type', get_class($model))
                ->first()
                    ?->delete();
        });

        static::restored(function ($model) {
            $model->recycleBinItem?->delete();
        });
    }

    /**
     * Scope to retrieve only the authenticated user's trashed records.
     * You can override this method in each of your models to define how
     * the plugin would retrieve the records.
     */
    public function scopeRecycleBinQuery(Builder $query): Builder
    {
        return $query->onlyTrashed();
    }
}
