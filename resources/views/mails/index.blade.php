@extends('master')
@section("content")

<main id="main">

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Mails</h2>
      </div>

      <div class="row">
        <div class="col-6">
          <h5>Nom :</h5>
        </div>
        <div class="col-6">
          <h5>Email : </h5>
        </div>
      </div>

      <h5>Sujet :<strong> {{ $email }}</strong></h5>
            
      <h5>Message :</h5>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

@endsection 