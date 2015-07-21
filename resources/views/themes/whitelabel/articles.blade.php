@extends('themes.whitelabel.default')

@section('content')
    <div class="row">
        <h3>Articles</h3>
        @foreach ($articles as $article)
            <h4>{{$article['title']}} by {{$article->user()->first()->officialname}} </h4>
            {!! $article['content'] !!}
        @endforeach
    </div>
@stop