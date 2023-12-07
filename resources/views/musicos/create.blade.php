@extends ('layouts.main')

@section('title', 'Adicionar Músico')

@section ('content')  
  
 
      <div id="event-create-container" class="col-md-6 offset-md-3">
        <div class="mt-4 mb-4">
            <h1 class="text-center display-5">Adicionar Músico</h1>
        </div>
        <form action="/musicos" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-4 form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" class="border border-black rounded form-control" name="nome" placeholder="Nome Completo"
                    required>
            </div>

            <div class="mb-4 form-group">
                <label for="date">Data de Nascimento:</label>
                <input type="date" id="dataNascimento" class="border border-black rounded form-control" name="dataNascimento" required>
            </div>

            <div class="mb-4 form-group">
                <label for="city">Endereço:</label>
                <input type="text" id="endereco" class="border border-black rounded form-control" name="endereco" placeholder="Endereço completo"
                    required>
            </div>
            <div class="mb-4 form-group">
                <label for="city">E-mail:</label>
                <input type="text" id="email" class="border border-black rounded form-control" name="email" placeholder="exemplo@exemplo.com.br"
                    required>
            </div>

            <div class="mb-4 form-group">
                <label for="date">Data de Registro:</label>
                <input type="date" id="dataRegistro" class="border border-black rounded form-control" name="dataRegistro" required>
            </div>

            <div class="mb-4 form-group">
                <label for="description">Frequência:</label>
                <textarea name="frequencia" id="frequencia" class="border border-black rounded form-control" placeholder="Frequência de Participação"
                    required></textarea>
            </div>

             <div class="text-right form-group">
                <a href="/musicos" class="btn btn-secondary">Voltar</a>
                <input type="submit" class="text-white bg-red-500 rounded btn btn-danger" value="Adicionar Músico">
            </div>
            
        </form>
        <br>
    </div>

@endsection