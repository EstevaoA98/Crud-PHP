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
            <p class="event-date"><ion-icon name="calendar-outline"></ion-icon>{{date ('d/m/Y', strtotime($event->date))}}</p>
            <p class="event-location"><ion-icon name="location-outline"></ion-icon> {{$event->location}}</p>
            <p class="event-participants"><ion-icon name="people-outline"></ion-icon> participantes</p>
            <p class="event-owner"><ion-icon name="star-outline"></ion-icon> Criador do evento</p>
            <h3>A Estrutura do evento contará com :</h3>
                <ul id="items-list">
                    @foreach ($event->items as $item)
                    <p class="infra-list"><ion-icon name="play-outline"></ion-icon> {{$item}}</p>
                    @endforeach
                </ul>
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
