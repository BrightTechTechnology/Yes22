<?php
	$title = 'Welcome to the Place of Answers';
    //WHAT you will get
    $button = 'Get your first free call';
?>

@extends('frontend/default')

@section('content')

    <div class="row bg-dark-grey text-white text-left pad-lg">
        {{--( WHAT) (WHY) (HOW) --}}
        <h1 class="text-turquoise">Interesting Fortune Telling</h1>
        <h3>Get answers and call top-rated psychics.</h3>
        <a data-toggle="modal" data-target="#myModal" style="cursor:pointer" class="btn btn-lg btn-primary">{{$button}}</a>
    </div>
    <div class="row pad-md">
        <img src="{{\URL::asset('img/product-thumb.png')}}" class="img-responsive float-right pad-md" style="max-width: 50%;" />
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
        <a data-toggle="modal" data-target="#myModal" style="cursor:pointer" class="btn btn-lg btn-primary">{{$button}}</a>
    </div>

    <div class="row text-center">
        <a href="{{\URL::action('FrontendController@index')}}">See our suppliers</a>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    @include('frontend/partials/signupForm')
                    @yield('signupForm')
                </div>
            </div>
        </div>
    </div>
@stop

@section('js-additions')
<!-- slider -->
    <script type="text/javascript">
        $('#slidercontent').animate({'opacity': '1'}, 2000);

        function scroll (){
            $('#slidercontent').animate({'margin-left': '-1000'}, 8000, 'linear');
            $('#slidercontent').animate({'margin-left': '0'}, 1, function(){
                scroll();
            });
        }
        scroll();
    </script>
@stop