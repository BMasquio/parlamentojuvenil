<?php

namespace App\Models;

use App\Base\Model;

class Flag extends Model
{
    protected $table = 'flags';

    protected $fillable = ['name', 'filename', 'year'];

    public function getColorAttribute()
    {
        return 'cerulean-blue';
    }

    public function getImageUrlAttribute()
    {
        $year = get_current_year();

        return asset(
            "files/apps/parlamentojuvenil/site/{$year}/flags/{$this->filename}"
        );
    }

    public function getThumbnailUrlAttribute()
    {
        $year = get_current_year();

        return asset(
            "files/apps/parlamentojuvenil/site/{$year}/flags/thumbnails/{$this->filename}"
        );
    }

    public function votes()
    {
        return $this->hasMany(FlagVote::class);
    }

    public function valid_votes()
    {
        return $this->hasMany(FlagVote::class)->where('is_valid', true);
    }
}
