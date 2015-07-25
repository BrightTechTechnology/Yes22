<div class="col-xs-6 text-left">
    @if ( ! \Auth::check())
        <a class="btn btn-default btn-xs" href="/auth/login">Login</a>
    @endif
</div>