<?php

namespace App\Data\Entities;

use App\Base\Model;

class Watched extends Model
{
    protected $table = 'watched';

    protected $fillable = [
        'subscription_id',
        'item_id',
    ];

	public function subscriptions()
	{
		return $this->belongsTo(Subscription::class);
	}
}
