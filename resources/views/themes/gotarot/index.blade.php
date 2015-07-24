@extends('themes.gotarot.default')

@section('content')
    @foreach($pages as $page)
        @include('themes.gotarot.pages.'.$page)
    @endforeach
@stop