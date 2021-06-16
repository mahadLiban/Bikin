  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
      <h1>{{ $titres[1]->titre }}</h1>
      <h2>{{ $titres[1]->description }}</h2>
      <a href="#about" class="btn-get-started scrollto">{{  $titres[1]->btnTxt  }}</a>
      <img src={{ $homes[0]->img }} class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="150">
    </div>

  </section><!-- End Hero -->
