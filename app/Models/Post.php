<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    //
    protected $fillable = [
        'user_id','title','content','is_status','post_image'
    ];


    protected function casts(): array
    {
        return [
            'is_status' => 'boolean'

        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
