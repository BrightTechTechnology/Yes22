<div class="col-xs-6 text-left">
    @if ( ! \Auth::check())
        <a style="cursor:pointer" data-toggle="modal" data-target="#myModal" class="btn btn-default btn-xs" href="/auth/login">Register | Login</a>
        @include('themes/gotarot/partials/loginModal')
    @endif
</div>