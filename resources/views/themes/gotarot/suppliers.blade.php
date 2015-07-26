@extends('themes.gotarot.default')

@section('content')
    @include('themes.gotarot.pages.menu')
    @foreach($pages as $description => $page)
        @if ($description == 'Suppliers')
            @foreach($page as $supplier)
                @include('themes.gotarot.pages.supplier', ['supplier' => $supplier])
            @endforeach
        @endif
    @endforeach
@stop


