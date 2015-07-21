@extends('themes.whitelabel.default')

@section('content')
    <div class="row">
        <h3>{{$article['title']}} by {{$article->user()->first()->officialname}}</h3>
            {!! $article['content'] !!}
    </div>
@stop