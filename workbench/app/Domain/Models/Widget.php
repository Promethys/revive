<?php

namespace Workbench\App\Domain\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;
use Promethys\Revive\Concerns\Recyclable;

class Widget extends BaseModel
{
    use Recyclable;
    use SoftDeletes;

    protected $fillable = [
        'name',
    ];
}
