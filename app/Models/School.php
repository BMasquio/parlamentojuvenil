<?php

namespace App\Models;

use App\Base\Model;

class School extends Model
{
    protected $table = 'schools';

    protected $fillable = [
        'id',
        'name',
        'censo',
        'ua',
        'address',
        'phone',
        'city',
        'city_id',
        'regional',
        'number',
        'complement',
        'neighborhood',
        'zip_code',
        'designation',
        'geolocation',
        'latitude',
        'email',
        'longitude',
    ];

    public function state()
    {
        return $this->belongsTo(City::class);
    }

    public function subscriptions()
    {
        return $this->hasManyThrough(
            Subscription::class,
            Student::class,
            'school',
            'student_id'
        );
    }

    public static function allByName($name)
    {
        return static::whereRaw(
            sprintf("lower(unaccent(city)) ~* '%s'", mb_strtoclean($name))
        )
            ->orderBy('name')
            ->get();
    }
}
