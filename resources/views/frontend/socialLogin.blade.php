<?php
$title = 'Welcome to the Place of Answers';
//WHAT you will get
$button = 'Get your first free call';
?>

@extends('frontend/default')

@section('js-preditions')
    <script src="/js/fb-login.js"></script>
@stop

@section('content')
    <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
    </fb:login-button>

    <div id="status">
    </div>
@stop