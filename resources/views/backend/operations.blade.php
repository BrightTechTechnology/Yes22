@extends('backend/default')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading text-center">
					1st time clients - please arrange 1st reading
				</div>
				<table class="table table-striped table-hover">
					<tr class="info">
						<td>Registration time</td>
						<td>Phone</td>
						<td>Name</td>
						<td>Schedule call</td>
						<td>Cannot schedule, comment instead</td>
					</tr>
					<tr>
						<td>2015-05-25 03:30:41</td>
						<td>+852 5340-3976</td>
						<td>羅建君</td>
						<td>
							<form>
								Readers online:<BR>
								<strong>Gary</strong><BR>

								<select name="bookingdate" class="form-control">
									<option value="15-05-24">24/05/15 SUN - Today</option>
									<option value="15-05-25">25/05/15 MON </option>
									<option value="15-05-26">26/05/15 TUE</option>
									<option value="15-05-27">27/05/15 WED</option>
									<option value="15-05-28">28/05/15 THU</option>
									<option value="15-05-29">29/05/15 FRI</option>
									<option value="15-05-30">30/05/15 SAT</option>
								</select>
								<select name="bookingtime" class="form-control">
									<option value="00:01">NOW</option>
									<option value="00:01">00:01</option>
									<option value="00:30">00:30</option>
									<option value="01:00">01:00</option>
									<option value="01:30">01:30</option>
									<option value="02:00">02:00</option>
									<option value="02:30">02:30</option>
									<option value="03:00">03:00</option>
									<option value="03:30">03:30</option>
									<option value="04:00">04:00</option>
									<option value="04:30">04:30</option>
									<option value="05:00">05:00</option>
									<option value="05:30">05:30</option>
									<option value="06:00">06:00</option>
									<option value="06:30">06:30</option>
									<option value="07:00">07:00</option>
									<option value="07:30">07:30</option>
									<option value="08:00">08:00</option>
									<option value="08:30">08:30</option>
									<option value="09:00">09:00</option>
									<option value="09:30">09:30</option>
									<option value="10:00">10:00</option>
									<option value="10:30">10:30</option>
									<option value="11:00">11:00</option>
									<option value="11:30">11:30</option>
									<option value="12:00">12:00</option>
									<option value="12:30">12:30</option>
									<option value="13:00">13:00</option>
									<option value="13:30">13:30</option>
									<option value="14:00">14:00</option>
									<option value="14:30">14:30</option>
									<option value="15:00">15:00</option>
									<option value="15:30">15:30</option>
									<option value="16:00">16:00</option>
									<option value="16:30">16:30</option>
									<option value="17:00">17:00</option>
									<option value="17:30">17:30</option>
									<option value="18:00">18:00</option>
									<option value="18:30">18:30</option>
									<option value="19:00">19:00</option>
									<option value="19:30">19:30</option>
									<option value="20:00">20:00</option>
									<option value="20:30">20:30</option>
									<option value="21:00">21:00</option>
									<option value="21:30">21:30</option>
									<option value="22:00">22:00</option>
									<option value="22:30">22:30</option>
									<option value="23:00">23:00</option>
									<option value="23:30">23:30</option>
								</select>
								<select name="readerready" class="form-control">
									<option value="retention request via VIP line">Ask reader if ready in 5 min</option>
									<option value="reader now ready">Reader is ready now (for sure)</option>
								</select>
							</form>
						</td>
						<td>
							<textarea class="form-control" rows="3" placeholder"Comment here"></textarea>
						</td>
					</tr>
				</table>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading text-center">
					1st time clients - clients scheduled and waiting
				</div>
				<table class="table table-striped table-hover">
					<tr class="info">
						<td>Registration time</td>
						<td>Phone</td>
						<td>Name</td>
						<td>Schedule call</td>
					</tr>
					<tr>
						<td>2015-05-25 03:30:41</td>
						<td>+852 5340-3976</td>
						<td>羅建君</td>
						<td>
							<form>
								Readers online:<BR>
								<strong>Gary</strong><BR>
								Arranged time:<BR>
								<strong>2015-05-25 21:30:00</strong>

								<select name="bookingdate" class="form-control">
									<option value="15-05-24">24/05/15 SUN - Today</option>
									<option value="15-05-25">25/05/15 MON </option>
									<option value="15-05-26">26/05/15 TUE</option>
									<option value="15-05-27">27/05/15 WED</option>
									<option value="15-05-28">28/05/15 THU</option>
									<option value="15-05-29">29/05/15 FRI</option>
									<option value="15-05-30">30/05/15 SAT</option>
								</select>
								<select name="bookingtime" class="form-control">
									<option value="00:01">NOW</option>
									<option value="00:01">00:01</option>
									<option value="00:30">00:30</option>
									<option value="01:00">01:00</option>
									<option value="01:30">01:30</option>
									<option value="02:00">02:00</option>
									<option value="02:30">02:30</option>
									<option value="03:00">03:00</option>
									<option value="03:30">03:30</option>
									<option value="04:00">04:00</option>
									<option value="04:30">04:30</option>
									<option value="05:00">05:00</option>
									<option value="05:30">05:30</option>
									<option value="06:00">06:00</option>
									<option value="06:30">06:30</option>
									<option value="07:00">07:00</option>
									<option value="07:30">07:30</option>
									<option value="08:00">08:00</option>
									<option value="08:30">08:30</option>
									<option value="09:00">09:00</option>
									<option value="09:30">09:30</option>
									<option value="10:00">10:00</option>
									<option value="10:30">10:30</option>
									<option value="11:00">11:00</option>
									<option value="11:30">11:30</option>
									<option value="12:00">12:00</option>
									<option value="12:30">12:30</option>
									<option value="13:00">13:00</option>
									<option value="13:30">13:30</option>
									<option value="14:00">14:00</option>
									<option value="14:30">14:30</option>
									<option value="15:00">15:00</option>
									<option value="15:30">15:30</option>
									<option value="16:00">16:00</option>
									<option value="16:30">16:30</option>
									<option value="17:00">17:00</option>
									<option value="17:30">17:30</option>
									<option value="18:00">18:00</option>
									<option value="18:30">18:30</option>
									<option value="19:00">19:00</option>
									<option value="19:30">19:30</option>
									<option value="20:00">20:00</option>
									<option value="20:30">20:30</option>
									<option value="21:00">21:00</option>
									<option value="21:30">21:30</option>
									<option value="22:00">22:00</option>
									<option value="22:30">22:30</option>
									<option value="23:00">23:00</option>
									<option value="23:30">23:30</option>
								</select>
								<select name="readerready" class="form-control">
									<option value="retention request via VIP line">Ask reader if ready in 5 min</option>
									<option value="reader now ready">Reader is ready now (for sure)</option>
								</select>
							</form>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection