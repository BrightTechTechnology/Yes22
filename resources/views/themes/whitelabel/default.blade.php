@extends('themes.global')

@section('head')
    <title>{{$title}}</title>
@stop

@section('body')

    {{-- default code of the whitelabel theme --}}

    @include('themes.whitelabel.partials.languageSelector')

    @yield('content')

@stop