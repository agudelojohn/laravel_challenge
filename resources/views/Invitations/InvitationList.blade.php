@extends('layouts.app')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Events</h2>
        </div>
        <div class="col">
            <h2>Invites</h2>
        </div>
    </div>
</div>
@foreach($Events as $event)
    <div class="container ">
        <div class=row>
            <div class="col w-100 ">
                <div class="card mx-3 w-100 " style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Title:</strong>{{ $event->id }}</h5>
                        <p class="card-text"><strong>Description:</strong> {{ $event->description }}</p>
                        <p class="card-text"><strong>Start date:</strong> {{ $event->startDate }}</p>
                        <p class="card-text"><strong>End date:</strong> {{ $event->endDate }}</p>
                    </div>
                </div>
            </div>
            <div class="w-100  col d-flex align-content-center flex-wrap">
                <ul class="w-100  list-group " width="100%">
                    @foreach($Invitations as $inv)
                        @if($inv->idEvent == $event->id)
                            <li class="w-100 list-group-item">
                                {{ $Users->where('id', '==',$inv->userInvited)->first()->name }}
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
<br>
@endforeach



@endsection
