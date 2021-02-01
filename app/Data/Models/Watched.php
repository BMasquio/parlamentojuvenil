<?php

namespace App\Data\Models;

use App\Base\Model;

class Watched extends Model
{
    protected $table = 'watched';

    protected $fillable = ['subscription_id', 'item_id', 'year'];

    public function subscriptions()
    {
        return $this->belongsTo(Subscription::class);
    }
}
