<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');

    //Leagues
    Route::get('/league', 'LeagueController@index');
    Route::get('/league/new', 'LeagueController@create');
    Route::post('/league/create', 'LeagueController@store');
    Route::get('/league/{id}', 'LeagueController@show');

    //Teams
    Route::get('/league/{league_id}/team', 'TeamController@index');
    Route::get('/league/{league_id}/team/new', 'TeamController@create');
    Route::post('/league/{league_id}/team/create', 'TeamController@store');
    Route::get('/league/{league_id}/team/{team_id}', 'TeamController@show');

    //Players
    Route::get('/league/{league_id}/team/{team_id}/player/new', 'PlayerController@create');
    Route::post('/league/{league_id}/team/{team_id}/player/create', 'PlayerController@store');
});
