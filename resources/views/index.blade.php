<!DOCTYPE html>
<html class="no-js" lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LUXIMMO | Accueil</title>
    <link rel="icon" href="{{ asset('') }}assets/img/icon.png" type="image/gif" sizes="16x16">
    <link rel="icon" href="{{ asset('') }}assets/img/icon.png" type="image/gif" sizes="18x18">
    <link rel="icon" href="{{ asset('') }}assets/img/icon.png" type="image/gif" sizes="20x20">

    <link rel="stylesheet" href="{{ asset('') }}assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/fontawesome.all.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/vegas.slider.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/lightcase.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/animate.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/normalize.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/style.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/responsive.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- Start Header Area -->
    <header class="header transparent-header-2">

        <div class="header-bottom mt-30 sticky-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 align-self-center">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="assets/img/logo.png" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-8" style="text-align: end">
                        <!-- Header Bottom Right -->
                        <div class="header-bright">
                            <div class="mobile-bar">
                                <div class="canvas_open">
                                    <a href="javascript:void(0)">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Menu -->
                        <div class="menu">
                            <nav>
                                <ul>
                                    <li><a href="{{ url('/') }}">Accueil</a></li>
                                    <li><a href="{{ url('about') }}">Apropos</a></li>
                                    <li><a href="{{ url('services') }}">Nos services</a></li>
                                    {{-- <li><a href="{{ url('blog') }}">Blog</a></li> --}}
                                    <li><a href="{{ url('contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Area -->
    <!-- Start Mobile Menu Area -->
    <div class="mobile-menu-area">

        <!--offcanvas menu area start-->
        <div class="off_canvars_overlay">

        </div>
        <div class="offcanvas_menu">
            <div class="offcanvas_menu_wrapper">
                <div class="canvas_close">
                    <a href="javascript:void(0)"><i class="fas fa-times"></i></a>
                </div>
                <div class="mobile-logo">
                    <a href="{{ url('/') }}">
                        <img src="assets/img/logo.png" alt="logo">
                    </a>
                </div>
                <div id="menu" class="text-left ">
                    <ul class="offcanvas_main_menu">
                        <li class="menu-item-has-children"><a href="{{ url('about') }}">Apropos</a></li>
                        <li class="menu-item-has-children"><a href="{{ url('services') }}">Nos services</a></li>
                        <li class="menu-item-has-children"><a href="{{ url('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--offcanvas menu area end-->
    <!-- Start Vegas Hero Slider -->
    <aside id="hero_vegas_slider" class="hero_vegas_slider_content">
        <div class="hero_vegas_slider_content_a">
            <div class="container">
                <div class="hero_vegas_inner_content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h4>Bienvenue à LUXIMMO</h4>
                            <h2>Trouvez votre incroyable <br> maison à acheter</h2>
                            <div class="arrow bounce">
                                <a href="#about"><i class="bi bi-suit-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!-- End Vegas Hero Slider -->

    <!-- Start About Area -->
    <section class="about-area section-padding" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="assets/img/about3.png" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-content">
                        <h4 class="sc_subtitle"><span>À propos de nous</span></h4>
                        <h2 class="sc_title">Des architectes différents et avec une nouvelle approche.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi feugiat lectus sed justo
                            sollicitudin, non porttitor nunc varius.</p>
                        <ul class="ab-services-list">
                            <!-- Single -->
                            <li class="slist-item">
                                <div class="icon">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="conent">
                                    <h4>Construction de maison</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisic do eiusmod tempor incididunt ut
                                        labore et</p>
                                </div>
                            </li>
                            <!-- Single -->
                            <li class="slist-item">
                                <div class="icon">
                                    <i class="fas fa-user-secret"></i>
                                </div>
                                <div class="conent">
                                    <h4>Experts mondiaux en architecture</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisic do eiusmod tempor incididunt ut
                                        labore et</p>
                                </div>
                            </li>
                            <!-- Single -->
                            <li class="slist-item">
                                <div class="icon">
                                    <i class="fas fa-map-marked-alt"></i>
                                </div>
                                <div class="conent">
                                    <h4>Aménagement foncier</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisic do eiusmod tempor incididunt ut
                                        labore et</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->
    <!-- Start Making living  -->
    <section class="making-living section-padding">
        <div class="container">
            <div class="row">
                <!-- Content -->
                <div class="col-lg-6">
                    <div class="making-living-content">
                        <h4 class="sc_subtitle text-white"><span>Installations du bâtiment</span></h4>
                        <h2 class="sc_title text-white">Rendre les espaces de vie plus beaux</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi feugiat lectus sed justo
                            sollicitudin, non porttitor nunc varius. Donec commodo ac nibh quis aliquet. Suspendisse
                            varius hendrerit odio eget efficitur. </p>
                        <ul>
                            <li><i class="fas fa-check"></i>Gestion immobilière/li>
                            <li><i class="fas fa-check"></i>Études & réalisations immobilières</li>
                            <li><i class="fas fa-check"></i>Aménagement foncier</li>
                            <li><i class="fas fa-check"></i>Bâtiments & travaux publics</li>
                            <li><i class="fas fa-check"></i>Intermediation</li>
                        </ul>
                    </div>
                </div>
                <!-- Thumbnail -->
                <div class="col-lg-6 align-self-center">
                    <div class="making-living-vedio">
                        <div class="video-btn">
                            <a data-rel="lightcase" href="https://player.vimeo.com/video/553110309?h=dc4ee31dc4"><i
                                    class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Making living  -->
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
    <!-- Start Counter Area -->
    <section class="section-padding-2 counter-area" style="background-image:url('assets/img/counter.jpg');">
        <div class="container">
            <div class="row">
                <!-- Single -->
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="counter-item">
                        <div class="icon">
                            <i class="fas fa-dna"></i>
                        </div>
                        <div class="content">
                            <div class="title">
                                <h2 class="counter">255</h2>
                                <h3>+</h3>
                            </div>
                            <p>Projets restants</p>
                        </div>
                    </div>
                </div>
                <!-- Single -->
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="counter-item">
                        <div class="icon">
                            <i class="fas fa-tasks"></i>
                        </div>
                        <div class="content">
                            <div class="title">
                                <h2 class="counter">201</h2>
                                <h3>+</h3>
                            </div>
                            <p>Projets terminés</p>
                        </div>
                    </div>
                </div>
                <!-- Single -->
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="counter-item">
                        <div class="icon">
                            <i class="far fa-gem"></i>
                        </div>
                        <div class="content">
                            <div class="title">
                                <h2 class="counter">100</h2>
                                <h3>+</h3>
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
                <!-- Single -->
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="counter-item">
                        <div class="icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="content">
                            <div class="title">
                                <h2 class="counter">25</h2>
                                <h3>+</h3>
                            </div>
                            <p>Clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Counter Area -->

    <!-- Start Sketch Area -->
    <section class="section-padding section-bg">
        <div class="container">
            <!-- Section Headding -->
            <div class="row">
                <div class="col-lg-12 mb-50 text-center">
                    <div class="section-headding">
                        <h4 class="sc_subtitle"><span>Croquis d'appartements</span></h4>
                        <h2 class="sc_title">Plan d'appartements</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="apartment-sketch-nav mb-40">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="studiohome-tab" data-bs-toggle="tab"
                                data-bs-target="#studiohome" role="tab" aria-controls="studiohome"
                                aria-selected="true">Studio</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="port-tab" data-bs-toggle="tab" data-bs-target="#port"
                                role="tab" aria-controls="port" aria-selected="false">Portion de luxe</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="penthouse-tab" data-bs-toggle="tab"
                                data-bs-target="#penthouse" role="tab" aria-controls="penthouse"
                                aria-selected="false">Penthouse</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="garden-tab" data-bs-toggle="tab" data-bs-target="#garden"
                                role="tab" aria-controls="garden" aria-selected="false">Top Garden</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="double-tab" data-bs-toggle="tab" data-bs-target="#double"
                                role="tab" aria-controls="double" aria-selected="false">Double hauteur</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content apartment-sketch-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="studiohome" role="tabpanel"
                        aria-labelledby="studiohome-tab">
                        <div class="apartment-sketch-item">
                            <div class="row d-flex">
                                <div class="col-lg-6 align-self-center">
                                    <div class="content">
                                        <h2>Studio</h2>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour, or
                                            randomised words which don't look even slightly believable.</p>
                                        <ul>
                                            <li>Total Area <span>2800 Sq. Ft</span></li>
                                            <li>Bedroom <span>150 Sq. Ft</span></li>
                                            <li>Bathroom <span>45 Sq. Ft</span></li>
                                            <li>Belcony/Pets <span> Allowed</span></li>
                                            <li>Lounge <span> 650 Sq. Ft</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <img src="assets/img/int.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="port" role="tabpanel" aria-labelledby="port-tab">
                        <div class="apartment-sketch-item">
                            <div class="row d-flex">
                                <div class="col-lg-6 align-self-center">
                                    <div class="content">
                                        <h2>Deluxe Portion</h2>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour, or
                                            randomised words which don't look even slightly believable.</p>
                                        <ul>
                                            <li>Total Area <span>2800 Sq. Ft</span></li>
                                            <li>Bedroom <span>150 Sq. Ft</span></li>
                                            <li>Bathroom <span>45 Sq. Ft</span></li>
                                            <li>Belcony/Pets <span> Allowed</span></li>
                                            <li>Lounge <span> 650 Sq. Ft</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <img src="assets/img/int.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="penthouse" role="tabpanel" aria-labelledby="penthouse-tab">
                        <div class="apartment-sketch-item">
                            <div class="row d-flex">
                                <div class="col-lg-6 align-self-center">
                                    <div class="content">
                                        <h2>Penthouse</h2>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour, or
                                            randomised words which don't look even slightly believable.</p>
                                        <ul>
                                            <li>Total Area <span>2800 Sq. Ft</span></li>
                                            <li>Bedroom <span>150 Sq. Ft</span></li>
                                            <li>Bathroom <span>45 Sq. Ft</span></li>
                                            <li>Belcony/Pets <span> Allowed</span></li>
                                            <li>Lounge <span> 650 Sq. Ft</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <img src="assets/img/int.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="garden" role="tabpanel" aria-labelledby="garden-tab">
                        <div class="apartment-sketch-item">
                            <div class="row d-flex">
                                <div class="col-lg-6 align-self-center">
                                    <div class="content">
                                        <h2>Top Garden</h2>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour, or
                                            randomised words which don't look even slightly believable.</p>
                                        <ul>
                                            <li>Total Area <span>2800 Sq. Ft</span></li>
                                            <li>Bedroom <span>150 Sq. Ft</span></li>
                                            <li>Bathroom <span>45 Sq. Ft</span></li>
                                            <li>Belcony/Pets <span> Allowed</span></li>
                                            <li>Lounge <span> 650 Sq. Ft</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <img src="assets/img/int.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="double" role="tabpanel" aria-labelledby="double-tab">
                        <div class="apartment-sketch-item">
                            <div class="row d-flex">
                                <div class="col-lg-6 align-self-center">
                                    <div class="content">
                                        <h2>Double Height</h2>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour, or
                                            randomised words which don't look even slightly believable.</p>
                                        <ul>
                                            <li>Total Area <span>2800 Sq. Ft</span></li>
                                            <li>Bedroom <span>150 Sq. Ft</span></li>
                                            <li>Bathroom <span>45 Sq. Ft</span></li>
                                            <li>Belcony/Pets <span> Allowed</span></li>
                                            <li>Lounge <span> 650 Sq. Ft</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <img src="assets/img/int.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Sketch Area -->

    <!-- Start Vedio Popup Area -->
    <div class="vedio-popup-area" style="background-image:url('assets/img/vedio.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="vedio-popup-btn">
                        <div class="video-btn">
                            <a data-rel="lightcase" href="https://player.vimeo.com/video/553110309?h=dc4ee31dc4"><i
                                    class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Vedio Popup Area -->

    <!-- Start Category Area -->
    <section class="section-padding-2">
        <div class="container">
            <!-- Section Headding -->
            <div class="row">
                <div class="col-lg-12 mb-50 text-center">
                    <div class="section-headding">
                        <h4 class="sc_subtitle"><span>Notre catégorie</span></h4>
                        <h2 class="sc_title">Bâtiments d'agrément</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ba_category_full">
                    <ul>
                        <li>
                            <div class="category-block-one">
                                <div class="inner-box">
                                    <i class="fas fa-laptop-house"></i>
                                    <h4><a href="#">Résidentiel</a></h4>
                                    <span>12</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="category-block-one">
                                <div class="inner-box">
                                    <i class="fas fa-car-side"></i>
                                    <h4><a href="#">Place de parking</a></h4>
                                    <span>22</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="category-block-one">
                                <div class="inner-box">
                                    <i class="far fa-object-group"></i>
                                    <h4><a href="#">Commercial</a></h4>
                                    <span>15</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="category-block-one">
                                <div class="inner-box">
                                    <i class="fas fa-laptop-house"></i>
                                    <h4><a href="property-details.html">Appartment</a></h4>
                                    <span>19</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="category-block-one">
                                <div class="inner-box">
                                    <i class="fas fa-door-open"></i>
                                    <h4><a href="#">Industrial</a></h4>
                                    <span>10</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="category-block-one">
                                <div class="inner-box">
                                    <i class="fas fa-house-damage"></i>
                                    <h4><a href="#">Code de bâtiment</a></h4>
                                    <span>15</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="category-block-one">
                                <div class="inner-box">
                                    <i class="fas fa-shower"></i>
                                    <h4><a href="#">Piscine</a></h4>
                                    <span>12</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="category-block-one">
                                <div class="inner-box">
                                    <i class="fas fa-shield-alt"></i>
                                    <h4><a href="#">Sécurité privée</a></h4>
                                    <span>12</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="category-block-one">
                                <div class="inner-box">
                                    <i class="fas fa-boxes"></i>
                                    <h4><a href="#">Maisons intelligentes</a></h4>
                                    <span>12</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="category-block-one">
                                <div class="inner-box">
                                    <i class="fas fa-laptop-house"></i>
                                    <h4><a href="#">Residential</a></h4>
                                    <span>12</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Category Area -->
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

    <!-- Start Instagram Feed -->
    <div class="ins-feed">
        <div class="instagram-feed owl-carousel">
            <!-- single -->
            <div class="ins-single">
                <a data-rel="lightcase:myCollection:instagram" href="assets/img/instagram/1.jpg">
                    <img src="assets/img/instagram/1.jpg" alt="img">
                </a>
            </div>
            <!-- single -->
            <div class="ins-single">
                <a data-rel="lightcase:myCollection:instagram" href="assets/img/instagram/2.jpg">
                    <img src="assets/img/instagram/2.jpg" alt="img">
                </a>
            </div>
            <!-- single -->
            <div class="ins-single">
                <a data-rel="lightcase:myCollection:instagram" href="assets/img/instagram/3.jpg">
                    <img src="assets/img/instagram/1.jpg" alt="img">
                </a>
            </div>
            <!-- single -->
            <div class="ins-single">
                <a data-rel="lightcase:myCollection:instagram" href="assets/img/instagram/4.jpg">
                    <img src="assets/img/instagram/4.jpg" alt="img">
                </a>
            </div>
            <!-- single -->
            <div class="ins-single">
                <a data-rel="lightcase:myCollection:instagram" href="assets/img/instagram/5.jpg">
                    <img src="assets/img/instagram/5.jpg" alt="img">
                </a>
            </div>
            <!-- single -->
            <div class="ins-single">
                <a data-rel="lightcase:myCollection:instagram" href="assets/img/instagram/6.jpg">
                    <img src="assets/img/instagram/6.jpg" alt="img">
                </a>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed -->
    <!-- Start Footer Area -->
    @include('layouts.footer')
    <!-- Start Footer Area -->

    <div class="scroll-area">
        <i class="bi bi-arrow-up"></i>
    </div>
    <!-- Js File -->
    <script src="{{ asset('') }}assets/js/modernizr.min.js"></script>
    <script src="{{ asset('') }}assets/js/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('') }}assets/js/popper.min.js"></script>
    <script src="{{ asset('') }}assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('') }}assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('') }}assets/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('') }}assets/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('') }}assets/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('') }}assets/js/vegas.slider.min.js"></script>
    <script src="{{ asset('') }}assets/js/mixitup.min.js"></script>
    <script src="{{ asset('') }}assets/js/lightcase.js"></script>
    <script src="{{ asset('') }}assets/js/wow.min.js"></script>
    <script src="{{ asset('') }}assets/js/mobile-menu.js"></script>
    <script src="{{ asset('') }}assets/js/script.js"></script>
</body>

</html>
