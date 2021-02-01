<?php

namespace App\Data\Models;

use App\Data\Models\Subscription;
use Carbon\Carbon;
use App\Base\Model;

class Student extends Model
{
    protected $dates = ['created_at', 'updated_at', 'birthdate'];

    protected $table = 'students';

    protected $prefilled = [
        'registration',
        'birthdate',
        'name',
        'school',
        'city',
        'email',
        'regional',
    ];

    protected $fillable = [
        'name',
        'social_name',
        'city',
        'school',
        'registration',
        'grade',
        'gender',
        'gender2',
        'birthdate',
        'cpf',
        'id_number',
        'id_issuer',
        'email',
        'phone_home',
        'phone_cellular',
        'zip_code',
        'address',
        'address_complement',
        'address_neighborhood',
        'address_city',
        'facebook',
        'regional',
    ];

    protected $editable = [
        'social_name',
        'city',
        'school',
        'grade',
        'gender',
        'gender2',
        'cpf',
        'id_number',
        'id_issuer',
        'email',
        'phone_home',
        'phone_cellular',
        'zip_code',
        'address',
        'address_complement',
        'address_neighborhood',
        'address_city',
        'facebook',
        'regional',
    ];

    /**
     * @return array
     */
    public function getEditable()
    {
        return $this->editable;
    }

    /**
     * @return array
     */
    public function getPrefilled()
    {
        return $this->prefilled;
    }

    public function getSocialNameAttribute()
    {
        return isset($this->attributes['social_name'])
            ? $this->attributes['social_name']
            : ucwords(mb_strtolower(explode(' ', trim($this->name))[0]));
    }

    public static function createStudent($attributes)
    {
        $student = static::create($attributes);

        $student->social_name = $student->getSocialNameAttribute();

        $student->save();

        return $student;
    }

    public function getBirthdateAttribute($date)
    {
        return Carbon::parse($date)->format('d/m/Y');
    }

    public function isSubscribed()
    {
        $what = Subscription::findByStudent($this);

        return !is_null($what);
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

    public function socialUsers()
    {
        return $this->hasMany(SocialUser::class);
    }

    public function hasRightAge()
    {
        $date = Carbon::parse($this->attributes['birthdate'])->startOfDay();

        $start = Carbon::createFromFormat(
            'Y-m-d',
            config('app.student.birthdate.start')
        )->startOfDay();

        $end = Carbon::createFromFormat(
            'Y-m-d',
            config('app.student.birthdate.end')
        )->startOfDay();

        return $date >= $start && $date <= $end;
    }

    public function flagVotes()
    {
        return $this->hasMany(FlagVote::class);
    }

    public function votedInCurrentFlagContest()
    {
        //        dd($this->flagVotes()->where('year', get_current_year())->first());

        return !is_null(
            $this->flagVotes()
                ->where('year', get_current_year())
                ->first()
        );
    }
}
