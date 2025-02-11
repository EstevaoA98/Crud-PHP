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
                <button type="submit" class="btn btn-custom p-2">Pesquisar</button>
            </form>
        </div>
        <img src="{{ asset('img/image.png') }}" alt="event" class="w-100">
        <div id="event-container itens-center" class="d-flex flex-column align-items-center">
            @if ($search)
                <h2 class="mt-5">Buscando por: {{ $search }}</h2>
            @else
                <h2 class="mt-5">Próximos eventos</h2>
                <p>Inscrições abertas</p>
            @endif
            
            <div id="cards-container" class="row">
                @foreach ($events as $event)
                    <div class="card col-md-3 mb-4 mx-2">
                        <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                        <div class="card-body">
                            <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                            <p class="card-title">{{ $event->title }}</p>
                            <p class="card-participants">{{ $event->users->count() }}  participantes</p>
                            <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                        </div>
                    </div>
                @endforeach
                @if (count($events) == 0 && $search)
                    <p>Não foi possível encontrar nenhum evento com o nome {{ $search }}!</p>
                    <form action="/" >
                        <button type="submit" class="btn btn-custom p-2 p-lg-1 mb-5">Ver todos Eventos</button>
                    </form>
                @elseif(count($events) == 0)
                    <p>Não há nenhum evento no momento!</p>
                        <br>
                        <P>Fique ligado em nossa pagína para nao perdem nenhum evento!!</P>
                @endif
            </div>
        </div>


    @endsection
