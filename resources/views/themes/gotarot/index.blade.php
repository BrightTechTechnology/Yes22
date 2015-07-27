@extends('themes.gotarot.default')

@section('head-additions')
    <meta name="hide_nav" content="true">
@stop

@section('content')
    @foreach($pages as $page)
        @include('themes.gotarot.pages.'.$page)
    @endforeach
@stop