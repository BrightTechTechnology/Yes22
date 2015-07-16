@extends('frontend/default')

@section('title')
    Log in socially
@stop

@section('js-preditions')
    <script src="/js/fb-login.js"></script>
@stop

@section('content')
    <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
    </fb:login-button>

    <div id="status">
    </div>
@stop