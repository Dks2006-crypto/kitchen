<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table = 'posts';

    protected $guarded = [];

     protected $casts = [
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
     ];

    public function post_category()
    {
        return $this->belongsTo(CategoryPost::class, 'category_post_id');
    }
}
