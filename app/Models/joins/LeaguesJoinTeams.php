<?php

namespace App\Models\joins;

use Illuminate\Database\Eloquent\Model;

class LeaguesJoinTeams extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'league_id', 'team_id'
    ];
}
