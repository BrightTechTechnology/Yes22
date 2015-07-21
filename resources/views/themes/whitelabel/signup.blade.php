@extends('themes.whitelabel.default')

@section('content')

    <div class="row bg-dark-grey text-white text-left pad-lg">
        <h1 class="text-turquoise">{{$headline}}</h1>
        <h3>{{$subHeadline}}</h3>
        <h4>{{$subSubHeadline}}</h4>
        <a data-toggle="modal" data-target="#myModal" style="cursor:pointer" class="btn btn-lg btn-primary">{{$callToAction}}</a>
    </div>

    <div class="row pad-md">
        <img src="{{ $productImageUrl }}" class="img-responsive float-right pad-md animated infinite pulse" style="max-width: 50%;" />
        <p class="pad-md">
            {{$articleText}}
        </p>
    </div>

    <div class="row pad-lg">
        @include('themes.whitelabel.partials.slider')
    </div>

    <div class="row pad-lg">
        @include('themes.whitelabel.partials.testimonials')
    </div>

    <div class="row text-center">
        <a data-toggle="modal" data-target="#myModal" style="cursor:pointer" class="btn btn-lg btn-primary">{{$callToAction}}</a>
    </div>

    <div class="row text-centesignur">
        <h4><a href="/suppliers">See our suppliers</a></h4>
        <h4><a href="/articles">See our articles</a></h4>
    </div>

    @include('themes.whitelabel.partials.signupModal')

@stop