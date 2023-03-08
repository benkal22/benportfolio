{{ $title = "Services" }}

@extends('master')
@section("content")

 <!-- ======= Services Section ======= -->
 <section id="services" class="services">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>{{ $service->name }}</h2>
      <p>{{ $service->resume }}</p>
    </div>

    <div class="section-title">
        <h2>{{ $service->name }}</h2>
        <img class="card-img-top" src="assets/img/services/{{ $service->icon }}.png"  alt="Card image {{ $service->name }}">
        <h5 class="card-title">{{ $service->name }}</h5>
        <p class="card-text">{{ $service->resume }}</p>
      </div>
  </div>
</section><!-- End Services Section -->


@endsection 

