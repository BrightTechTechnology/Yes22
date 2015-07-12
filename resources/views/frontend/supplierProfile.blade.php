<?php
	$title = 'This is '.$supplier['officialname'];
	if ($supplier['officialname'] == ''){
		$title = 'This is '.$supplier['username'];
	}
?>

@extends('frontend/default')

@section('head-additions')
    <meta name="ratingActivated" content="{{ $ratingDisplay['activated'] }}">
    <meta name="ratingUserId" content="{{ $ratingDisplay['userId'] }}">
    <meta name="ratingItem" content="{{ $ratingDisplay['item'] }}">
    <meta name="ratingItemId" content="{{ $ratingDisplay['itemId'] }}">
    <meta name="ratingScoreInteger" content="{{ $ratingDisplay['scoreInteger'] }}">
    <meta name="ratingUrl" content="{{ \URL::action('RatingController@store') }}">
    <meta name="ratingCsrf" content="{{ csrf_token() }}">
@stop

@section('js-preditions')
    <script src="/js/fb-init.js"></script>
@stop

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="well text-center">
				<div style="float: left">
                    {{$title}}
                </div>
                @include('frontend/partials/rating')
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

@section('js-additions')
    <script src="/js/disqus.js"></script>
    <script src="js/rating.js"></script>
@stop