<?php

namespace App\Data\Entities;

use App\Base\Model;

class Subscription extends Model
{
	protected $dates = ['created_at', 'updated_at', 'disabled_at'];

	protected $fillable = [
        'year',
        'student_id',
	];

    public static function findByStudent($student, $year = null)
    {
        return static::where('year', get_current_year($year))->where('student_id', $student->id)->first();
    }

    public function schoolRecord()
    {
        return $this->belongsTo(School::class, 'school', 'name');
    }

    public function watched()
    {
        return $this->hasMany(Watched::class, 'subscription_id')->orderBy('item_id');
    }

    public function quizResult()
    {
        return $this->watched()->where('item_id', 'like', '%.quiz.%');
    }

    public function user()
    {
        $this->belongsTo('App\Data\Entities\User');
    }

    public function student()
    {
        $this->belongsTo('App\Data\Entities\Student');
    }
}
