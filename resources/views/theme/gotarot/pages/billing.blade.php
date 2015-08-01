@section('head-additions')
    <?php
    if (env('APP_ENV') == 'local') {
        $publishableKey = env('STRIPE_TEST_PUBLISHABLE');
    } else {
        $publishableKey = env('STRIPE_LIVE_PUBLISHABLE');
    }
    ?>
    <meta name="publishable-key" content="{{ $publishableKey }}">
@stop

@include('theme.gotarot.partials.contentPageWrapperTop')

<div class="container-fluid">
    @if (\Auth::user()->billing_id)
        <div class="row form-group">
            <form action="{{ \URL::current() }}" method="POST" accept-charset="UTF-8" id="billing-form">
                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                <div class="row">
                    <input type="submit" value="Bill me again!" class="form_submit radius4 green green_borderbottom">
                </div>
            </form>
        </div>
    @else
        @include ('themes/whitelabel/partials/creditCardForm')
        @yield ('creditCardForm')
    @endif
</div>

@if (!\Auth::user()->billing_id)
    <!-- Stripe billing JS -->
    <script src="https://js.stripe.com/v2/"></script>
    <script src="{{ asset('/js/global/billing.js') }}"></script>
@endif

@include('theme.gotarot.partials.contentPageWrapperBottom')