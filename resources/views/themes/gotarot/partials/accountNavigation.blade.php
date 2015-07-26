<div class="text-left">
    @if ( ! \Auth::check())
        <a style="cursor:pointer" data-toggle="modal" data-target="#myModal" class="btn btn-default btn-xs" href="/auth/login">Register | Login</a>
        @include('themes/gotarot/partials/loginModal')
    @else
        <a class="btn btn-default btn-xs" href="#">Suppliers</a>
        <a class="btn btn-default btn-xs" href="#">News</a>
        <a class="btn btn-default btn-xs" href="#">Messages</a>
        <a class="btn btn-default btn-xs" href="#">Payment</a>
    @endif
</div>