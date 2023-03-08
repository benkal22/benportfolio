{{ $title = "Accueil" }}

@extends('master')
{{ $active = "active" }}

@section("content")

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  {{-- <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
    <h1>Ben Kaluseyiko Diansosa</h1>
    <a href="apropos" class="btn-about">A propos de moi</a>
  </div> --}}
  <div class="container d-flex flex-column align-items-center" data-aos="fade-in">
    <h1>Ben KALUSEYIKO DIANSOSA</h1>
    <h2>Je suis <span class="typed" data-typed-items="Ingénieur informaticien, Data Scientist, Développeur full-stack, Consultant en Informatique"></span></h2>
    <a href="apropos" class="btn-about">A propos de moi</a>
  </div>
</section><!-- End Hero -->


@endsection 