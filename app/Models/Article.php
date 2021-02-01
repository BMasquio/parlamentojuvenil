<?php

namespace App\Models;

use App\Base\Model;

class Article extends Model
{
    public $fillable = [
        'code',
        'heading',
        'subheading',
        'body',
        'edition',
        'image',
        'date',
        'published_at',
        'featured',
        'youtube_url',
    ];

    protected static $unguarded = true;
}
