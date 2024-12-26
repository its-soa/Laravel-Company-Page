<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'image', 'slug', 'user_id', 'category_id', 'short_desc', 'description', 'status', 'tags'];


    protected $casts = [
        'tags' => 'array',
    ];
}