<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
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
                            @else
                                <div class="row text-center">
                                    <a href="{{action('Auth\AuthController@redirectToFacebook')}}" class="btn btn-info"><i class="fa fa-facebook-official"></i> Login via Facebook</a>
                                </div>
                            @endif
                            <hr>
                            <form class="form-horizontal" role="form" action="{{ url('/auth/login/') }}" method="POST" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="theme" value="whitelabel">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <label for="email">E-Mail</label>
                                            <input placeholder="E-Mail" type="email" class="form-control" name="email" value="{{ old('email') }}{{$user['email'] or ''}}">
                                        </div>
                                        <div class="col-xs-12">
                                            <label for="password">Password</label>
                                            <input placeholder="Password" type="password" class="form-control" name="password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="text-right mar-md">
                                        <button type="submit" class="btn btn-success">
                                            Login
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if ((count($errors) > 0) || (isset($socialLogin)))
        <!-- show modal if have flash messages -->
<script type="text/javascript">
    $(window).load(function(){
        $('#loginModal').modal('show');
    });
</script>
@endif