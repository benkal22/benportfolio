{{ $title = "Services" }}

@extends('master')
@section("content")

 <!-- ======= Services Section ======= -->
 <section id="services" class="services">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Services</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row">
      @foreach ($services as $service)
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch my-2 h-100  h-100 justify-content-center" data-aos="zoom-in" data-aos-delay="100">
      <div class="card">
        <div class="card-header">
          {{ $service->name }}
        </div>
        <div class="card-body align-items-center">
          <img class="card-img-top" src="assets/img/services/{{ $service->icon }}.png"  alt="Card image {{ $service->name }}">
          <h5 class="card-title">{{ $service->name }}</h5>
          <p class="card-text">{{ $service->resume }}</p>
          <a href="{{ route('voir_service', ['id'=>$service->id]) }}" class="btn btn-primary">Voir plus</a>
        </div>
      </div>
      </div>

      @endforeach

    </div>

  </div>
</section><!-- End Services Section -->


@endsection 