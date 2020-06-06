@extends('layouts.app')

@section('content')
<div class=container>
<form action="/Event/{{$event->id}}" method="post">
    @method('DELETE')
    @csrf
    <div class="form-group">
        <input type="text" name=title class='form-control' placeholder="Title" value={{$event->title ?? ''}}>
    </div> 
    <div class="form-group">
        <input type="textarea" name=description class='form-control' placeholder="Description" value={{$event->description ?? ''}}>
    </div> 
    <div class="form-group">
        <input type="date" name=startDate class='form-control' placeholder="Start date" value={{$event->startDate ?? ''}}>
    </div> 
    <div class="form-group">
        <input type="date" name=endDate class='form-control' placeholder="End date" value={{$event->endDate ?? ''}}>
    </div> 
    <div class="form-group">
        
        <input type="text" name=userOwner class='form-control' placeholder="userOwner" value={{$event-> userOwner}} >
    </div> 
    <button type="submit" class='btn-primary btn '>Delete</button>
</form>
</div>
@endsection