@extends('supplier/default')

@section('content')
	<div class="row">
		<div class ="container">
			<a href="{{ \Request::root().'/'.$username }}" class="btn btn-info" target="_blank">View profile</a><BR/><BR/>
			<form method="POST" action="{{ \URL::current() }}" >
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<label for="officialname">Your name to be published</label>
				<input type="text" id="officialname" name="officialname" class="form-control" placeholder="Name to be published" value="{{ $officialname or ''}}" maxlength="50"><BR/>
				<label for="officialname">Your profile</label>
				<textarea id="profile" name="profile" rows="15">{{ $profile or ''}}</textarea>
				<div class="text-right">
					<button class="btn-success">Save profile</button>
				</div>
			</form>
		</div>
	</div>
@stop

@section('js-additions')
	<script src="{{ asset('/js/global/tinymce/tinymce.min.js') }}"></script>
	<script type="text/javascript">
		tinymce.init({
			selector: "textarea",
			plugins: [
				"advlist autolink lists link image charmap print preview anchor",
				"searchreplace visualblocks code fullscreen",
				"insertdatetime media table contextmenu paste jbimages"
			],
			toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
			relative_urls: false
		});
	</script>
@stop