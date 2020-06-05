@extends('layouts.app')

@section('contenido')
<div class=container>
    <form action="/Event" method="post">
        @csrf
        <div class="form-group">
            <input type="text" name=title class='form-control' placeholder="Title" >
        </div> 
        <div class="form-group">
            <input type="textarea" name=description class='form-control' placeholder="Description">
        </div> 
        <div class="form-group">
            <input type="date" name=startDate class='form-control' placeholder="Start date">
        </div> 
        <div class="form-group">
            <input type="date" name=endDate class='form-control' placeholder="End date">
        </div> 
        <div class="form-group" style='display:none;'>
            <input type="text" name=userOwner class='form-control' placeholder="userOwner" value={{$userId}} >
        </div> 
        <button type="submit" class='btn-primary btn '>Save</button>
    </form>
</div>
@endsection
