@extends('layouts.main')

@section('title', 'Detalhes Evento')

@section('content')



    <form method="POST" action="{{ url('eventos/' . $evento->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT') {{-- Utilize @method para indicar o método PUT no Laravel --}}
        <div id="event-create-container" class="col-md-6 offset-md-3">
            <div class="mt-4 mb-4">
                <h2 class="my-6 text-2xl font-semibold text-center text-gray-700 dark:text-gray-200 display-6">
                    @yield('title'): {{ $evento->nome }}
                </h2>
            </div>

            <div class="mb-4 form-group">
                <label for="title">Evento:</label>
                <input value="{{ $evento->nome }}" type="text" id="title"
                    class="border border-black rounded form-control" name="title" placeholder="Nome do Evento" required>
            </div>

            <div class="mb-4 form-group">
                <label for="date">Data do evento:</label>
                <input value="{{ $evento->data }}" type="date" id="date"
                    class="border border-black rounded form-control" name="date" required>
            </div>

            <div class="mb-4 form-group">
                <label for="time">Hora do evento:</label>
                <input value="{{ $evento->horario }}" type="time" id="time"
                    class="border border-black rounded form-control" name="time" required>
            </div>

            <div class="mb-4 form-group">
                <label for="city">Local:</label>
                <input value="{{ $evento->local }}" type="text" id="city"
                    class="border border-black rounded form-control" name="city" placeholder="Local do Evento" required>
            </div>

            <div class="mb-4 form-group">
                <label for="description">Descrição do Evento:</label>
                <input value="{{ $evento->descricao }}" name="description" id="description"
                    class="border border-black rounded form-control" placeholder="O que vai acontecer no evento?" required>
            </div>

            <div class="text-right form-group">
                <a href="/eventos" class="btn btn-secondary ">Voltar</a>
                <a href="{{ url('eventos/' . $evento->id . '/edit') }}" class="text-white bg-red-500 rounded btn btn-danger">Editar Evento</a>
            </div>
            <br>
        </div>
    </form>

@endsection
