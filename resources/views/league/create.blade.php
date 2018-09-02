@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Create a New League</div>
                <div class="panel-body">
                    
                  <form role="form" method="POST" action="{{ url('/league/create') }}">
                    {!! csrf_field() !!}
                    <label>League Name:</label><br>
                      <input type="text" value="League Name" name="name"><br>
                    <label>Sport</label><br>
                      <select name="sport">
                        <option value="hockey">Hockey</option>
                        <option value="football">Football</option>
                        <option value="soccer">Soccer</option>
                        <option value="basketball">Basketball</option>
                        <option value="basball">Baseball</option>
                      </select><br><br>
                    <label>Description</label><br>
                    <textarea name="description" maxlength=255></textarea><br>
                    
                    <input type="submit" value="Create Team">
                  </form>
                  
                  
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
