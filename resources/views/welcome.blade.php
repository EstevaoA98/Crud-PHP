@extends('layouts.main')

@section('title','EventoDev')

@section('content')

<img src="{{ asset('img/eventdev.png') }}" alt="event">

@foreach ($events as $event)

<p>{{$event->title}} -- {{$event->description}}</p>

@endforeach

@endsection