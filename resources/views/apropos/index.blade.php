@extends('master')
@section("content")

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>A propos de moi</h2>
        <p>
          Je suis un scientifique de données, analyste et développeur logiciel fullstack, consultant en informatique, graphiste et entrepreneur.
          Licencié (BAC+5) en Sciences Mathématique et Informatique, groupe : Informatique, Option : Gestion Informatique, à l'Université de Kinshasa.
          J'ai acquis une solide expérience en développement des systèmes informatiques innovants qui ont permis d'améliorer la productivité et les opérations des entreprises.
        </p>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <img src="assets/img/about.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content">
          <h3>Data scientist</h3>
          <p class="fst-italic">
            Je recueille, traite, analyse et je fais parler les données massives dans le but d'améliorer les performances d'une entreprise.  
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-rounded-right"></i> <strong>Date de naissance :</strong> 31/08/1996</li>
                <li><i class="bi bi-rounded-right"></i> <strong>Site web :</strong> www.benkalsoft.com</li>
                <li><i class="bi bi-rounded-right"></i> <strong>Téléphone :</strong> +243 85 016 81 29</li>
                <li><i class="bi bi-rounded-right"></i> <strong>Ville :</strong> City : Kinshasa, RDC</li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-rounded-right"></i> <strong>Niveau :</strong> Licence (BAC+5)</li>
                <li><i class="bi bi-rounded-right"></i> <strong>Email :</strong> benkal@benkalsoft.com</li>
                <li><i class="bi bi-rounded-right"></i> <strong>Freelance :</strong> Disponible</li>
              </ul>
            </div>
          </div>
          <p>
            Actuellement, je suis entrain de poursuivre mes études en Diplôme d'Etudes Approfondies (DEA), l'équivalent de Master II en Intelligence Artificielle et Science de Données à l'Université de Kinshasa, en vue d'obtenir le titre de doctorant en IA & Science de Données.
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Skills Section ======= -->
  <section id="skills" class="skills">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Compétences</h2>
        <p></p>
      </div>
      
      <div class="row skills-content">
        @foreach($outils as $outil)
        <div class="col-lg-6">
          
          <div class="col-lg-12">
            <span class="badge bg-dark text-white ms-1 rounded-pill">{{$outil->id}}</span>
            <div class="progress">
              <span class="skill">{{$outil->name}}<i class="val">{{$outil->percent}}%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{$outil->percent}}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
          {{$outil->comp_name}}
        </div> 
      @endforeach
      </div>
    </div>
  </section><!-- End Skills Section -->
  <!-- ======= Facts Section ======= -->
  {{-- <section id="facts" class="facts"> --}}
    {{-- <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Facts</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row counters">

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
          <p>Clients</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
          <p>Projects</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
          <p>Hours Of Support</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
          <p>Hard Workers</p>
        </div>

      </div>

    </div> --}}
  {{-- </section><!-- End Facts Section --> --}}

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Testimonials</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
          
          @foreach($temoignages as $temoignage)
          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/{{ $temoignage->image }}.jpg" class="testimonial-img" alt="">
              <h3>{{ $temoignage->author }}</h3>
              <h4>{{ $temoignage->job }}</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                {{ $temoignage->subject }}
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->
          @endforeach

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

</main><!-- End #main -->
@endsection 