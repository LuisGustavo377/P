@extends ('layouts.main')

@section('title', 'Instrumentos')

@section('content')

    <form method="POST" action="{{ url('instrumentos/' . $instrumento->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT') 
        <div id="event-create-container" class="col-md-6 offset-md-3">
            <div class="mt-4 mb-4">
                <h2 class="my-6 text-2xl font-semibold text-center text-gray-700 dark:text-gray-200 display-6">
                    @yield('title'): {{ $instrumento->nome }}
                </h2>
            </div>



            <div class="mb-4 form-group">
                <label for="title">Instrumento:</label>
                <input type="text" value="{{ $instrumento->nome }}" id="nome" class="border border-black rounded form-control" name="nome"
                    placeholder="Nome do Instrumento" required>
            </div>

            <div class="mb-4 form-group">
                <label for="marca">Marca:</label>
                <input type="text" id="marca" value="{{ $instrumento->marca }}" class="border border-black rounded form-control" name="marca"
                    placeholder="Modelo do Instrumento" required>
            </div>

            <div class="mb-4 form-group">
                <label for="modelo">Modelo:</label>
                <input type="text" id="modelo" value="{{ $instrumento->modelo }}" class="border border-black rounded form-control" name="modelo"
                    placeholder="Modelo do Instrumento" required>
            </div>


            <div class="mb-4 form-group">
                <label for="date">Data de Aquisição:</label>
                <input type="date" id="dataAquisicao" value="{{ $instrumento->dataAquisicao }}" class="border border-black rounded form-control"
                    name="dataAquisicao" required>
            </div>
            <div class="mb-4 form-group">
                <label for="date">Data Último Reparo:</label>
                <input type="date" id="dataUltimoReparo" value="{{ $instrumento->dataUltimoReparo }}" class="border border-black rounded form-control"
                    name="dataUltimoReparo" required>
            </div>

            <div class="mb-4 form-group">
                <label for="musicoResponsavel">Musico:</label>
                <input type="text" value="{{ $instrumento->musicoResponsavel }}"id="musicoResponsavel" class="border border-black rounded form-control"
                    name="musicoResponsavel" placeholder="Músico Responsável">
            </div>

            <div class="mb-4 form-group">
                <label for="condicao">Condição</label>
                <textarea name="condicao" value="{{ $instrumento->condicao }}" id="condicao" class="border border-black rounded form-control"
                    placeholder="Descreva as condições de uso." required></textarea>
            </div>

            <div class="text-right form-group">
                <a href="/instrumentos" class="btn btn-secondary">Voltar</a>
               <a href="{{ url('instrumento/' . $instrumento->id . '/edit') }}" class="text-white bg-red-500 rounded btn btn-danger">Editar Instrumento</a>
            </div>
            <br>

        </div>



    @endsection
