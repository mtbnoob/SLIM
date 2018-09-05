@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Leagues</div>

                <div class="panel-body">
                    Select the league you would like to view:
                      <ul>
                        @foreach ($leagues as $league)
                            <li><a href="{{ url('/league/'.$league->id) }}">{{ $league->name }}</a></li>
                        @endforeach
                      </ul>
                      <a href="{{ url('/league/new') }}">Create a new League</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
