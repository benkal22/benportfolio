{{ $title = "Portfolio" }}

@extends('master')
@section("content")

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>Mon espace numérique contenant des exemples de mes réalisations.</p>
      </div>
      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">Tout</li>
            @foreach ($portfolio_categories as $item)
            <li data-filter=".filter-{{ $item->category }}">{{ $item->category}}</li>
            @endforeach
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        @foreach ($portfolios as $portfolio)         
        <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $portfolio->category }}">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/{{ $portfolio->image }}.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              {{-- {{ $portfolio_id = $portfolio->id }}    
              {{ print($portfolio_id) }}            --}}
              <h4>{{ $portfolio->name }}</h4>
              <p>{{ $portfolio->category }}</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/{{ $portfolio->image }}.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $portfolio->name }}"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details" class="portfolio-details-lightbox" data-glightbox="type: external" title="Détails du Portfolio"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </section><!-- End Portfolio Section -->

@endsection 