<?php

namespace App\Data\Entities;

use App\Base\Model;

class Role extends Model
{
	protected $table = 'user_roles';

	protected $fillable = [
        'role',
        'user_id',
    ];
}
