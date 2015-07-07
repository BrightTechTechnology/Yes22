<?php

	$title = 'This is '.$supplier['officialname'];

	if ($supplier['officialname'] == ''){
		$title = 'This is '.$supplier['username'];
	}

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
			{!!$supplier['profile']!!}
		</div>
	</div>
@stop
