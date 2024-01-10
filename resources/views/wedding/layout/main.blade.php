<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('icons/favicon.ico')}}" />
        <title>{{$couples->bride_name}} & {{$couples->groom_name}}</title>
        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

        <!-- Animate.css -->
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

        <!-- Magnific Popup -->
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

        <!-- Owl Carousel  -->
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

        <!-- Theme style  -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">


        <!-- Modernizr JS -->
        <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
    </head>

    <body>

        @yield('main-content')


        @yield('fotter')
        {{-- JS --}}
        <!-- jQuery -->
            <script src="{{asset('js/jquery.min.js')}}"></script>
        <!-- jQuery Easing -->
            <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
        <!-- Bootstrap -->
            <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- Waypoints -->
            <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
        <!-- Carousel -->
            <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <!-- countTo -->
            <script src="{{asset('js/jquery.countTo.js')}}"></script>

        <!-- Stellar -->
            <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
        <!-- Magnific Popup -->
            <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
            <script src="{{asset('js/magnific-popup-options.js')}}"></script>

        <!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
            <script src="{{asset('js/simplyCountdown.min.js')}}"></script>
            <script src="{{asset('js/simplyCountdown.js')}}"></script>
        <!-- Main -->
            <script src="{{asset('js/main.js')}}"></script>
    </body>

</html>
