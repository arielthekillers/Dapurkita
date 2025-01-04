<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    //
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'category_id',
        'published_at',
        'status',
    ];
    public function Category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
