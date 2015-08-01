@extends('theme.whitelabel.default')

@section('content')
    <div class="row">
        <h3>Articles</h3>
        @foreach ($articles as $article)
            <a href="/article/{{$article['id']}}">
                <h4>{{$article['title']}} by {{$article->user()->first()->name}}</h4>
                {!! str_limit($article['content'], $limit = 100, $end = '...') !!}
            </a>
        @endforeach
    </div>
@stop