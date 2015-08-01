@extends('theme.gotarot.default')

@section('content')
    @foreach($pages as $page)
        @include('theme.gotarot.pages.'.$page)
    @endforeach
@stop