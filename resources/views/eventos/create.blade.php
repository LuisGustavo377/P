@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <div class="mt-4 mb-4">
            <h1 class="text-center display-6">Adicionar Evento</h1>
        </div>
        <form action="/eventos" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-4 form-group">
                <label for="title">Evento:</label>
                <input type="text" id="nome" class="form-control" name="nome" placeholder="Nome do Evento"
                    required>
            </div>

            <div class="mb-4 form-group">
                <label for="date">Data do evento:</label>
                <input type="date" id="data" class="form-control" name="data" required>
            </div>

            <div class="mb-4 form-group">
                <label for="time">Hora do evento:</label>
                <input type="time" id="horario" class="form-control" name="horario" required>
            </div>

            <div class="mb-4 form-group">
                <label for="city">Local:</label>
                <input type="text" id="local" class="form-control" name="local" placeholder="Local do Evento"
                    required>
            </div>

            <div class="mb-4 form-group">
                <label for="title">Evento Privado?</label>
                <select name="private" id="private" class="form-control" required>
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>

            <div class="mb-4 form-group">
                <label for="description">Descrição do Evento:</label>
                <textarea name="descricao" id="descricao" class="form-control" placeholder="O que vai acontecer no evento?"
                    required></textarea>
            </div>

            <div class="text-right form-group">
                <a href="/eventos" class="btn btn-secondary">Voltar</a>
                <input type="submit" class="text-white bg-red-500 btn " value="Criar Evento">
            </div>
            <br>
        </form>
    </div>
@endsection
