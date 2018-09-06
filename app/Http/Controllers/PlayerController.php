<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\League;
use App\Models\Team;
use App\Models\Player;
use App\Models\joins\TeamsJoinPlayers;
use Validator;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($league_id, $team_id)
    {
        $league = League::find($league_id);
        $team   = Team::find($team_id);

        return view('player.create', compact('league', 'team'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $league_id, $team_id)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:255',
        ]);

        if($validator->fails()) {
          dd("handle failed validation");
        }

        $league = League::find($league_id);
        $team   = Team::find($team_id);

        $player_data = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'number' => $request->input('number')
        ];
        $player = Player::create($player_data);

        $join_data = [
            'team_id'   => $team->id,
            'player_id' => $player->id
        ];

        $teams_join_players = TeamsJoinPlayers::create($join_data);

        $message = "{$player->first_name} has successfully been added to {$team->name}";

        return view('generic_success', compact('message'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
