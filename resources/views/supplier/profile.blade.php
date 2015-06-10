@extends('supplier/default')

@section('content')
	<div class="row">
		<div class ="container">
			<form method="POST" action="{{ \URL::current() }}" >
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<textarea id="profile" name="profile" rows="15">{{ \Auth::user()->profile }}</textarea>
				<div class="text-right">
					<button class="btn-info">Save profile</button>
				</div>
			</form>
		</div>
	</div>
@stop

@section('js-additions')
	<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
	<script>tinymce.init({
		selector:'textarea',
		browser_spellcheck : true,


		});</script>
@stop