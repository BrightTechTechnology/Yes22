@extends('themes.global')

@section('head')
    <title>{{$title or 'Welcome!'}}</title>
@stop

@section('body')

    {{-- default code of the whitelabel theme --}}

    <div class="row pad-md">
        @include('themes.whitelabel.partials.loginLink')
        @include('themes.whitelabel.partials.languageSelector')
    </div>

    @yield('content')

@stop