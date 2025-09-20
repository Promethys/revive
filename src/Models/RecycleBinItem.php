<?php

namespace Promethys\Revive\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class RecycleBinItem extends Model
{
    protected $fillable = [
        'model_id',
        'model_type',
        'state',
        'deleted_at',
        'deleted_by',
        'tenant_id',
    ];

    protected $casts = [
        'state' => 'array',
    ];

    protected $with = ['model'];

    /**
     * Get the parent model that owns the RecycleBinItem
     */
    public function model(): MorphTo
    {
        return $this->morphTo()->withTrashed();
    }
}
