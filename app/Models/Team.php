<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'season_id'
    ];

    public function players()
    {
		return $this->hasMany('App\Models\Player');
    }
}
