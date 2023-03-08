<!DOCTYPE html>
<html lang="frs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{ $title_cur = isset($title) ? $title : "Portfolio"}}
    <title>Ben Kal - {{ $title_cur }}</title>
     <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  {{-- <link href="assets/css/style2.css" rel="stylesheet"> --}}
  {{-- @livewireStyles --}}
    {{-- <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" /> --}}
    {{-- <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    
    <!-- Bootstrap CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> --}}
</head>
<body>
    {{-- {{ View::make('elements.header') }} --}}
    
    {{ $active_cur = isset($active) ? $active : ""}}

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container-fluid d-flex justify-content-between align-items-center">

        <h1 class="logo me-auto me-lg-0"><a href="index.html">Ben Kaluseyiko</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
            <li><a {{ $title=="Accueil" ? "class=active" : ""}} href="/">Accueil</a></li>
            <li><a {{ $title=="A propos" ? "class=active" : ""}} href="apropos">A propos</a></li>
            <li><a {{ $title=="Parcours" ? "class=active" : ""}} href="parcours">Parcours</a></li>
            <li><a {{ $title=="Services" ? "class=active" : ""}} href="services">Services</a></li>
            <li><a {{ $title=="Portfolio" ? "class=active" : ""}} href="portfolio">Portfolio</a></li>
            <li><a {{ $title=="Contact" ? "class=active" : ""}} href="contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <div class="header-social-links">
            {{-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> --}}
            <a href="https://web.facebook.com/ben.kalsoft" class="facebook"><i class="bi bi-facebook"></i></a>
            {{-- <a href="#" class="instagram"><i class="bi bi-instagram"></i></a> --}}
            <a href="https://linkedin.fr/in/ben-kaluseyiko-genie" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            <button class="btn btn-outline-dark" href="portfolio">
                <a href="portfolio">
                    <i class="me-1"></i>
                    Projets
                    <span class="badge bg-dark text-white ms-1 rounded-pill">15</span>
                </a>
            </button>
        </div>
        
        </div>

    </header><!-- End Header -->
    <main id="main">
    
        @yield('content')
    
    </main><!-- End #main -->

    {{ View::make('elements.footer') }}
    
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
    {{-- @livewireScripts --}}
    
    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>


    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>
</html>
