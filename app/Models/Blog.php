<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $casts = [
        'published_at' => 'datetime'
    ];

    public function scopePublished($query)
    {
        return $query->where([
            ['published_at', '!=', 'null'],
            ['published_at', '>=', date('Y-m-d')],
        ]);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
