@extends('layouts.master', [
    'titre' => 'Apropos',
     'sousTitre' => 'Nos services',
    'sousTitreOne' => 'Services'
])

@section('content')
    <style>
        body {
            font-family: 'Montserrat', Arial, sans-serif;
            background: #f8f9fa;
            color: #222;
        }
        h1, h2, h3, h4, h5, h6 {
            font-weight: 700;
            color: #1a1a2e;
            letter-spacing: 1px;
        }
        a {
            color: #0d6efd;
            transition: color 0.2s;
        }
        a:hover {
            color: #ff6f61;
            text-decoration: none;
        }
        .section-headding h2 {
            color: #ff6f61;
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        .sc_subtitle span {
            color: #0d6efd;
            font-weight: 700;
            letter-spacing: 2px;
        }
        .info-box {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 2px 16px rgba(0,0,0,0.07);
            transition: transform 0.2s, box-shadow 0.2s;
            padding: 32px 24px;
            text-align: center;
        }
        .info-box:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 8px 32px rgba(255,111,97,0.15);
            border: 1.5px solid #ff6f61;
        }
        .info-box .icon img {
            width: 64px;
            margin-bottom: 18px;
        }
        .info-box h2 a {
            color: #0d6efd;
        }
        @media (max-width: 991px) {
            .info-box {
                padding: 24px 12px;
            }
        }
    </style>
    <!-- Start Services Area -->
    <section class="section-padding-2 section-bg">
        <div class="container">
            <!-- Section Headding -->
            <div class="row">
                <div class="col-lg-12 mb-50 text-center">
                    <div class="section-headding">
                        <h4 class="sc_subtitle"><span>Nos Services</span></h4>
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
                            <h2><a href="#">La promotion, la réalisation et la gestion immobilière</a></h2>
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
                            <h2><a href="#">L’aménagement foncier</a></h2>
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
                            <h2><a href="#">Tous travaux d’études et de réalisations immobilières </a></h2>
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
                            <h2><a href="#">La sous-traitance dans la construction immobilière</a></h2>
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
                            <h2><a href="#">L'intermédiation immobilière </a></h2>
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
                            <h2><a href="#">La construction et entretien de bâtiments</a></h2>
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
                            <h2><a href="#">Etudes et réalisation de tous travaux publics</a></h2>
                            <p> Arose mr rapid in so vexed words. Gay welcome led add to lasting chiefly say to looking
                                for better. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Area -->
@endsection
