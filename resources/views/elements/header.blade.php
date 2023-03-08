{{ $active_cur = isset($active) ? $active : ""}}

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Ben Kaluseyiko</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li {{ $title=="Accueil" ? "id=current_page" : "Portfolio"}}><a class="{{ $active_cur }}" href="/">Accueil</a></li>
          <li><a class="{{ $active_cur }}" href="apropos">A propos</a></li>
          <li><a class="{{ $active_cur }}" href="parcours">Parcours</a></li>
          <li><a class="{{ $active_cur }}" href="services">Services</a></li>
          <li><a class="{{ $active_cur }}" href="portfolio">Portfolio</a></li>
          <li><a class="{{ $active_cur }}" href="contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>

  </header><!-- End Header -->

{{-- <!-- Navigation-->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/">Ben Kaluseyiko</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="apropos">A propos</a></li>
                <li class="nav-item"><a class="nav-link" href="parcours">Parcours</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="services">Tous mes services</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Science des données</a></li>
                        <li><a class="dropdown-item" href="#!">Ingénierie logicielle</a></li>
                        <li><a class="dropdown-item" href="#!">Programmation web & mobile</a></li>
                        <li><a class="dropdown-item" href="#!">Graphisme</a></li>
                        <li><a class="dropdown-item" href="#!">Formations</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="portfolio" role="button" data-bs-toggle="dropdown" aria-expanded="false">Portfolio</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="portfolio">Toutes les prestations</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Science des données</a></li>
                        <li><a class="dropdown-item" href="#!">Consultance en IT</a></li>
                        <li><a class="dropdown-item" href="#!">Sites web</a></li>
                        <li><a class="dropdown-item" href="#!">Applications mobiles</a></li>
                        <li><a class="dropdown-item" href="#!">Formations et ateliers</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
            </ul>

                <button class="btn btn-outline-dark" href="portfolio">
                    <a href="portfolio">
                        <i class="me-1"></i>
                        Projets
                        <span class="badge bg-dark text-white ms-1 rounded-pill">15</span>
                    </a>
                </button>
        </div>
    </div>
</nav> --}}