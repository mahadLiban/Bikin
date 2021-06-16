    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>{{ $titres[5]->titre }}</h2>
                <p>{{ $titres[5]->description }}</p>
            </div>

            <div class="row">

                @foreach ($users as $user)
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <img src="{{ asset("img/team/". $user->img)}}" class="img-fluid" alt="">

                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>{{ $user->name }}</h4>
                                    <span>{{ $user->role->role }}</span>
                                </div>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                      </div>
                        @endforeach

        </div>

    </section><!-- End Team Section -->
