@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ url('/league') }}">Leagues</a>\
                    <a href="{{ url('/league/'.$league->id) }}">{{ $league->name }}</a>\
                    Add a Team
                </div>
                <div class="panel-body">

                  <form role="form" method="POST" action="{{ url('/league/'.$league->id.'/team/create') }}">
                    {!! csrf_field() !!}
                    <label>Team Name:</label><br>
                    <input type="text" value="Team Name" name="name"><br><br>
                    <input type="submit" value="Create Team">
                  </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
