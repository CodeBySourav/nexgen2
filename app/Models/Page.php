<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'seo_title',
        'seo_description',
        'schema_markup',
        'content',
        'status',
    ];
}
