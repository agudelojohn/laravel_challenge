@extends('layouts.app')
<script>
    var list = []

    function UserSelected(item, id) {
        if (item.checked) {
            list.push(id);
            addArray();
        } else {
            var pos = list.indexOf(id);
            list.splice(pos);
            addArray();
        }
    }

    function addArray() {
        document.getElementById("UsersList").value = list;
    }

</script>
@section('contenido')


<div class=container>
    <div class=row>
        <div class=col>
            <div class="container">
                @foreach($Users as $user)
                    <div class=row>
                        <div class="custom-control custom-switch">
                            <input name="user{{ $user->id }}" type="checkbox" class="custom-control-input"
                                id="user{{ $user->id }}" value="{{ $user->id }}"
                                onClick="UserSelected(this, this.value)">
                            <label class="custom-control-label" for="user{{ $user->id }}">{{ $user->name }}</label>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class=col>
            <form action="/Invitation" method="post">
                @csrf
                <div class="container">
                    @foreach($Events as $event)
                        <div class=row>
                                {{-- <input type="radio" id="eventId" name="eventId" class="custom-control-input" value="{{ $event->id }}"> --}}
                                <input type="radio" id="eventId" name="eventId"  value="{{ $event->id }}">
                                <label class="" for="eventId">{{ $event->title }}</label>                            
                        </div>
                    @endforeach
                </div>
                <input type="text" name='UsersList' id='UsersList' style='display:none;'>
                <div class="container justify-content-center">
                    <button class="btn btn-primary mx-auto" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>

    @endsection
