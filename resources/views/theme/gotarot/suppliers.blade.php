@extends('theme.gotarot.default')

@section('content')
    @include('theme.gotarot.pages.menu')
    @foreach($pages as $description => $page)
        @if ($description == 'Suppliers')
            @foreach($page as $supplier)
                @include('theme.gotarot.pages.supplier', ['supplier' => $supplier])
            @endforeach
        @endif
    @endforeach
@stop


