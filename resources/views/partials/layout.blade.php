<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    @if(View::hasSection('title'))
        <title>@yield('title') - Fieldstone</title>
    @else
        <title>{{ isset($title) ? $title . ' - ' : null }}Fieldstone - The HVAC Service Management Platform</title>
    @endif

    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

    @if (isset($canonical))
    <link rel="canonical" href="{{ url($canonical) }}">
    @endif

    <!-- Favicon -->
    <meta name="google" content="notranslate">

    <meta name="apple-mobile-web-app-title" content="Fieldstone">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="msapplication-config" content="{!! asset('img/favicon/browserconfig.xml') !!}">
    <link rel="shortcut icon" href="{{ asset('img/favicon/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-icon-180x180.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('img/favicon/apple-icon-precomposed.png') }}">
    <meta name="theme-color" content="#7952b3">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- Load styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />
    <link rel="stylesheet"
          type="text/css"
          href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

    <!-- Bootstrap and FontAwesome is mixed into our app.css -->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    @yield('css')
</head>
<body class="language-php" style="width:100%;">

@include('partials.header')

<main style="width:100%;">
    @yield('content')
</main>

@include('partials.footer')

{{--Includes Bootstrap--}}
<script src="{{ mix('/js/manifest.js') }}"></script>
<script src="{{ mix('/js/app.js') }}"></script>

<script>
    // var _gaq=[['_setAccount','xxxxxxxxx'],['_trackPageview']];
    // (function(d,t){
    //     var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    //     g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    //     s.parentNode.insertBefore(g,s)
    // }(document,'script'));
</script>
@yield('scripts')
</body>
</html>
