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
			<h3>Suppliers</h3>
			<ul>
				@foreach ($suppliers as $supplier)
					<li><a href="{{\URL::to('/suppliers')}}/{{$supplier->id}}">{{$supplier->name}}</a></li>
				@endforeach
			</ul>
		</div>
		<div class="row">
			<h3>Articles</h3>

			{{-- Model Listing --}}
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<thead>
					@foreach ($articles as $article)
						<tr>
							<td>
								<h3>{{$article['title']}} by {{$article->user()->first()->name}} </h3>
								{!! $article['content'] !!}
							</td>
						</tr>
					@endforeach
				</table>
			</div>

		</div>
	</div>
@stop
