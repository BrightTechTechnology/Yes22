<?php
	$title = 'This is '.$supplier['officialname'];
	if ($supplier['officialname'] == ''){
		$title = 'This is '.$supplier['username'];
	}
?>

@extends('frontend/default')

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
    <script>
        $(document).ready(function(){

            var activated = {{ $ratingDisplay['activated'] }};
            var scoreInteger = {{ $ratingDisplay['scoreInteger'] }};
            var item = '{{ $ratingDisplay['item'] }}';

            // fill fix div
            for (var i = 1; i < 6; i++) {
                if(scoreInteger < i) {
                    $('#rating-wrapper-fix').prepend('☆');
                } else {
                    $('#rating-wrapper-fix').prepend('★');
                }
            }

            if (activated === true) {
                $('#rating-wrapper-fix').on('mouseenter', function(){
                    $('#rating-wrapper-fix').hide();
                    $('#rating-wrapper-hover').show();
                    $('#rating-wrapper').css('cursor', 'pointer');
                });
            }

            $('#rating1').on('mouseover', function() {
                $('#rating1').html('★');
                $('#rating2').html('★');
                $('#rating3').html('★');
                $('#rating4').html('★');
                $('#rating5').html('★');
            });
            $('#rating1').on('click', function() {
                $('#rating-wrapper').html('★★★★★');
                scoreClick = 5;
            });

            $('#rating2').on('mouseover', function() {
                $('#rating1').html('☆');
                $('#rating2').html('★');
                $('#rating3').html('★');
                $('#rating4').html('★');
                $('#rating5').html('★');
            });
            $('#rating2').on('click', function() {
                $('#rating-wrapper').html('☆★★★★');
                scoreClick = 4;
            });

            $('#rating3').on('mouseover', function() {
                $('#rating1').html('☆');
                $('#rating2').html('☆');
                $('#rating3').html('★');
                $('#rating4').html('★');
                $('#rating5').html('★');
            });
            $('#rating3').on('click', function() {
                $('#rating-wrapper').html('☆☆★★★');
                scoreClick = 3;
            });

            $('#rating4').on('mouseover', function() {
                $('#rating1').html('☆');
                $('#rating2').html('☆');
                $('#rating3').html('☆');
                $('#rating4').html('★');
                $('#rating5').html('★');
            });
            $('#rating4').on('click', function() {
                $('#rating-wrapper').html('☆☆☆★★');
                scoreClick = 2;
            });

            $('#rating5').on('mouseover', function() {
                $('#rating1').html('☆');
                $('#rating2').html('☆');
                $('#rating3').html('☆');
                $('#rating4').html('☆');
                $('#rating5').html('★');
            });
            $('#rating5').on('click', function() {
                $('#rating-wrapper').html('☆☆☆☆★');
                scoreClick = 1;
            });

            $('#rating-wrapper-hover').on('mouseout', function(){
                $('#rating-wrapper-hover').hide();
                $('#rating-wrapper-fix').show();
            });

            $('#rating-wrapper').on('click', function() {
                $(this).addClass('animated flash');
                $.ajax({
                    type: 'POST',
                    url: '{{\URL::action('RatingController@store')}}',
                    data: {
                        user: '{{$ratingDisplay['user_id']}}',
                        score: scoreClick,
                        item: '{{$ratingDisplay['item']}}',
                        item_id: {{$ratingDisplay['item_id']}},
                        _token: '{{csrf_token()}}'
                    }
                });
            });
        });
    </script>
@stop