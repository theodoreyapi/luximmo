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
<!-- Start Breadcrumb Area -->
<section class="breadcrumb-area section-padding" style="background-image:url('assets/img/breadcrumb.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2>{{ $sousTitre }}</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">Accueil</a></li>
                        <li><i class="fas fa-angle-double-right"></i></li>
                        <li>{{ $sousTitreOne }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumb Area -->
