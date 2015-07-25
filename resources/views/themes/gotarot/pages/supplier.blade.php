@include('themes.gotarot.partials.contentPageWrapperTop')
<h2 class="page_title">{{$supplier['officialname']}}</h2>
<ul class="photo_gallery_13">
    <li>
        <a rel="gallery-3" href="/img/upload/supplier/supplier{{$supplier['id']}}.jpg" title="{{$supplier['officialname']}}" class="swipebox">
            <img src="/img/upload/supplier/supplier{{$supplier['id']}}.jpg" class="img-responsive">
        </a>
    </li>
</ul>
@include('themes.gotarot.partials.contentPageWrapperBottom')
