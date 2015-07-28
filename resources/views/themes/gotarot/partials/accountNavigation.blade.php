<div class="text-left">
    @if ( ! \Auth::check())
        <a style="cursor:pointer" data-toggle="modal" data-target="#registerModal" class="btn btn-default btn-xs" href="/auth/login">Register</a>
        <a style="cursor:pointer" data-toggle="modal" data-target="#loginModal" class="btn btn-default btn-xs" href="/auth/login">Login</a>
        @include('themes/gotarot/partials/registerModal')
        @include('themes/gotarot/partials/loginModal')
    @else

        <a class="btn btn-default btn-xs" href="/auth/logout">Logout</a>
        <a
            @if ($blade == "suppliers") style="font-weight:900; background-color: #002F31; color: white;" @endif
            class="btn btn-default btn-xs" href="/suppliers">
            Suppliers
        </a>
        <a
            @if ($blade == "billing") style="font-weight:900; background-color: #002F31; color: white;" @endif
            class="btn btn-default btn-xs" href="/billing">
            Billing
        </a>
    @endif
</div>
