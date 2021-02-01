<?php

namespace App\Models;

use App\Base\Model;

class FlagContest extends Model
{
    protected $table = 'flag_contest';

    protected $dates = ['created_at', 'updated_at', 'disabled_at'];

    protected $fillable = ['year', 'student_id', 'confirmation_key', 'email'];

    public function student()
    {
        return $this->belongsTo('App\Models\Student');
    }
}
