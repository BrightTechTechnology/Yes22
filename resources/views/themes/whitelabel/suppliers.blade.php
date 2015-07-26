@extends('themes.whitelabel.default')

@section('content')
    <div class="row">
        <h3>Suppliers</h3>
        <ul>
            @foreach ($suppliers as $supplier)
                    <li><a href="{{\URL::to('/')}}/{{$supplier['name']}}">{{$supplier['name']}}</a></li>
            @endforeach
        </ul>
    </div>
@stop
