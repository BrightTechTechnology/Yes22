@extends('theme.global')

@section('head')
    <title>{{$title or 'Welcome!'}}</title>
    <script src="{{ asset('/js/whitelabel/ga.js') }}"></script>
    @yield('head-additions')
@stop

@section('body')

    {{-- default code of the whitelabel theme --}}

    <div class="row pad-md">
        @include('theme.whitelabel.partials.loginLink')
        @include('theme.whitelabel.partials.languageSelector')
    </div>

    @yield('content')

@stop