
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>{{ $titres[7]->titre }}</h2>
            <p>{{ $titres[7]->description }}</p>
          </div>
  
          <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
              @foreach ($testimonials as $testimonial)
                  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    {{ $testimonial->paragraphe }}
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src={{ $testimonial->pdp  }} class="testimonial-img" alt="">

                  <h3>{{ $testimonial->nom }}</h3>
                  <h4>{{ $testimonial->role }}</h4>
                </div>
              </div><!-- End testimonial item -->
              @endforeach
  
  
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
      </section><!-- End Testimonials Section -->
  