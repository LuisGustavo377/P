@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')
    <div class="container">
        <header class="py-3 blog-header">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 d-flex justify-content-end align-items-center">
                    {{-- <a class="text-muted" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3">
                            <circle cx="10.5" cy="10.5" r="7.5"></circle>
                            <line x1="21" y1="21" x2="15.8" y2="15.8"></line>
                        </svg>
                    </a>
                    <a class="btn btn-sm btn-outline-secondary" href="#">Cadastrar-se</a> --}}
                </div>
            </div>
        </header>

        <div class="py-1 mb-2 nav-scroller">
            <nav class="nav d-flex justify-content-between">
               
            </nav>
        </div>

        <div class="p-3 text-white rounded jumbotron p-md-5 bg-dark">
            <div class="px-0 col-md-6">
                <h1 class="display-4 font-italic">Seja Bem Vindo!</h1>
                <p class="my-3 lead">Várias linhas formando uma introdução, informando novos leitores rápido e eficientemente sobre o que é mais interessante, neste post.</p>
                <p class="mb-0 lead"><a href="#" class="text-white font-weight-bold">Continue lendo...</a></p>
            </div>
        </div>

        <div class="mb-2 row">
            <div class="col-md-6">
                <!-- Adicione seu conteúdo aqui -->
            </div>
            <div class="col-md-6">
                <!-- Adicione seu conteúdo aqui -->
            </div>
        </div>
    </div>

    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <h3 class="pb-3 mb-4 font-italic border-bottom">
                    
                </h3>

                <div class="blog-post">
                    <!-- Adicione seu conteúdo aqui -->
                </div>

                <div class="blog-post">
                    <!-- Adicione seu conteúdo aqui -->
                </div>

                <div class="blog-post">
                    
                </div>

                {{-- <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="#">Mais antigos</a>
                    <a class="btn btn-outline-secondary disabled" href="#">Mais novos</a>
                </nav> --}}
            </div>

            <aside class="col-md-4 blog-sidebar">
                <!-- Adicione seu conteúdo aqui -->
            </aside>
        </div>
    </main>

    <footer class="blog-footer">
            
    </footer>

    <!-- Principal JavaScript do Bootstrap ... -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
        Holder.addTheme('thumb', {
            bg: '#55595c',
            fg: '#eceeef',
            text: 'Thumbnail'
        });
    </script>
@endsection
