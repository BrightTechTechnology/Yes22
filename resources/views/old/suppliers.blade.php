@extends('frontend/default')

@section('title')
    Our Supplier list
@stop

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="well text-center">
                Our Supplier list
			</div>
		</div>
		<div class="row">
			<h3>Suppliers</h3>
			<ul>
				@foreach ($suppliers as $supplier)
					<li><a href="{{\URL::to('/')}}/{{$supplier->username}}">{{$supplier->officialname}}</a></li>
				@endforeach
			</ul>
		</div>
		<div class="row">
			<h3>Articles</h3>

			{{-- Article Listing --}}
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<thead>
					@foreach ($articles as $article)
						<tr>
							<td>
								<h3>{{$article['title']}} by {{$article->user()->first()->officialname}} </h3>
								{!! $article['content'] !!}
							</td>
						</tr>
					@endforeach
				</table>
			</div>

		</div>
	</div>
@stop
