<?php

namespace App\Data\Models;

use App\Base\Model;
use App\Data\Scopes\Year as YearScope;

class Subscription extends Model
{
    protected $dates = ['created_at', 'updated_at', 'disabled_at'];

    protected $fillable = [
        'year',
        'student_id',
        'elected_1nd',
        'elected_2nd',
        'auto_elected',
    ];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new YearScope());
    }

    public static function findByStudent($student, $year = null)
    {
        return static::where('year', get_current_year($year))
            ->where('student_id', $student->id)
            ->first();
    }

    public function schoolRecord()
    {
        return $this->belongsTo(School::class, 'school', 'name');
    }

    public function watched()
    {
        return $this->hasMany(Watched::class, 'subscription_id')->orderBy(
            'item_id'
        );
    }

    public function quizResult()
    {
        return $this->watched()->where('item_id', 'like', '%.quiz.%');
    }

    public function user()
    {
        return $this->belongsTo('App\Data\Models\User');
    }

    public function student()
    {
        return $this->belongsTo('App\Data\Models\Student');
    }

    public function getElected1NdAttribute()
    {
        return !$this->attributes['elected_1nd'] ? '0' : '1';
    }

    public function getElected2NdAttribute()
    {
        return !$this->attributes['elected_2nd'] ? '0' : '1';
    }
}
