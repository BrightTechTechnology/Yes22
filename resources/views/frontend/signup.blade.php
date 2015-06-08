<?php
	$title = 'Welcome to the Place of Answers';
?>


@extends('frontend/default')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="well text-center">
				{{$title}}
			</div>
		</div>
		<div class="row">
			@include('frontend/partials/signupForm')
			@yield('signupForm')
		</div>
	</div>
@stop
