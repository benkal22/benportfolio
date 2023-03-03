@extends('master')
@section("content")

<main id="main">

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Parcours</h2>
        <p>Brève narration sur mon parcours professionnel partant du profil jusqu'aux expériences professionnelles acquises.</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Profil</h3>
          @foreach ($profils as $profil)
          <div class="resume-item pb-0">
            <h4>{{ $profil->name }}</h4>
            <p><em>{{ $profil->message }}</em></p>
            <p>
            <ul>
              <li>{{ $profil->address }}</li>
              <li>{{ $profil->phone }}</li>
              <li>{{ $profil->email }}</li>
            </ul>
            </p>
          </div>
          @endforeach

          <h3 class="resume-title">Education</h3>
          @foreach ($educations as $education)              
          <div class="resume-item">
            <h4>{{ $education->title }}</h4>
            <h5>{{ $education->time }}</h5>
            <p><em>{{ $education->location }}</em></p>
            <p>{{ $education->message }}</p>
          </div>
          @endforeach
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Expériences professionnelles</h3>
          @foreach ($experiences as $experience)              
          <div class="resume-item">
            <h4>{{ $experience->title }}</h4>
            <h5>{{ $experience->time }}</h5>
            <p><em>{{ $experience->location }} </em></p>
            <p>
            <p>
              {{ $experience->mission }}
            </p>
          </div>
          @endforeach
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

</main><!-- End #main -->
@endsection 