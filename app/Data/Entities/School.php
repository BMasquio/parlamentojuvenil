<?php

namespace App\Data\Entities;

use App\Base\Model;

class School extends Model
{
	public function state()
	{
		return $this->belongsTo(City::class);
	}
}
