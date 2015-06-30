@extends('supplier/default')

@section('content')
    <div class="row">
        <div class ="container">
            <form method="POST" action="{{ \URL::current() }}" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="text" id="title" name="title" class="form-control" placeholder="Title of Article" value="{{$article['title']}}" maxlength="50"><BR/>
                <textarea id="content" name="content" rows="15">{{$article['content']}}</textarea>
                <div class="text-right">
                    <button class="btn-info">Edit article</button>
                </div>
            </form>
        </div>
    </div>
@stop

@section('js-additions')
    <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
    <script>tinymce.init({
            selector:'textarea',
            browser_spellcheck : true,
        });</script>
@stop