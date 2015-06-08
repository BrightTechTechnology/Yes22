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
			{{-- @include('frontend/partials/billingform') --}}
			{{-- @yield('billingform') --}}
		</div>
	</div>

	<!-- Stripe billing JS -->
	<script src="https://js.stripe.com/v2/"></script>
@stop
