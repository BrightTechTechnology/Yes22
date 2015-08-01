@include('theme.gotarot.partials.contentPageWrapperTop')
    <h2 class="page_title">{{$supplier['name']}}</h2>
    <div class="image_single radius4">
        <img src="/img/upload/supplier/supplier{{$supplier['id']}}.jpg" border="0" style="width:100%" class="img img-responsive">
    </div>
    <h3>{{$supplier['profile']}}</h3>
@include('theme.gotarot.partials.contentPageWrapperBottom')
