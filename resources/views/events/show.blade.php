@extends('layouts.main')

@section('title', 'EventoDev - Show')

@section('content')

    <div class="col-md-10 offset-md-1"></div>
    <div class="row">
        <div id="imge-container" class="col-md-6">
            <img src="/img/events/{{ $event->image }}" class="img-events img-fluid" alt="{{ $event->title }}">
        </div>
        <div id="info-container" class="col-md-6">
            <h1 class="event-title">{{ $event->title }}</h1>
            <br>
            <p class="event-date"><ion-icon name="calendar-outline"></ion-icon>{{ date('d/m/Y', strtotime($event->date)) }}
            </p>
            <p class="event-location"><ion-icon name="location-outline"></ion-icon> {{ $event->location }}</p>
            <p class="event-participants">
                <ion-icon name="people-outline"></ion-icon>
                {{ $event->users->count() }} participantes
            </p>
            <p class="event-owner"><ion-icon name="star-outline"></ion-icon> {{ $eventOwner['name'] }}</p>
            <h3>A Estrutura do evento contará com :</h3>
            <ul id="items-list">
                @foreach ($event->items as $item)
                    <p class="infra-list"><ion-icon name="play-outline"></ion-icon> {{ $item }}</p>
                @endforeach
            </ul>
            <br>
            @if (!$hasUserJoined)
                <form action="/events/join/{{ $event->id }}" method="POST">
                    @csrf
                    <a href="/events/join/{{ $event->id }}" class="btn btn-custom" id="event-submit"
                        onclick="event.preventDefault();this.closest('form').submit()">Confirmar presença</a>
                </form>
            @else
                <p class="alert alert-warning">Você já está participando deste evento</p>
            @endif
        </div>
        <div class="col-md-12" id="description-container">
            <h3 class="about">Sobre o evento</h3>
            <p class="event-description">{{ $event->description }}/</p>
        </div>
    </div>
    </div>
@endsection
