@section('signupForm')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>{{ trans('signup.following_errors') }}</strong><br><br>
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
                @if (isset($socialLogin))
                    <div class="info alert-info">
                        <strong>{{ trans('signup.enter_password') }}</strong><br><br>
                    </div>
                @endif
                <div class="row">
                    <a href="{{action('Auth\AuthController@redirectToFacebook')}}" class="btn btn-info mar-md">{{ trans('signup.login_via_fb') }}</a>
                </div>
				<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="form-group">
						<div class="col-xs-12">
							<input placeholder="Name" type="text" class="form-control" name="username" value="{{ old('name') }}">
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-12">
							<input placeholder="E-Mail" type="email" class="form-control" name="email" value="{{ old('email') }}">
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-12">
							<input placeholder="Password" type="password" class="form-control" name="password">
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-12">
								<input placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-primary">
								{{$cta}}
							</button>
						</div>
					</div>
				</form>
		</div>
	</div>
</div>
@stop