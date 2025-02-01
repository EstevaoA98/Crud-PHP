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
                <label for="date">Data:</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="form-group m-3">
                <label for="description">Descrição:</label>
                <textarea class="form-control" id="description" name="description" placeholder="Descrição do evento..."></textarea>
            </div>
            <div class="form-group m-3">
                <label for="description">Infraestrutura do Evento:</label>
                    <div class="form-grup">
                        <input type="checkbox" name="items[]" value="Salas para workshops"> Salas para workshops
                            <p class="infra">Ambientes específicos para hands-on e treinamentos.</p>
                    </div>
                    <div class="form-grup">
                        <input type="checkbox" name="items[]" value="Área de networking"> Área de networking
                            <p class="infra">Espaço para interação entre participantes, recrutadores e expositores.</p>
                    </div>
                    <div class="form-grup">
                        <input type="checkbox" name="items[]" value="Expositores e stands"> Expositores e stands
                            <p class="infra">Empresas e startups apresentando produtos e serviços.</p>
                    </div>
                    <div class="form-grup">
                        <input type="checkbox" name="items[]" value="Área de alimentação"> Área de alimentação
                            <p class="infra">Coffee break, food trucks ou praça de alimentação.</p>
                    </div>
                    <div class="form-grup">
                        <input type="checkbox" name="items[]" value="Wi-Fi de alta velocidade"> Wi-Fi de alta velocidade
                            <p class="infra">Essencial para uso dos participantes.</p>
                    </div>
                    <div class="form-grup">
                        <input type="checkbox" name="items[]" value="Cronograma bem definido"> Cronograma bem definido
                            <p class="infra">Agendamento de palestras, workshops e painéis.</p>
                    </div>
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
