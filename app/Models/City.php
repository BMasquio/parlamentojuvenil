<?php

namespace App\Models;

use DB;
use App\Base\Model;

class City extends Model
{
    protected $fillable = ['name', 'state_id'];

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function getCleanNameAttribute($name)
    {
        return mb_strtoclean($name);
    }

    public static function findCityByname($name)
    {
        $city = static::where(
            DB::raw('lower(unaccent(name))'),
            '=',
            strtolower($name)
        )->first();

        if (is_null($city)) {
            $city = static::where(
                DB::raw('lower(unaccent(name))'),
                '~*',
                strtolower($name)
            )->first();
        }

        return $city;
    }
}
