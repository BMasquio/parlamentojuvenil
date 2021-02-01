<?php

namespace App\Data\Models;

use App\Base\Model;

class State extends Model
{
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
