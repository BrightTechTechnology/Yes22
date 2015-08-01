@extends('theme.whitelabel.default')

@section('content')


    @if (isset($confirmation))
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        {{ $confirmation }}
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if (Session::has('flash_message'))
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-error">
                    <div class="panel-heading">
                        {{ Session::get('flash_message') }}
                    </div>
                </div>
            </div>
        </div>
    @endif

    This is the profile page<BR>
    <a href="{{url('auth/logout')}}">Logout</a><BR>
    <a href="{{url('profile/billing')}}">Bill me</a>
@stop