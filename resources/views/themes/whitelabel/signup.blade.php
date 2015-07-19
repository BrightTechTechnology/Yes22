@extends('themes.whitelabel.default')

@section('body')

    <div class="row bg-dark-grey text-white text-left pad-lg">
        <h1 class="text-turquoise">{{$headline}}</h1>
        <h3>{{$subHeadline}}</h3>
        <h4>{{$subSubHeadline}}</h4>
        <a data-toggle="modal" data-target="#myModal" style="cursor:pointer" class="btn btn-lg btn-primary">{{$callToAction}}</a>
    </div>

    <div class="row pad-md">
        <p class="pad-md">
            @include('old/partials/languageSelector')
            @yield('languageSelector')
        </p>
    </div>

    <div class="row pad-md">
        <img src="{{\URL::asset('img/product-thumb.png')}}" class="img-responsive float-right pad-md animated infinite pulse" style="max-width: 50%;" />
        <p class="pad-md">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </div>
    <!-- slider -->
    <div class="row pad-lg">
        <div id="sliderwrapper">
            <div id="slidercontent" style="width:2000px;">
                @for ($i=0; $i<2; $i++)
                    <img src="{{\URL::asset('img/slider/cnn.gif')}}" />
                    <img src="{{\URL::asset('img/slider/scmp.png')}}" />
                    <img src="{{\URL::asset('img/slider/tvb.png')}}" />
                    <img src="{{\URL::asset('img/slider/apple-daily.jpg')}}" />
                    <img src="{{\URL::asset('img/slider/atv.png')}}" />
                @endfor
            </div>
        </div>
    </div>
    <div class="row pad-lg">
        <blockquote>
            <p><i>"Great website have recommended to family and friends"</i></p>
            <footer>Shereen A, England, United Kingdom, on {{Carbon\Carbon::today()->formatLocalized('%A %d %B %Y')}}.</footer>
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
            <!-- slider -->
    <script type="text/javascript">
        $('#slidercontent').css({'opacity': '1'});

        function scroll (){
            $('#slidercontent').animate({'margin-left': '-1000'}, 8000, 'linear');
            $('#slidercontent').animate({'margin-left': '0'}, 1, function(){
                scroll();
            });
        }
        scroll();
    </script>

    @if ((count($errors) > 0) || (isset($socialLogin)))
            <!-- show modal if have flash messages -->
    <script type="text/javascript">
        $(window).load(function(){
            $('#myModal').modal('show');
        });
    </script>
    @endif

@stop