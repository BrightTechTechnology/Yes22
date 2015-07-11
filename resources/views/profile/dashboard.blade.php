<?php
$title = 'Welcome to the Place of Answers';
//WHAT you will get
$button = 'Get your first free call';
?>

@extends('frontend/default')

@section('content')
    This is the profile page<BR>
    <a href="{{url('auth/logout')}}">Logout</a><BR>
    <a href="{{action('BillingController@showForm')}}">Bill me</a>
@stop

@section('js-additions')

@stop