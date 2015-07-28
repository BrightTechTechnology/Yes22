@section('creditCardForm')
	<div class="row form-group">
		<h1>Register credit card</h1>
		<form action="{{ \URL::current() }}" method="POST" accept-charset="UTF-8" id="billing-form" class="cmxform">
			<input name="_token" type="hidden" value="{{ csrf_token() }}">
			<div class="row">
				<span>Card Number</span>
				<input type="text" data-stripe="number" class="form_input radius4 required">
			</div>
			<div class="row">
				<span>CVC Number</span>
				<input type="text" data-stripe="cvc" class="form_input radius4 required">
			</div>
			<div class="row">
				<span>Expiration Date</span><BR>
				<select data-stripe="exp-month">
					<option value="1">January</option>
					<option value="2">Febrary</option>
					<option value="3">March</option>
					<option value="4">April</option>
					<option value="5">May</option>
					<option value="6">June</option>
					<option value="7">July</option>
					<option value="8">August</option>
					<option value="9">September</option>
					<option value="10">October</option>
					<option value="11">November</option>
					<option value="12">December</option>
				</select>
				<select data-stripe="exp-year">
					@for ($i=0; $i<10; $i++)
						<option value="{{date('Y')+$i}}">{{date('Y')+$i}}</option>
					@endfor
				</select>
			</div>
			<div class="row">
				<BR><BR>
                <input type="submit" value="Bill me!" class="form_submit radius4 green green_borderbottom">
			</div>
			<div class="payment-errors">
			</div>
		</form>
	</div>

    <h2 class="page_title">Get in touch</h2>
    <h2 id="Note"></h2>
    <div class="form">
        <form class="cmxform" id="CommentForm" method="post" action="" novalidate="novalidate">
            <label>Name:</label>
            <input type="text" name="ContactName" id="ContactName" value="" class="form_input radius4 required">
            <label>Email:</label>
            <input type="text" name="ContactEmail" id="ContactEmail" value="" class="form_input radius4 required email">
            <label>Message:</label>
            <textarea name="ContactComment" id="ContactComment" class="form_textarea radius4 textarea required" rows="" cols=""></textarea>
            <input type="submit" name="submit" class="form_submit radius4 green green_borderbottom" id="submit" value="Send">
            <input class="" type="hidden" name="to" value="youremaill@yourwebsiteee.com">
            <input class="" type="hidden" name="subject" value="Contacf form message">
            <label id="loader" style="display:none;">
                <img src="{{ asset('/img/gotarot/loader.gif') }}" alt="Loading..." id="LoadingGraphic">
            </label>
        </form>
    </div>

@stop