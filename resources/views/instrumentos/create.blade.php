@extends ('layouts.main')

@section('title', 'Adicionar Instrumentos')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <div class="mt-4 mb-4">
            <h1 class="text-center display-6">Adicionar Instrumento</h1>
        </div>
        <form action="/instrumentos" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-4 form-group">
                <label for="title">Instrumento:</label>
                <input type="text" id="nome" class="border border-black rounded form-control" name="nome"
                    placeholder="Nome do Instrumento" required>
            </div>

            <div class="mb-4 form-group">
                <label for="marca">Marca:</label>
                <input type="text" id="marca" class="border border-black rounded form-control" name="marca"
                    placeholder="Modelo do Instrumento" required>
            </div>

            <div class="mb-4 form-group">
                <label for="modelo">Modelo:</label>
                <input type="text" id="modelo" class="border border-black rounded form-control" name="modelo"
                    placeholder="Modelo do Instrumento" required>
            </div>


            <div class="mb-4 form-group">
                <label for="date">Data de Aquisição:</label>
                <input type="date" id="dataAquisicao" class="border border-black rounded form-control"
                    name="dataAquisicao" required>
            </div>
            <div class="mb-4 form-group">
                <label for="date">Data Último Reparo:</label>
                <input type="date" id="dataUltimoReparo" class="border border-black rounded form-control"
                    name="dataUltimoReparo" required>
            </div>

            <div class="mb-4 form-group">
                <label for="musicoResponsavel">Musico:</label>
                <input type="text" id="musicoResponsavel" class="border border-black rounded form-control" name="musicoResponsavel"
                    placeholder="Músico Responsável">
            </div>

            <div class="mb-4 form-group">
                <label for="description">Condição</label>
                <textarea name="condicao" id="condicao" class="border border-black rounded form-control"
                    placeholder="Descreva as condições de uso." required></textarea>
            </div>

            <div class="text-right form-group">
                <a href="/instrumentos" class="btn btn-secondary">Voltar</a>
                <input type="submit" class="text-white bg-red-500 rounded btn btn-danger" value="Adicionar Instrumento">
            </div>
            <br>
        </form>
    </div>
@endsection
