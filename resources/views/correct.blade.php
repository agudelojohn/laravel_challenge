@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h3>{{$operacion}} correct</h3>
    </div>
    <div class="row justify-content-center">
    <a href="{{ url('home') }}">Back home</a>
    </div>
</div>
@endsection