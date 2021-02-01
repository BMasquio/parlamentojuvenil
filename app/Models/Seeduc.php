<?php

namespace App\Models;

use App\Base\Model;

class Seeduc extends Model
{
    protected $dates = ['created_at', 'updated_at'];

    protected $table = 'seeduc';

    protected $fillable = [
        'escola',
        'municipio',
        'regional',
        'nome',
        'matricula',
        'nascimento',
    ];
}
