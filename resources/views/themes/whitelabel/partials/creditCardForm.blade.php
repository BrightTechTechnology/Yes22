@section('creditCardForm')
	<div class="row form-group form">
		<h1>Register credit card</h1>
        <div class="payment-errors text-center" style="padding: 0 0 3px 0; display: block; font-size: 150%; font-weight: 900; color:red">
        </div>
		<form action="{{ \URL::current() }}" method="POST" accept-charset="UTF-8" id="billing-form" class="cmxform" novalidate="novalidate">
			<input name="_token" type="hidden" value="{{ csrf_token() }}">
			<div class="row">
				<label>Card Number</label>
				<input type="text" data-stripe="number" class="form_input radius4 required">
			</div>
			<div class="row">
				<label>CVC Number</label>
				<input type="text" data-stripe="cvc" class="form_input radius4 required">
			</div>
			<div class="row">
				<label>Expiration Date</label><BR>
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
		</form>
	</div>
@stop