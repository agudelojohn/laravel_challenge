@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-center">
        <div class="col">
            <h1 class="text-center display-2">Hola {{ $user->name }}</h1>
        </div>
    </div>
    <div class="row ">


            <div class="row mx-auto">
                <div class="col"><a href="Event/create" class="btn btn-block btn-primary">Create new event</a></div>
                <div class="col"><a href="Event/Listar/today" class="btn btn-block btn-primary">Today events</a></div>
                <div class="w-100 "><br></div>
                <div class="col"><a href="Event/Listar/five" class="btn btn-block btn-primary">Comming events</a></div>
                <div class="col"><a href="Event" class="btn btn-block btn-primary">All events</a> </div>
            </div>
    </div>
</div>
@endsection
