<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Гномик</title>
    <link rel="shortcut icon" href="/images/logo.png" type="image/png">

    <!-- Scripts -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />


<!-- Styles -->

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">


    @stack('styles')
</head>
<body>
@include('_partials.header')
<div id="app">
    <main>
        @yield('content')
    </main>
</div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
@stack('scripts')
<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            var height = $('.logo').height();;
            var scrollTop = $(window).scrollTop();

            if (scrollTop >= height - 5) {
                $('.menuse').addClass('solid-nav');
                $('.menuse').addClass('shadow');
                $('.main-logo').removeClass('max');
                $('.main-logo').addClass('min');
                $('.logs').removeClass('logs3');
                $('.logs').addClass('logs2');
                $('.menu-point').addClass('menu-point-black');
            } else {
                $('.menuse').removeClass('solid-nav');
                $('.menuse').removeClass('shadow');
                $('.main-logo').removeClass('min');
                $('.main-logo').addClass('max');
                $('.logs').addClass('logs3');
                $('.logs').removeClass('logs2');
                $('.menu-point').removeClass('menu-point-black');
            }

        });
    });
</script>
</body>
</html>
