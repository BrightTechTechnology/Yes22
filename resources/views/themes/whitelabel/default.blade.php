@extends('themes.global')

@section('head')
    <title>{{$title or 'Welcome!'}}</title>
    <script src="{{ asset('/js/whitelabel/ja.js') }}"></script>
    @yield('head-additions')
@stop

@section('body')

    {{-- default code of the whitelabel theme --}}

    <div class="row pad-md">
        @include('themes.whitelabel.partials.loginLink')
        @include('themes.whitelabel.partials.languageSelector')
    </div>

    @yield('content')

@stop