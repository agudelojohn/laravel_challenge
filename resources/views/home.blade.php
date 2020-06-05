@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Hola {{ $user->name }}</div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="justify-content-center">
            <div class="col">
                <div class="container">
                    <div class="row mx-auto">
                        <div class="col"><a href="Event/create" class="btn btn-primary">Create new event</a></div>
                        <div class="col"><a href="Event/Listar/today" class="btn btn-primary">Today events</a></div>
                        <div class="w-100 "><br></div>
                        <div class="col"><a href="Event/Listar/five" class="btn btn-primary">Comming events</a></div>
                        <div class="col"><a href="Event" class="btn btn-primary">All events</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">

    </div>
</div>
@endsection
