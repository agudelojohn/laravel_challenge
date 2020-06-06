@extends('layouts.app')

@section('content')
<div class="container justify-content-right">
<a class="btn btn-primary ml-3" href="{{url('Event/export')}}/{{$type}}">Export</a>
</div>
<div class=container>
    <div class="row justify-content-center">
        @foreach($events as $event)
            <div class="card mx-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><strong>Title:</strong>{{ $event->title }}</h5>
                    <p class="card-text"><strong>Description:</strong> {{ $event->description }}</p>
                    <p class="card-text"><strong>Start date:</strong>    {{ $event->startDate }}</p>
                    <p class="card-text"><strong>End date:</strong> {{ $event->endDate }}</p>
                    <div class="row justify-content-center">
                        {{-- <a href="Event/{{ $event->id }}/edit" class="btn btn-primary">Edit</a> --}}
                        {{-- <a href="Event/delete/{{ $event->id }}" class="btn btn-primary ml-3">Delete</a> --}}
                        <a href="{{ url('Event') }}/invite/{{ $event->id }}" class="btn btn-primary">Invite</a>
                    <a href="{{ url('Event') }}/{{ $event->id }}/edit" class="btn btn-primary ml-3">Edit</a>
                    <a href="{{ url('Event') }}/delete/{{$event->id}}" class="btn btn-primary ml-3">Delete</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
