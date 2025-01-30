@extends('layouts.main')

@section('title', 'EventoDev - Criar evento')

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1 class="text-center">Adicionando Evento</h1>
        <form id="event-form" action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group m-3">
                <label for="title">Título do Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento...">
            </div>
            <div class="form-group m-3">
                <label for="location">Cidade:</label>
                <textarea class="form-control" id="location" name="location" placeholder="Local do evento..."></textarea>
            </div>
            <div class="form-group m-3">
                <label for="description">Descrição:</label>
                <textarea class="form-control" id="description" name="description" placeholder="Descrição do evento..."></textarea>
            </div>
            <div class="form-group m-3">
                <label for="private">Evento é privado:</label>
                <select class="form-select" id="private" name="private" aria-label="Disabled select example">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group m-3">
                <label for="image">Banner do evento:</label>
                <input type="file" class="form-control" id="image" name="image" >
            </div>
            <div class="form-group text-center m-3">
                <button type="submit" class="btn btn-custom" value="Criar evento">Criar Evento</button>
            </div>
        </form>
    </div>
@endsection
