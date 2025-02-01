@extends('layouts.main')

@section('title', 'EventoDev')

@section('content')
    @if (session('success'))
        <div id="success-message" class="alert alert-success text-center alert-dismissible fade show mt-3" role="alert">
            {{ session('success') }}

        </div>
    @endif
    <div id="header-container" class="position-relative">
        <div id="search-container" class="position-absolute top-50 start-50 translate-middle">
            <form action="/" method="GET">
                <input type="text" name="search" id="search" placeholder="Pesquisar eventos">
            </form>
        </div>
        <img src="{{ asset('img/eventdev.png') }}" alt="event" class="w-100">
        <div id="event-container itens-center" class="d-flex flex-column align-items-center">
            <h2 class="mt-5">Próximos eventos</h2>
            <p>Inscrições abertas</p>
            <div id="cards-container" class="row">
                @foreach ($events as $event)
                    <div class="card col-md-3 mb-4 mx-2">
                        <img src="/img/events/{{$event->image}}" alt="{{ $event->title }}">
                        <div class="card-body">
                            <p class="card-date">{{date ('d/m/Y', strtotime($event->date))}}</p>
                            <p class="card-title">{{ $event->title }}</p>
                            <p class="card-participants">X participantes</p>
                            <a href="/events/{{$event->id}}" class="btn btn-primary">Saber mais</a>
                        </div>
                    </div>
                @endforeach
                 @if (count($events) == 0)
                    <p>Não foi possível encontrar nenhum evento ainda!</p>
                     
                 @endif
            </div>
        </div>


    @endsection
