<?php

namespace App\Models\joins;

use Illuminate\Database\Eloquent\Model;

class TeamsJoinPlayers extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'player_id', 'team_id'
    ];
}
