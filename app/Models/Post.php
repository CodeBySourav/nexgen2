<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    'title', 'slug', 'seo_title', 'seo_description', 
    'schema_markup', 'content', 'status'
    ];

    protected $casts = [
        'schema_markup' => 'array',
        'status' => 'boolean',
    ];
}
