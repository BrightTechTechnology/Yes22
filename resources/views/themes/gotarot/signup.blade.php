@extends('themes.gotarot.default')

@section('content')
    @include('themes.gotarot.partials.splashPage')
    @include('themes.gotarot.partials.menuPage')

    @include('themes.gotarot.about')
    @include('themes.gotarot.services')
    @include('themes.gotarot.blog')
    @include('themes.gotarot.portfolio')
    @include('themes.gotarot.gallery')
    @include('themes.gotarot.videos')
    @include('themes.gotarot.clients')
    @include('themes.gotarot.twitter')
    @include('themes.gotarot.contact')
@stop