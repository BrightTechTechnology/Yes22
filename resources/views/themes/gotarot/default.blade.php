@extends('themes.global')

@section('head')
    <!-- mobile settings -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- mobile icons -->
    <link rel="apple-touch-icon" href="{{ asset('/img/gotarot/apple-touch-iphone.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="!!!" />
    <link rel="apple-touch-icon" sizes="114x114" href="!!!" />
    <link rel="apple-touch-icon" sizes="144x144" href="!!!" />
    <link rel="apple-touch-startup-image" href="!!!" 320x460.png">

    <!-- SEO -->
    <meta name="author" content="!!!">
    <meta name="description" content="!!!">
    <meta name="keywords" content="!!!">

    <!-- CSS -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/gotarot/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/gotarot/splash.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/gotarot/idangerous.swiper.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/gotarot/swipebox.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/gotarot/custom.css') }}" >

    <!-- JS -->
    <script src="{{ asset('/js/gotarot/jquery.validate.min.js') }}"></script>

    @yield('head-additions')
@stop

@section('body')

    {{-- default code of the gotarot theme --}}

    <div class="row pad-md">
        @include('themes.gotarot.partials.loginLink')
        @include('themes.gotarot.partials.languageSelector')
    </div>

    <!-- top menu -->
    <div id="header">
        <div class="gohomemenu radius20">
            <a onclick="swiperParent.swipeTo(1);">
                <img src="{{ asset('/img/gotarot/menu.png') }}"  >
            </a>
        </div>
        <div class="gomenu radius20">
            <a onclick="swiperParent.swipeTo(10);">
                <img src="{{ asset('/img/gotarot/contact.png') }}"  >
            </a>
        </div>
    </div>

    <div class="swiper-container swiper-parent">
        <!-- width is # of total pages * 800 -->
        <div class="swiper-wrapper" style="width: 8800px; height: 511px;">

            @yield('content')

        </div>
        <!--End of swiper wrapper -->


        <div class="pagination" style="visibility:hidden">
            <span class="swiper-pagination-switch swiper-visible-switch swiper-active-switch"></span>
            <span class="swiper-pagination-switch"></span>
            <span class="swiper-pagination-switch"></span>
            <span class="swiper-pagination-switch"></span>
            <span class="swiper-pagination-switch"></span>
            <span class="swiper-pagination-switch"></span>
            <span class="swiper-pagination-switch"></span>
            <span class="swiper-pagination-switch"></span>
            <span class="swiper-pagination-switch"></span>
            <span class="swiper-pagination-switch"></span>
            <span class="swiper-pagination-switch"></span>
        </div>
    </div>
    <!--End of swiper container -->

    <!-- JS libraries -->
    <script type="text/javascript" src="{{ asset('/js/gotarot/jquery.swipebox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/gotarot/idangerous.swiper-2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/gotarot/idangerous.swiper.scrollbar-2.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/gotarot/jquery.tabify.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/gotarot/jquery.fitvids.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/gotarot/code.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/gotarot/load.js') }}"></script>

@stop