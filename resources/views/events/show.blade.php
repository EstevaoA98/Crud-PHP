@extends('layouts.main')

@section('title', 'EventoDev - Show')

@section('content')

    <div class="col-md-10 offset-md-1"></div>
    <div class="row">
        <div id="imqge-container" class="col-md-6">
            <img src="/img/events/{{$event->image}}" class="img-fluid" alt="{{$event->title}}">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{$event->title}}</h1>
            <p class="event-location"><ion-icon name="location-outline"></ion-icon>{{$event->location}}</p>
            <p class="events-participants"><ion-icon name="people-outline"></ion-icon>participantes</p>
            <p class="event-owner"><ion-icon name="star-outline"></ion-icon> Criador do evento</p>
            <a href="#" class="btn btn-primary" id="event-submit">Confirmar presença</a>
            <p></p>
        </div>
        <div class="col-md-12" id="description-container">
            <h3>Sobre o evento</h3>
            <p class="event-description">{{$event->description}}/</p>
        </div>
    </div>
    </div>
@endsection
