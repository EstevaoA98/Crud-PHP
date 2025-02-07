@extends('layouts.main')

@section('title', 'EventoDev - Editar .$event-.title')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1 class="text-center">Editando Evento: {{$event->title}}</h1>
        <form action="/events/update/{{$event->id}}" method="POST" id="event-form"   enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group m-3">
                <label for="title">Editar:<</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento..." value="{{$event->title}}">
                @if ($errors->has('title'))
                    <p class="alert alert-danger">
                        <ion-icon name="alert-circle"></ion-icon> {{ $errors->first('title') }}
                    </p>
                @endif
            </div>
            <div class="form-group m-3">
                <label for="location">Cidade:</label>
                <textarea class="form-control" id="location" name="location">{{$event->location}}</textarea>
                @if ($errors->has('location'))
                    <p class="alert alert-danger">
                        <ion-icon name="alert-circle"></ion-icon> {{ $errors->first('location') }}
                    </p>
                @endif
            </div>
            <div class="form-group m-3">
                <label for="date">Data: </label>
                <input type="date" class="form-control" id="date" name="date" value="{{$event->date}}">
                @if ($errors->has('date'))
                    <p class="alert alert-danger">
                        <ion-icon name="alert-circle"></ion-icon> {{ $errors->first('date') }}
                    </p>
                @endif  
            </div>
            <div class="form-group m-3">
                <label for="description">Descrição:</label>
                <textarea class="form-control" id="description" name="description">{{ $event->description }}</textarea>
                @if ($errors->has('description'))
                    <p class="alert alert-danger">
                        <ion-icon name="alert-circle"></ion-icon> {{ $errors->first('description') }}
                    </p>
                @endif
            </div>
            <div class="form-group m-3">
                <label for="description">Infraestrutura do Evento:</label><br>
                @if ($errors->has('items'))
                    <p class="alert alert-danger">
                        <ion-icon name="alert-circle"></ion-icon> {{ $errors->first('items') }}
                    </p>
                @endif
                <div class="form-grup">
                    <input type="checkbox" name="items[]" value="Salas para workshops" {{ in_array('Salas para workshops', $event->items) ? 'checked' : '' }}> Salas para workshops
                    <p class="infra">Ambientes específicos para hands-on e treinamentos.</p>
                </div>
                <div class="form-grup">
                    <input type="checkbox" name="items[]" value="Área de networking" {{ in_array('Área de networking',$event->items) ? 'checked' : '' }}> Área de networking
                    <p class="infra">Espaço para interação entre participantes, recrutadores e expositores.</p>
                </div>
                <div class="form-grup">
                    <input type="checkbox" name="items[]" value="Expositores e stands" {{ in_array('Expositores e stands',$event->items) ? 'checked' : '' }}> Expositores e stands
                    <p class="infra">Empresas e startups apresentando produtos e serviços.</p>
                </div>
                <div class="form-grup">
                    <input type="checkbox" name="items[]" value="Área de alimentação" {{ in_array('Área de alimentação',$event->items) ? 'checked' : '' }}> Área de alimentação
                    <p class="infra">Coffee break, food trucks ou praça de alimentação.</p>
                </div>
                <div class="form-grup">
                    <input type="checkbox" name="items[]" value="Wi-Fi de alta velocidade" {{ in_array('Wi-Fi de alta velocidade',$event->items) ? 'checked' : '' }}> Wi-Fi de alta velocidade
                    <p class="infra">Essencial para uso dos participantes.</p>
                </div>
                <div class="form-grup">
                    <input type="checkbox" name="items[]" value="Cronograma bem definido" {{ in_array('Cronograma bem definido',$event->items) ? 'checked' : '' }}> Cronograma bem definido
                    <p class="infra">Agendamento de palestras, workshops e painéis.</p>
                </div>
            </div>
            <div class="form-group m-3">
                <label for="private">Evento é privado:</label>
                <select class="form-select" id="private" name="private" aria-label="Disabled select example">
                    <option value="0" >Não</option>
                    <option value="1" {{$event->private == 1 ? "selectd='selected'" : ""}}>Sim</option>
                </select>
            </div>
            <div class="form-group m-3">
                <label for="image">Banner do evento:</label>
                <input type="file" class="form-control" id="image" name="image">
                <img src="/img/events/{{$event->image}}" alt="{{$event->title}}" class="img-preview">
                @if ($errors->has('image'))
                    <p class="alert alert-danger">
                        <ion-icon name="alert-circle"></ion-icon> {{ $errors->first('image') }}
                    </p>
                @endif
            </div>
            <div class="form-group text-center m-3">
                <button type="submit" class="btn btn-custom">Salvar</button>
            </div>
        </form>
    </div>
@endsection
