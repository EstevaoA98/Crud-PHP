@extends('layouts.main')

@section('title', 'EventoDev - Show')

@section('content')

    <div class="col-md-10 offset-md-1"></div>
    <div class="row">
        <div id="imge-container" class="col-md-6">
            <img src="/img/events/{{$event->image}}" class="img-events img-fluid" alt="{{$event->title}}">
        </div>
        <div id="info-container" class="col-md-6">
            <h1 class="event-title">{{$event->title}}</h1>
            <br>
            <p class="event-location"><ion-icon name="location-outline"></ion-icon> {{$event->location}}</p>
            <p class="events-participants"><ion-icon name="people-outline"></ion-icon> participantes</p>
            <p class="event-owner"><ion-icon name="star-outline"></ion-icon> Criador do evento</p>
            <br>
            <a href="#" class="btn btn-custom" id="event-submit">Confirmar presença</a>
        </div>
        <div class="col-md-12" id="description-container">
            <h3 class="about">Sobre o evento</h3>
            <p class="event-description">{{$event->description}}/</p>
        </div>
    </div>
    </div>
@endsection
