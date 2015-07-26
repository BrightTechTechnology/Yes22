@extends('supplier/default')

@section('content')
	<div class="row">
		<div class ="container">
			<a href="{{ \Request::root().'/'.$name }}" class="btn btn-info" target="_blank">View profile</a><BR/><BR/>
			<form method="POST" enctype="multipart/form-data" action="{{ \URL::current() }}" >
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<label for="name">Your name to be published</label>
				<input type="text" id="name" name="name" class="form-control" placeholder="Name to be published" value="{{ $name or ''}}" maxlength="50"><BR/>

                <img class="img-responsive" style="max-width: 300px" src="/img/upload/supplier/supplier{{$id}}.jpg?{{rand(1,32000)}}">
                <label for="image">Change profile picture (picture will be cut to square shape)</label>
                <input id="image" name="image" type="file" />

                <BR><label for="profile">Your profile</label>
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