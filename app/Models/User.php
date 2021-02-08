<?php

namespace App\Models;

use App\Base\Constants;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use OwenIt\Auditing\Auditable as AuditableTrait;
use OwenIt\Auditing\Contracts\Auditable;

class User extends Authenticatable implements Auditable
{
    use HasFactory, Notifiable, AuditableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'last_login_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getUserByEmail($email)
    {
        return self::Where('email', $email)->first();
    }

    /* public function socialNetworks()
    {
        return $this->belongsToMany('App\SocialNetwork', 'social_users', 'user_id');
    }

    public function socialUser()
    {
        return $this->hasMany('App\SocialUser');
    }

    public function subscriptions()
    {
        return $this->hasOne('App\Models\Subscription');
    }*/

    public function socialUser()
    {
        return $this->hasMany('App\Models\SocialUser');
    }

    public function getAvatarAttribute()
    {
        return isset($this->attributes['avatar'])
            ? $this->attributes['avatar']
            : makeAvatar($this->attributes['email']);
    }

    public function getSocialNameAttribute()
    {
        return $this->nickname ?: $this->email;
    }

    public function isAdministrator()
    {
        return $this->roles()
            ->where('role', Constants::ROLE_ADMINISTRATOR)
            ->first();
    }

    public function getIsAdministratorAttribute()
    {
        return $this->isAdministrator();
    }

    public function roles()
    {
        return $this->hasMany('App\Models\Role');
    }
}
