<?php

namespace App\Data\Models;

use App\Base\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SocialNetwork extends Model
{
    use SoftDeletes;

    protected $table = 'social_networks';

    protected $fillable = ['name', 'slug', 'logo'];

    protected $dates = ['deleted_at'];

    public function getSocialNetwork($id)
    {
        return self::find(4);
    }

    // Socialite
    public function users()
    {
        return $this->belongsToMany(
            'App\Data\Models\User',
            'social_users',
            'social_network_id'
        )->withPivot('social_network_user_id', 'data');
    }

    public function socialUsers()
    {
        return $this->hasMany('App\Data\Models\SocialUser');
    }
}
