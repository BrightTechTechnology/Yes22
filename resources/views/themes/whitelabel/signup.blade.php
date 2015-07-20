@extends('themes.whitelabel.default')

@section('content')

    <div class="row bg-dark-grey text-white text-left pad-lg">
        <h1 class="text-turquoise">{{$headline}}</h1>
        <h3>{{$subHeadline}}</h3>
        <h4>{{$subSubHeadline}}</h4>
        <a data-toggle="modal" data-target="#myModal" style="cursor:pointer" class="btn btn-lg btn-primary">{{$callToAction}}</a>
    </div>

    <div class="row pad-md">
        <img src="{{ $productImageUrl }}" class="img-responsive float-right pad-md animated infinite pulse" style="max-width: 50%;" />
        <p class="pad-md">
            {{$articleText}}
        </p>
    </div>

    @include('themes.whitelabel.partials.slider')

    <div class="row pad-lg">
        <blockquote>
            <p><i>"Great website have recommended to family and friends"</i></p>
            <footer>Shereen A, England, United Kingdom, on .</footer>
            ★★★★★ 5 / 5
        </blockquote>
        <blockquote>
            <p><i>"Good insights. Respectful follow ups!"</i></p>
            <footer>Natalia V, Minnesota, USA, on {{Carbon\Carbon::today()->formatLocalized('%A %d %B %Y')}}.</footer>
            ★★★★☆ 4 / 5
        </blockquote>
        <blockquote>
            <p><i>"Enjoy it a lot! :)"</i></p>
            <footer>Amelia H, Ontario, Canada, on {{Carbon\Carbon::yesterday()->formatLocalized('%A %d %B %Y')}}.</footer>
            ★★★★★ 5 / 5
        </blockquote>
    </div>

    <div class="row text-center">
        <a data-toggle="modal" data-target="#myModal" style="cursor:pointer" class="btn btn-lg btn-primary">{{$callToAction}}</a>
    </div>

    <div class="row text-centesignur">
        <h4><a href="">See our suppliers</a></h4>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                                    <div class="row">
                                        <a href="{{action('Auth\AuthController@redirectToFacebook')}}" class="btn btn-info mar-md">{{ trans('signup.login_via_fb') }}</a>
                                    </div>
                                @endif
                                <form class="form-horizontal" role="form" action="{{ url('/auth/register/') }}" method="POST" >
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

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
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{$callToAction}}
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
    @stop

    @section('js-additions')


    @if ((count($errors) > 0) || (isset($socialLogin)))
            <!-- show modal if have flash messages -->
    <script type="text/javascript">
        $(window).load(function(){
            $('#myModal').modal('show');
        });
    </script>
    @endif

@stop