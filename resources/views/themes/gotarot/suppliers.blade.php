@extends('themes.gotarot.default')

@include('themes.gotarot.pages.menu)
@section('content')
    @foreach($pages['Suppliers'] as $supplier)
        {{$supplier['officialname']}}
    @endforeach
@stop