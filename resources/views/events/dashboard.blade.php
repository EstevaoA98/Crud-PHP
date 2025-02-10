@extends('layouts.main')

@section('title', 'EventoDev - Dashboard')

@section('content')
    @if (session('success'))
        <div id="delete-message" class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif
    <div class="col-md-10 offset-md-1 dashcoard-title-container">
        <h1>Meus Eventos</h1>
        <div class="col-md-8 offset-md-2 dashcoard-events-container">
            @if (count($events) > 0)
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Participantes</th>
                            <th scope="col">Data</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $event)
                            <tr>
                                <td scropt="row">{{ $loop->index + 1 }}</td>
                                <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                                <td class="">{{ count($event->users) }}</td>
                                <td>{{ date('d/m/Y', strtotime($event->date)) }}</td>
                                <td>
                                    <a href="/events/edit/{{ $event->id }}" class="btn btn-custom p-lg-1 d-inline-block">
                                        <ion-icon name="create-outline"></ion-icon> Editar
                                    </a>
                                    <form action="/events/{{ $event->id }}" method="POST" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete-button btn btn-custom p-lg-1">
                                            <ion-icon name="trash-outline"></ion-icon> Deletar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>Voçe ainda não possui um evento</p>
                <a href="/events/create" class="btn btn-custom">Criar evento</a>
            @endif
        </div>
    </div>
    <div class="col-md-10 offset-md-1 dashcoard-title-container">
        <h1>Eventos inscritos</h1>
    </div>
    <div class="col-md-8 offset-md-2 dashcoard-events-container">
        @if (count($eventsAsParticipant) > 0)
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Participantes</th>
                        <th scope="col">Data</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($eventsAsParticipant as $event)
                        <tr>
                            <td scropt="row">{{ $loop->index + 1 }}</td>
                            <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                            <td class="">{{ count($event->users) }}</td>
                            <td>{{ date('d/m/Y', strtotime($event->date)) }}</td>
                            <td>
                                <form action="/events/leave/{{ $event->id }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-button btn btn-custom p-lg-1">
                                        <ion-icon name="exit-outline"></ion-icon> Sair do evento
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        @endif
    </div>

@endsection
