<?php

namespace App\Data\Models;

use App\Base\Constants;
use App\Base\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements
    AuthenticatableContract,
    CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

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
        return $this->hasOne('App\Data\Models\Subscription');
    }*/

    public function socialUser()
    {
        return $this->hasMany('App\Data\Models\SocialUser');
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
        return $this->hasMany('App\Data\Models\Role');
    }
}
