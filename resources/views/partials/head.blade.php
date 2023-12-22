<!doctype html>
<html lang="en">
<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Home</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset(setting()->site_favicon) }}" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/all.css') }}">

    <!--====== nice select css ======-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/nice-select.css') }}">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}">

    <!--====== Swiper css ======-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/swiper.min.css') }}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/default.css') }}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('head')

    <style>
        .main-btn {
            background: -webkit-gradient(linear, left top, right top, from(#c90075), color-stop(50%, #de00ac), to(#c90075));
            background: linear-gradient(to right, green 0%, green 50%, green 100%);
        }
    </style>
</head>
<body>
