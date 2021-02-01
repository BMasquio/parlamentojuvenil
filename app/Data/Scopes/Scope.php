<?php

namespace App\Data\Scopes;

use Illuminate\Database\Eloquent\Scope as EloquentScope;

abstract class Scope implements EloquentScope
{
    protected static $enabled = true;

    public static function disable()
    {
        static::$enabled = false;
    }

    public static function enable()
    {
        static::$enabled = true;
    }
}
