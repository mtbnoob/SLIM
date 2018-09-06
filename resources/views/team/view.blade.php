@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ url('/league') }}">Leagues</a>\
                    <a href="{{ url('league/'.$league->id) }}">{{ $league->name }}</a>\
                    {{ $team->name }}
                </div>

                <div class="panel-body">
                    <table>
                        @foreach ($players as $player)
                            <tr>
                                <td>{{ $player->number }}</td>
                                <td>{{ $player->name }}</td>
                            </tr>
                        @endforeach
                    </table>
                    <a href="{{ url('/league/'.$league->id.'/team/'.$team->id.'/player/new') }}">Add a Player</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
