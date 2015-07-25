@include('themes.gotarot.partials.contentPageWrapperTop')
<div class="row">
    <div class="col-md-6">
        <div class="image_single radius4">
            <img src="http://www.gotarot.com.hk/welcome3/bg2.jpg" border="0">
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
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
            @else
                <div class="row">
                    <a href="{{action('Auth\AuthController@redirectToFacebook')}}" class="btn btn-info btn-block">{{ trans('signup.login_via_fb') }}</a>
                </div>
            @endif
            <form class="form-horizontal" role="form" action="{{ url('/auth/register/') }}" method="POST" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="theme" value="whitelabel">
                <div class="form-group">
                    <div class="col-xs-12">
                        <label for="username">Username</label>
                        <input placeholder="Name" type="text" class="form-control" name="username" value="{{ old('name') }}{{$user['username'] or ''}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label for="email">E-Mail</label>
                        <input placeholder="E-Mail" type="email" class="form-control" name="email" value="{{ old('email') }}{{$user['email'] or ''}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label for="password">Password</label>
                        <input placeholder="Password" type="password" class="form-control" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label for="password_confirmation">Password Confirmation</label>
                        <input placeholder="Password Confirmation" type="password" class="form-control" name="password_confirmation">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-success btn-block">
                            Get Now!
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@if (count($errors) > 0))
    <!-- jump to signup page directly -->
    <script type="text/javascript">
        $(window).load(function(){
            swiperParent.swipeTo(1);
        });
    </script>
@endif

@include('themes.gotarot.partials.contentPageWrapperBottom')
