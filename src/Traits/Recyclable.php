<?php

namespace Mango\FilamentRevive\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Mango\FilamentRevive\Models\RecycleBinItem;

trait Recyclable
{
    public static function bootRecyclable(): void
    {
        if (! method_exists(static::class, 'bootSoftDeletes')) {
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
            $model->recycleBinItem()->create([
                'state' => $model,
                'deleted_at' => $model->deleted_at,
            ]);
        });

        static::restored(function ($model) {
            $model->recycleBinItem()?->delete();
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
