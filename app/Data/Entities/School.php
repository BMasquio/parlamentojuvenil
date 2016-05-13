<?php

namespace App\Data\Entities;

use App\Base\Model;

class School extends Model
{
    protected $table = 'schools';
    
	public function state()
	{
		return $this->belongsTo(City::class);
	}

	public function subscriptions()
	{
		return $this->hasMany(Subscription::class, 'school', 'name');
	}
}
