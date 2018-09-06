@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ url('/league') }}">Leagues</a>\
                    <a href="{{ url('/league/'.$league->id) }}">{{ $league->name }}</a>\
                    <a href="{{ url('/league/'.$league->id.'/team/'.$team->id) }}">{{ $team->name }}</a>\
                    Add a Player
                </div>
                <div class="panel-body">

                  <form role="form" method="POST" action="{{ url('/league/'.$league->id.'/team/'.$team->id.'/player/create') }}">
                    {!! csrf_field() !!}
                    <label>First Name:</label><br>
                    <input type="text" value="First" name="first_name"><br><br>
                    <label>Last Name:</label><br>
                    <input type="text" value="Last" name="last_name"><br><br>
                    <label>Player Number:</label><br>
                    <input type="text" value="Number" name="number"><br><br>
                    <input type="submit" value="Add Player">
                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
