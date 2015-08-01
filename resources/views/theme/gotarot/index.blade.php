@extends('theme.gotarot.default')

@section('head-additions')
    <meta name="hide_nav" content="true">
@stop

@section('content')
    @foreach($pages as $page)
        @include('theme.gotarot.pages.'.$page)
    @endforeach
@stop