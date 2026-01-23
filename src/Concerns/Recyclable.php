<?php

namespace Promethys\Revive\Concerns;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Promethys\Revive\Models\RecycleBinItem;

/** @phpstan-ignore trait.unused (Recyclable trait can be used by Models that requires the plugin) */
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
            // avoid creating a RecycleBinItem for a forceDeleted model
            if ($model->isForceDeleting()) {
                return;
            }

            $model->recycleBinItem()->create([
                'state' => $model,
                'deleted_at' => $model->deleted_at,
                'deleted_by' => $model->getDeletedByUser(),
                'tenant_id' => $model->getTenantId(),
            ]);

            Log::info("Deleted {$model->getTable()} #{$model->id}");
        });

        static::forceDeleted(function ($model) {
            RecycleBinItem::where('model_id', $model->getKey())
                ->where('model_type', get_class($model))
                ->first()
                ?->delete();

            Log::info("Permanently deleted {$model->getTable()} #{$model->id}");
        });

        static::restored(function ($model) {
            $model->recycleBinItem?->delete();

            Log::info("Restored {$model->getTable()} #{$model->id}");
        });
    }

    /**
     * Get the user who deleted this model
     * Override this method in your model to customize the logic
     */
    public function getDeletedByUser()
    {
        // Default: try common user fields, or use current authenticated user
        if (isset($this->attributes['deleted_by'])) {
            return $this->attributes['deleted_by'];
        }

        if (isset($this->attributes['user_id'])) {
            return $this->attributes['user_id'];
        }

        return Auth::id();
    }

    /**
     * Get the tenant ID for this model
     * Override this method in your model to customize tenant logic
     */
    public function getTenantId()
    {
        // Default: try common tenant fields
        if (isset($this->attributes['tenant_id'])) {
            return $this->attributes['tenant_id'];
        }

        if (isset($this->attributes['team_id'])) {
            return $this->attributes['team_id'];
        }

        // For Filament multi-tenancy
        if (function_exists('filament') && filament()->getTenant()) {
            return filament()->getTenant()->getKey();
        }

        return null;
    }

    /**
     * Scope for recycle bin queries with user/tenant filtering
     * This is the main method used by the RecycleBin component
     */
    public function scopeRecycleBinQuery(Builder $query, $user = null, $tenant = null): Builder
    {
        $query = $query->onlyTrashed();

        // Apply custom user scope if defined
        if (method_exists($this, 'reviveScope')) {
            return $this->reviveScope($user ?? Auth::user());
        }

        // Default user filtering logic
        if ($user !== null) {
            // Try multiple common user relationship patterns
            if ($this->hasUserRelation()) {
                $query->whereHas('user', function ($q) use ($user) {
                    $q->where('id', is_object($user) ? $user->getKey() : $user);
                });
            } elseif (in_array('user_id', $this->getFillable()) || $this->hasAttribute('user_id')) {
                $query->where('user_id', is_object($user) ? $user->getKey() : $user);
            } elseif (in_array('created_by', $this->getFillable()) || $this->hasAttribute('created_by')) {
                $query->where('created_by', is_object($user) ? $user->getKey() : $user);
            }
        }

        // Apply tenant filtering
        if ($tenant !== null) {
            if (in_array('tenant_id', $this->getFillable()) || $this->hasAttribute('tenant_id')) {
                $query->where('tenant_id', is_object($tenant) ? $tenant->getKey() : $tenant);
            } elseif (in_array('team_id', $this->getFillable()) || $this->hasAttribute('team_id')) {
                $query->where('team_id', is_object($tenant) ? $tenant->getKey() : $tenant);
            }
        }

        return $query;
    }

    /**
     * Check if this model has a user relation
     */
    protected function hasUserRelation(): bool
    {
        return method_exists($this, 'user') &&
            is_callable([$this, 'user']);
    }

    /**
     * Static method to get all trashed records with scope applied
     */
    public static function showTrashed($user = null, $tenant = null)
    {
        return static::recycleBinQuery($user, $tenant);
    }
}
