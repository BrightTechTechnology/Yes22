// need following variables

var ratingActivated = $('meta[name="ratingActivated"]').attr('content');
var ratingUserId = $('meta[name="ratingUserId"]').attr('content');
var ratingItem = $('meta[name="ratingItem"]').attr('content');
var ratingItemId = $('meta[name="ratingItemId"]').attr('content');
var ratingUrl = $('meta[name="ratingUrl"]').attr('content');
var ratingCsrf = $('meta[name="ratingCsrf"]').attr('content');
var ratingScoreInteger = $('meta[name="ratingScoreInteger"]').attr('content');

// fill fix div
for (var i = 1; i < 6; i++) {
    if(ratingScoreInteger < i) {
        $('#rating-wrapper-fix').prepend('☆');
    } else {
        $('#rating-wrapper-fix').prepend('★');
    }
}

if (ratingActivated === 'true') {
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
        url: ratingUrl,
        data: {
        user: ratingUserId,
            score: scoreClick,
            item: ratingItem,
            item_id: ratingItemId,
        _token: ratingCsrf
        }
    });
});