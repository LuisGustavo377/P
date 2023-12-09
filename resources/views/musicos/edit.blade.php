@extends ('layouts.main')

@section('title', 'Editar Músico')

@section('content')

    <form method="POST" action="{{ route('musicos.update', $musico->id) }}" enctype="multipart/form-data">
        @csrf {{-- Prevenção do Laravel de ataques a formulários --}}
        @method('PUT')
        <div id="event-create-container" class="col-md-6 offset-md-3">
            <div class="mt-4 mb-4">
                <h2 class="my-6 text-2xl font-semibold text-center text-gray-700 dark:text-gray-200 display-6">
                    @yield('title'): {{ $musico->nome }}
                </h2>
            </div>


            <div class="mb-4 form-group">
                <label for="nome">Nome:</label>
                <input value="{{ $musico->nome }}" type="text" id="nome"
                    class="border border-black rounded form-control" name="nome" placeholder="Nome Completo" required>
            </div>

            <div class="mb-4 form-group">
                <label for="date">Data de Nascimento:</label>
                <input value="{{ $musico->dataNascimento }}" type="date" id="dataNascimento"
                    class="border border-black rounded form-control" name="dataNascimento" required>
            </div>

            <div class="mb-4 form-group">
                <label for="city">Endereço:</label>
                <input value="{{ $musico->endereco }}" type="text" id="endereco"
                    class="border border-black rounded form-control" name="endereco" placeholder="Endereço completo"
                    required>
            </div>
            <div class="mb-4 form-group">
                <label for="city">E-mail:</label>
                <input value="{{ $musico->email }}"type="text" id="email"
                    class="border border-black rounded form-control" name="email" placeholder="exemplo@exemplo.com.br"
                    required>
            </div>

            <div class="mb-4 form-group">
                <label for="date">Data de Registro:</label>
                <input value="{{ $musico->dataRegistro }}"type="date" id="dataRegistro"
                    class="border border-black rounded form-control" name="dataRegistro" required>
            </div>

            <div class="mb-4 form-group">
                <label for="description">Frequência:</label>
                <input value="{{ $musico->frequencia }}" name="frequencia" id="frequencia"
                    class="border border-black rounded form-control" placeholder="Frequência de Participação" required>
            </div>

            <div class="text-right form-group">
                <a href="/musicos" class="btn btn-secondary">Voltar</a>
                <input type="submit" class="text-white bg-red-500 rounded btn btn-danger" value="Salvar Alterações">
            </div>

    </form>
    <br>
    </div>

@endsection
