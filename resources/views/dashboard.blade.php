@extends ('layouts.main')

@section('title', 'Criar Evento')

@section('content')


        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Seja Bem-Vindo!') }}
        </h2>
    
    <br>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/imagem1.jpg"class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/img/dashboard.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/img/imagem3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>


@endsection
