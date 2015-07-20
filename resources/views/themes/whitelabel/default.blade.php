@extends('themes.global')

@section('head')
    <title>{{$title}}</title>
@stop

@section('body')

    {{-- default code of the whitelabel theme --}}

    <div class="row pad-md text-right">
        @include('themes.whitelabel.partials.loginLink')
        @include('themes.whitelabel.partials.languageSelector')
    </div>

    @yield('content')

@stop