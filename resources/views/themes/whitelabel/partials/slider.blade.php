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
<script type="text/javascript">
    $('#slidercontent').css({'opacity': '1'});
    function scroll (){
        $('#slidercontent').animate({'margin-left': '-1000'}, 15000, 'linear');
        $('#slidercontent').animate({'margin-left': '0'}, 1, function(){
            scroll();
        });
    }
    scroll();
</script>