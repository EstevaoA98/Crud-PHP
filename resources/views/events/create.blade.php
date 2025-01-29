@extends('layouts.main')

@section('title','EventoDev - Criar evento')

@section('content')

    <h1>Criar Evento</h1>
    <form action="/events" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Título do Evento:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Criar Evento</button>
    </form>
@endsection

