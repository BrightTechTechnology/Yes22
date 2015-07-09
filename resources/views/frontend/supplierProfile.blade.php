<?php
	$title = 'This is '.$supplier['officialname'];
	if ($supplier['officialname'] == ''){
		$title = 'This is '.$supplier['username'];
	}
?>

@extends('frontend/default')

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
	</div>
@stop

@section('js-additions')
<script>
    $(document).ready(function(){

        @if (\Input::has('rating') == 'true')
            var startRating = {{\Input::get('rating')}};
        @else
            var startRating = 5;
        @endif

        @if (\Input::get('ratingactive') == 'true')
            var activated = true;
        @endif

        // fill fix div
        for (var i = 1; i < 6; i++) {
            if(startRating < i) {
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

        $('#rating-wrapper-hover').on('mouseout', function(){
            $('#rating-wrapper-hover').hide();
            $('#rating-wrapper-fix').show();
        });

        $('#rating-wrapper').on('click', function() {
            $(this).addClass('animated flash');
        });

        $('#rating1').on('mouseover', function() {
            $('#rating1').html('★');
            $('#rating2').html('★');
            $('#rating3').html('★');
            $('#rating4').html('★');
            $('#rating5').html('★');
        });
        $('#rating1').on('click', function() {
            $('#rating-wrapper').html('★★★★★');
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
        });
    });
</script>
@stop