<?php

namespace App\Data\Models;

use App\Base\Model;

class Role extends Model
{
    protected $table = 'user_roles';

    protected $fillable = ['role', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
