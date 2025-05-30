<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LUXIMMO | {{ $titre }}</title>
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
    @include('layouts.header')
    @include('layouts.menus')


    @yield('content')


    @include('layouts.footer')
    @include('layouts.scripts')
</body>

</html>
