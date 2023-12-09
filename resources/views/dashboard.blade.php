@extends ('layouts.main')

@section('title', 'Criar Evento')

@section('content')
    <div class="mt-4 mb-4">
        <h2 class="my-6 text-2xl font-semibold text-center text-gray-700 dark:text-gray-200 display-6">
            {{ __('Seja Bem-Vindo!') }}
        </h2>
    </div>

    <br>
    <!-- Carrossel Bootstrap -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/imagem9.jpg" class="d-block w-100" alt="Imagem 1" style="width: 1363px; height: 523px;">
            </div>
            <div class="carousel-item">
                <img src="assets/img/imagem2.jpg" class="d-block w-100" alt="Imagem 2"
                    style="width: 1363px; height: 523px;">
            </div>
            <div class="carousel-item">
                <img src="assets/img/imagem3.jpg" class="d-block w-100" alt="Imagem 3"
                    style="width: 1363px; height: 523px;">
            </div>
            <div class="carousel-item">
                <img src="assets/img/imagem8.jpg" class="d-block w-100" alt="Imagem 4"
                    style="width: 1363px; height: 523px;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>
    <br>
@endsection
