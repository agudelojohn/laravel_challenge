@extends('layouts.app');
@section('content')
    

    <div class="container-md " style="margin-top:50px;">
        {{-- <form method="POST" action="UserController@edit"> --}}
        <form action="post" action="/User/{{$user->id}}">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input class="form-control" id='name' name=name type="text" value={{$user->name}}>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" name=email type="email" value={{$user->email}}>
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
@endsection