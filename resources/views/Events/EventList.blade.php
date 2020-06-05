@extends('layouts.app')

@section('content')

@foreach($events as $event)
    <div class=container>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-text">{{ $event->description }}</p>
                <p class="card-text">{{ $event->startDate }}</p>
                <p class="card-text">{{ $event->endDate }}</p>
                <a href="Event/{{ $event->id }}/edit" class="btn btn-primary">Edit</a>
            </div>
        </div>
    </div>
@endforeach

@endsection
