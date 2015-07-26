@extends('themes.whitelabel.default')

@section('head-additions')
    <script src="{{ asset('/js/global/rating.min.js') }}"></script>
    <script src="{{ asset('/js/global/disqus.min.js') }}"></script>
    <script src="{{ asset('/js/whitelabel/fb-init.min.js') }}"></script>

    <meta name="fb_api_key" content="{{env('FB_APP_ID')}}">
    <meta name="ratingActivated" content="{{ $ratingDisplay['activated'] }}">
    <meta name="ratingUserId" content="{{ $ratingDisplay['userId'] }}">
    <meta name="ratingItem" content="{{ $ratingDisplay['item'] }}">
    <meta name="ratingItemId" content="{{ $ratingDisplay['itemId'] }}">
    <meta name="ratingScoreInteger" content="{{ $ratingDisplay['scoreInteger'] }}">
    <meta name="ratingUrl" content="{{ \URL::action('AjaxController@rating') }}">
    <meta name="ratingCsrf" content="{{ csrf_token() }}">
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="well text-center">
                <div style="float: left">
                    This is {{ $supplier['name']}}'s profile
                </div>
                <abbr title="Average Rating: {{$ratingDisplay['scorePoint']}}, Votes: {{$ratingDisplay['scoreVotes']}}">
                    <div id="rating-wrapper" style="float:left; color: orange;">
                        <div id="rating-wrapper-fix" style="float:left"></div>
                        <div id="rating-wrapper-hover" style="display: none; float:left">
                            <div id="rating1" style="float:left">★</div>
                            <div id="rating2" style="float:left">★</div>
                            <div id="rating3" style="float:left">★</div>
                            <div id="rating4" style="float:left">★</div>
                            <div id="rating5" style="float:left">★</div>
                        </div>
                    </div>
                </abbr>
            </div>
        </div>
        <div class="row">
            {!!$supplier['profile']!!}
        </div>
        <div class="row">
            <div class="fb-like" data-share="true" data-width="450" data-show-faces="true">
            </div>
        </div>
        <div class="row">
            <div id="disqus_thread">
            </div>
        </div>
    </div>
@stop