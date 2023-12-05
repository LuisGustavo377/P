<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>C.M.M.A</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo.jpg " rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="index.html"><span>C.M.M.A</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>
            <nav id="navbar" class="navbar">
                <ul class="flex">
                    @guest
                        <li><a class="nav-link scrollto " href="{{ route('login') }}">Login</a></li>
                        <li><a class="nav-link scrollto " href="{{ route('register') }}">Registrar</a></li>
                        <li><a class="nav-link scrollto" href="#contact" class="nav-link">Contato</a></li>
                    @endguest

                    @auth
                        <li><a class="nav-link scrollto" href="{{ route('dashboard') }}" class="nav-link">Início</a></li>
                    @endauth

                    {{-- <li class="nav-item">
            @if (Route::has('login'))
                <div class="z-10 flex items-center p-6 text-right sm:fixed sm:top-0 sm:right-0">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="font-semibold text-gray-600 nav-link hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="font-semibold text-gray-600 nav-link hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                            in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 font-semibold text-gray-600 nav-link hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </li> --}}

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->





        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
            <div class="row justify-content-between">
                <div class="order-2 pt-5 col-lg-7 pt-lg-0 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <h1>Corporação Musical Manoel Alecrim <span>C.M.M.A</span></h1>
                        <h2>Um projeto musical que se dedica a inspirar e capacitar jovens artistas através da música.
                        </h2>
                        <div class="text-center text-lg-start">
                            <a href="#about" class="btn-get-started scrollto">Você é Músico?</a>
                        </div>
                    </div>
                </div>
                <div class="order-1 col-lg-4 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <img src="assets/img/imagem1.jpg" class="img-fluid zoom-effect" alt="">
                </div>
            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Details Section ======= -->
        <section id="details" class="details">
            <div class="container">

                <div class="row content">
                    <div class="col-md-4" data-aos="fade-right">
                        <img src="assets/img/imagem2.jpg" class="img-fluid zoom-effect" alt="">
                    </div>
                    <div class="pt-4 col-md-8" data-aos="fade-up">
                        <h3 style="font-size: 40px;">Paixão pela Música</h3>
                        <br>
                        <p class="fst-italic" style="font-size: 22px;">
                            Com uma trajetória de 29 anos de paixão e harmonia, a Corporação Musical Manoel Alecrim é
                            mais do que uma banda; é um testemunho vivo do poder que a música tem para unir comunidades
                            e inspirar gerações. Desde sua fundação, esta banda musical tem percorrido várias cidades,
                            compartilhando sua música com públicos de todos os cantos. Com cada melodia, eles têm criado
                            laços que transcendem barreiras geográficas, conectando pessoas de diferentes origens e
                            culturas por meio da linguagem universal da música e resgatando lembranças.
                        </p>
                    </div>
                </div>


                <div class="row content">
                    <div class="order-1 col-md-4 order-md-2" data-aos="fade-left">
                        <img src="assets/img/imagem3.jpg" class="img-fluid zoom-effect" alt="">
                    </div>
                    <div class="order-2 pt-5 col-md-8 order-md-1" data-aos="fade-up">
                        <h3 style="font-size: 40px;">O que torna tão especial?</h3>
                        <br>
                        <p class="fst-italic" style="font-size: 22px;">
                            É a maneira como ela abre as portas para jovens talentos. Ao longo dos anos, muitos jovens
                            músicos talentosos passaram por suas fileiras, aprendendo e crescendo sob a orientação de
                            músicos experientes. É uma verdadeira escola de música onde o entusiasmo da juventude se
                            mistura com a sabedoria dos veteranos.
                        </p>
                    </div>
                </div>


                <div class="row content">
                    <div class="row content align-items-center">
                        <div class="col-md-4" data-aos="fade-right">
                            <img src="assets/img/imagem4.jpg" class="img-fluid zoom-effect" alt="">
                        </div>
                        <div class="pt-5 col-md-8" data-aos="fade-up">
                            <h3 style="font-size: 40px;">Cada nota que ecoa de seus instrumentos ...</h3>
                            <br>
                            <p class="fst-italic" style="font-size: 22px;">Conta uma história de dedicação, paixão e
                                amor pela música. A
                                Corporação Musical Manoel Alecrim é uma prova viva de que a música transcende gerações e
                                fronteiras geográficas. É um eco da história e um farol de inspiração para as futuras
                                gerações de músicos.</p>
                            <p class="fst-italic" style="font-size: 22px;">Ao longo dos anos, a 'Corporação Musical'
                                tocou nos corações de
                                inúmeras pessoas, conectando comunidades e enriquecendo vidas. Sua jornada é uma
                                celebração do poder da música para criar laços, promover a excelência musical e nutrir o
                                espírito criativo de jovens talentos.</p>
                        </div>
                    </div>
                </div>


                <div class="row content align-items-center">
                    <div class="order-1 col-md-4 order-md-2" data-aos="fade-left">
                        <img src="assets/img/imagem5.jpg" class="img-fluid zoom-effect" alt="">
                    </div>
                    <div class="order-2 pt-5 col-md-8 order-md-1" data-aos="fade-up">
                        <h3 style="font-size: 40px;">A história...</h3>
                        <br>
                        <p class="fst-italic" style="font-size: 22px;">
                            A Corporação Musical Manoel Alecrim é um tributo à música e à juventude, uma
                            melodia que nunca deixa de inspirar, educar e encantar. É a medida que eles prosseguem em
                            sua jornada musical, é certo que mais jovens músicos encontrarão seu caminho, mantendo viva
                            a tradição e a paixão que tornam a Corporação uma força incomparável na cena musical.
                        </p>

                    </div>
                </div>

                <div class="row content">
                    <div class="row content align-items-center">
                        <div class="col-md-4" data-aos="fade-right">
                            <img src="assets/img/livro.png" class="img-fluid zoom-effect" alt="">
                        </div>
                        <div class="pt-5 col-md-8" data-aos="fade-up">
                            <h3 style="font-size: 40px;">Garanta já seu livro!</h3>
                            <br>
                            <p class="fst-italic" style="font-size: 22px;">Um livro que conta toda a trajetória e
                                curiosidades da nossa corporação.
                                São aproximadamente 300 entrevistados, dentre eles, integrantes, ex-membros e figuras
                                importantes para o desenvolvimento da banda e da cidade.</p>

                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Details Section -->


        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/musico3.jpg" class="testimonial-img" alt="">
                                <h3>Dimas</h3>
                                <h4>CEO &amp; Bombardino</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    "Quando lutamos unidos pelo grupo as conquistas são infinitamente maiores!"
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/musico1.jpg" class="testimonial-img" alt="">
                                <h3>Emerson</h3>
                                <h4>Souzafone</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    "Vivam intensamente o momento!"
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/musico2.jpg" class="testimonial-img" alt="">
                                <h3>Lucas Joaquim</h3>
                                <h4>Trombone</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    "A música toca a alma e o coração!"
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/musico4.jpg" class="testimonial-img" alt="">
                                <h3>Ana Paula</h3>
                                <h4>Clarinete</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    "A música tornam as coisas mais leves!"
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/musico5.jpg" class="testimonial-img" alt="">
                                <h3>Tainara</h3>
                                <h4>Clarinete</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    "A música é a mais bela arte existente!"
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->






        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Contato</h2>
                    <p>Entre em contato</p>
                </div>

                <div class="row">

                    <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Localização:</h4>
                                <p>Veredeinha</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Ligue:</h4>
                                <p>+37 99888-55488</p>
                            </div>

                        </div>

                    </div>

                    <div class="mt-5 col-lg-8 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Nome" required>
                                </div>
                                <div class="mt-3 col-md-6 form-group mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email" required>
                                </div>
                            </div>
                            <div class="mt-3 form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Título" required>
                            </div>
                            <div class="mt-3 form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Mensagem" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Carregando</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Sua mensagem foi enviada. Obrigado!div>
                                </div>
                                <div class="text-center"><button type="submit">Enviar mensagem</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>C.M.M.A</h3>
                            <p class="pb-3"><em>Corporação Musical Manoel Alecrim.</em></p>
                            <p>
                                A108 Adam Street <br>
                                NY 535022, USA<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                            <div class="mt-3 social-links">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>


                            <li><i class="bx bx-chevron-right"></i> <a href="#">Política e Privacidade</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Shows</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Baterista</a></li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Projeto C.M.M.A</span></strong>. Todos direitos reservados
            </div>
            <div class="credits">
                Designed by <a href="#">Turma4</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
