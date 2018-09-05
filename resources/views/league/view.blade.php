@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="{{ url('/league') }}">Leagues</a>\{{ $league->name }}</div>

                <div class="panel-body">
                    <ul>
                        <li><a href="{{ url('/league/'.$league->id.'/team') }}">Teams</a></li>
                        <li>Players</li>
                        <li>Schedules</li>
                        <li>Stats</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
