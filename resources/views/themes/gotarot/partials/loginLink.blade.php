<div class="col-xs-6 text-left">
    @if (\Auth::check())
        <a href="/auth/logout">Logout</a>
    @else
        <a href="/auth/login">Login</a>
    @endif
</div>