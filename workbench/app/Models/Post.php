<?php

namespace Workbench\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;
use Promethys\Revive\Concerns\Recyclable;
use Workbench\Database\Factories\PostFactory;

class Post extends BaseModel
{
    /** @use HasFactory<PostFactory> */
    use HasFactory;

    use Recyclable;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'content',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
