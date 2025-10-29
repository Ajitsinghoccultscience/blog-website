<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'slug',
        'excerpt',
        'tags',
        'meta_title',
        'meta_description',
        'featured_image',
        'is_published',
        'published_at',
        'category_id',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    // Relationship with category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
