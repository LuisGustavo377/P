@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <div class="mt-4 mb-4">
            <h1 class="text-center display-5">Adicionar Evento</h1>
        </div>
        <form action="/events" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-4 form-group">
                <label for="title">Evento:</label>
                <input type="text" id="title" class="form-control" name="title" placeholder="Nome do Evento"
                    required>
            </div>

            <div class="mb-4 form-group">
                <label for="date">Data do evento:</label>
                <input type="date" id="date" class="form-control" name="date" required>
            </div>

            <div class="mb-4 form-group">
                <label for="time">Hora do evento:</label>
                <input type="time" id="time" class="form-control" name="time" required>
            </div>

            <div class="mb-4 form-group">
                <label for="city">Cidade:</label>
                <input type="text" id="city" class="form-control" name="city" placeholder="Local do Evento"
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
                <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"
                    required></textarea>
            </div>

            <div class="text-right form-group">
                <a href="/eventos" class="btn btn-secondary">Voltar</a>
                <input type="submit" class="btn btn-danger" value="Criar Evento">
            </div>
            
        </form>
    </div>
@endsection
