@extends('layouts.master', [
    'titre' => 'Apropos',
    'sousTitre' => 'A propos de nous',
    'sousTitreOne' => 'A propos',
])

@section('content')
    <!-- Start About Area -->
    <section class="about-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="assets/img/about.png" alt="img">
                        <div class="about-vedio">
                            <div class="video-btn">
                                <a data-rel="lightcase" href="https://player.vimeo.com/video/553110309?h=dc4ee31dc4"><i
                                        class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-content">
                        <h4 class="sc_subtitle"><span>À propos de nous</span></h4>
                        <h2 class="sc_title">Des architectes différents et avec une nouvelle approche.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi feugiat lectus sed justo
                            sollicitudin, non porttitor nunc varius. Donec commodo ac nibh quis aliquet. Suspendisse
                            varius hendrerit odio eget efficitur. Mauris sed neque porta, lacinia metus sit amet,
                            laoreet quam. Maecenas dapibus ligula vel magna hendrerit.</p>
                        <ul>
                            <li><i class="bi bi-house"></i> <span> Conception de maison </span></li>
                            <li><i class="bi bi-border-bottom"></i> <span>Étude & réalisation</span></li>
                            <li><i class="bi bi-shield-fill-check"></i> <span>Sécurité complète 24h/24 et 7j/7</span></li>
                            <li><i class="bi bi-life-preserver"></i> <span>Un style de vie exceptionnel </span></li>
                        </ul>
                        <p> Morbi porttitor nibh justo, sit amet imperdiet ligula laoreet eu. Sed mollis nec sem vel
                            laoreet. Donec tincidunt consequat gravida. Nullam accumsan lobortis nisl sed gravida.
                            Aliquam facilisis blandit accumsan. Suspendisse elementum sit amet tortor eget mollis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->

    <!-- Start Services Area -->
    <section class="section-padding-2 section-bg">
        <div class="container">
            <!-- Section Headding -->
            <div class="row">
                <div class="col-lg-12 mb-50 text-center">
                    <div class="section-headding">
                        <h4 class="sc_subtitle"><span>Nos services</span></h4>
                        <h2 class="sc_title">Notre objectif principal</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single -->
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="info-box">
                        <div class="icon">
                            <img src="assets/img/1.png" alt="services">
                        </div>
                        <div class="content">
                            <h2><a href="#">Acheter une maison</a></h2>
                            <p> Arose mr rapid in so vexed words. Gay welcome led add to lasting chiefly say to looking
                                for better. </p>
                        </div>
                    </div>
                </div>
                <!-- Single -->
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="info-box">
                        <div class="icon">
                            <img src="assets/img/2.png" alt="services">
                        </div>
                        <div class="content">
                            <h2><a href="#">Vendre une maison</a></h2>
                            <p> Arose mr rapid in so vexed words. Gay welcome led add to lasting chiefly say to looking
                                for better. </p>
                        </div>
                    </div>
                </div>
                <!-- Single -->
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="info-box">
                        <div class="icon">
                            <img src="assets/img/3.png" alt="services">
                        </div>
                        <div class="content">
                            <h2><a href="#">Faire louer</a></h2>
                            <p> Arose mr rapid in so vexed words. Gay welcome led add to lasting chiefly say to looking
                                for better. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Area -->

    <!-- Start Team Area -->
    <section class="section-padding-2">
        <div class="container">
            <!-- Section Headding -->
            <div class="row">
                <div class="col-lg-12 mb-50 text-center">
                    <div class="section-headding">
                        <h4 class="sc_subtitle"><span>Équipe</span></h4>
                        <h2 class="sc_title">Staff</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Team ITem -->
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="team-item">
                        <div class="thumbnail">
                            <img src="assets/img/team/2.jpg" alt="team">
                            <div class="team-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <h2>Marcel OBROU Sibaï</h2>
                            <p>Gérant</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Area -->

    <!-- Start Testimonial Area -->
    <section class="section-padding section-bg">
        <div class="container">
            <!-- Section Headding -->
            <div class="row">
                <div class="col-lg-12 mb-50 text-center">
                    <div class="section-headding">
                        <h4 class="sc_subtitle"><span>Notre superbe témoignage</span></h4>
                        <h2 class="sc_title">Commentaires des clients</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="client-testimonial-full owl-carousel">
                        <!-- Single -->
                        <div class="testimonial-item">
                            <div class="thumbnail">
                                <img src="assets/img/tes1.jpg" alt="">
                            </div>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                                    incididunt ut labore.</p>
                                <h2>Rosalina D. William</h2>
                                <h4>Founder</h4>
                            </div>
                            <div class="btm-big-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="testimonial-item">
                            <div class="thumbnail">
                                <img src="assets/img/tes2.jpg" alt="">
                            </div>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                                    incididunt ut labore.</p>
                                <h2>Rosalina D. William</h2>
                                <h4>Founder</h4>
                            </div>
                            <div class="btm-big-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="testimonial-item">
                            <div class="thumbnail">
                                <img src="assets/img/tes1.jpg" alt="">
                            </div>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                                    incididunt ut labore.</p>
                                <h2>Rosalina D. William</h2>
                                <h4>Founder</h4>
                            </div>
                            <div class="btm-big-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Area -->
@endsection
