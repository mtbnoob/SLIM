@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ url('/league') }}">Leagues</a>\
                    <a href="{{ url('league/'.$league->id) }}">{{ $league->name }}</a>
                </div>

                <div class="panel-body">
                    <a href="{{ url('/league/'.$league->id.'/team/new') }}">Create a New Team</a> or click one below to edit:
                      <ul>
                        @foreach ($teams as $team)
                            <li><a href="{{ url('/league/'.$league->id.'/team/'.$team->id) }}">{{ $team->name }}</a></li>
                        @endforeach
                      </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
