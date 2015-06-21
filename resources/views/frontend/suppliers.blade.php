<?php
	$title = 'Here are our suppliers';
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
			<ul>
				@foreach ($suppliers as $supplier)
					<li><a href="{{\URL::to('/suppliers')}}/{{$supplier->id}}">{{$supplier->name}}</a></li>
				@endforeach
			</ul>
		</div>
	</div>
@stop
