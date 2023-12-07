@extends ('layouts.main')

@section('title', 'Adicionar Instrumentos')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <div class="mt-4 mb-4">
            <h1 class="text-center display-5">Adicionar Instrumento</h1>
        </div>
        <form action="/events" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-4 form-group">
                <label for="title">Instrumento:</label>
                <input type="text" id="title" class="form-control" name="title" placeholder="Nome do Instrumento"
                    required>
            </div>
            <div class="mb-4 form-group">
                <label for="marca">Marca:</label>
                <input type="text" id="marca" class="form-control" name="marca" placeholder="..." required>
            </div>
            <div class="mb-4 form-group">
                <label for="modelo">Modelo:</label>
                <input type="text" id="modelo" class="form-control" name="modelo" placeholder="..." required>
            </div>

            <div class="mb-4 form-group">
                <label for="date">Data Aquisição:</label>
                <input type="date" id="date" class="form-control" name="date" required>
            </div>
            <div class="mb-4 form-group">
                <label for="date">Data último reparo:</label>
                <input type="date" id="date" class="form-control" name="date" required>
            </div>

            <div class="mb-4 form-group">
                <label for="condicao">Condição:</label>
                <input type="text" id="condicao" class="form-control" name="condicao" placeholder="..." required>
            </div>

            <div class="text-right form-group">
                <a href="/eventos" class="btn btn-secondary">Voltar</a>
                <input type="submit" class="btn btn-danger" value="Adicionar Instrumento">
            </div>

        </form>
    </div>
@endsection
