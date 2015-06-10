@section('creditCardForm')
	<div class="row form-group">
		<h1>Register credit card</h1>
		<form action="{{ \URL::current() }}" method="POST" accept-charset="UTF-8" id="billing-form">
			<input name="_token" type="hidden" value="{{ csrf_token() }}">
			<div class="row">
				<span>Card Number</span>
				<input type="text" data-stripe="number">
			</div>
			<div class="row">
				<span>CVC Number</span>
				<input type="text" data-stripe="cvc">
			</div>
			<div class="row">
				<span>Expiration Date</span>
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
				<input type="submit" value="Bill me!">
			</div>
			<div class="payment-errors">
			</div>
		</form>
	</div>
@stop