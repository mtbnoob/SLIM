<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class LeagueController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the league dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('league.overview');
    }
  
    /**
     * Show the new league page.
     *
     * @return \Illuminate\Http\Response
     */
    public function newLeague()
    {
        return view('league.create');
    }
  
    /**
     * Create a new league.
     *
     * @return \Illuminate\Http\Response
     */
    public function createLeague(Request $request)
    {
      
        echo "<pre>";
        echo "<br>league_name is ".$request->input('league_name');
        echo "<br>league_sport is ".$request->input('league_sport');
        echo "<br>";
        dd("test");
      
    }
}
