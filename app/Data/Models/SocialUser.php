<?php

namespace App\Data\Models;

use App\Base\Model;

class SocialUser extends Model
{
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $fillable = [
        'social_network_id',
        'social_network_user_id',
        'data',
    ];

    protected $eagerLoadableRelations = ['user', 'student'];

    public function user()
    {
        return $this->belongsTo('App\Data\Models\User');
    }

    public function socialNetwork()
    {
        return $this->belongsTo('App\Data\Models\SocialNetwork');
    }

    public function student()
    {
        return $this->belongsTo('App\Data\Models\Student');
    }

    public function getProfileUrlAttribute()
    {
        $data = json_decode($this->data, true);

        if (isset($data['profileUrl'])) {
            return $data['profileUrl'];
        }

        return null;
    }
}
