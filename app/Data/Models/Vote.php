<?php

namespace App\Data\Models;

use App\Base\Model;
use App\Data\Models\Scopes\ValidVote;

class Vote extends Model
{
    protected $table = 'votes';

    protected $fillable = ['student_id', 'subscription_id', 'round', 'year'];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ValidVote());
    }

    public function voter()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function candidate()
    {
        return $this->belongsTo(Subscription::class, 'subscription_id');
    }
}
