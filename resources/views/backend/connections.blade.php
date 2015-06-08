@extends('backend/default')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">

			<div class="panel panel-default">
				<div class="panel-heading text-center">
					Quick scheduling / Customer lookup
				</div>
				<div class="panel-body">
					<form class="form-inline">
						<input type="text" class="form-control" placeholder="+852 12345678" value="+852">
						<button class="btn btn-primary">arrange reading / check customer</button>
					</form>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading text-center">
					Retention clients - please follow up
				</div>
				<table class="table table-striped table-hover">
					<tr class="info">
						<td>Status</td>
						<td>Called at this time</td>
						<td>Customer ID</td>
						<td>Phone</td>
						<td>Name</td>
						<td>Booking id</td>
						<td>Reader</td>
						<td>Reschedule</td>
						<td></td>
					</tr>
					@for ($i=0;$i<4;$i++)
						<tr>
							<td class="danger">customer asked for new reader</td>
							<td class="danger">2015-05-23 22:31:30</td>
							<td class="danger"><a href="#" class="btn btn-info"><span class="glyphicon glyphicon-user"></span> 50088</a></td>
							<td class="danger">+852 6259-3750</td>
							<td class="danger">馬詩婷</td>
							<td class="danger">33888</td>
							<td class="danger">Josephine</td>
							<td class="danger">
								<form>
									<select name="supplier" class="form-control">
										<option value="1line">1line - HK$ 15 (111) </option>
										<option value="AhPo">AhPo - HK$ 13 (94386393) </option>
										<option value="alice">Alice - HK$ 13 (63116881) </option>
										<option value="ally">Ally - HK$ 19 (98799176) </option>
										<option value="Angel">Angel - HK$ 17 (92372077) </option>
										<option value="Angela">Angela - HK$ 15 (97357008) </option>
										<option value="annemilk">Anne - HK$ 13 (12345678) </option>
										<option value="Apple">Apple - HK$ 15 (93635060) </option>
										<option value="Ari">Ari - HK$ 15 (93531474) </option>
										<option value="ashirley">Ashirley - HK$ 15 (64114414) </option>
										<option value="Bonnie">Bonnie - HK$ 15 (98892997) </option>
										<option value="bowiewat">Bowie - HK$ 17 (65905146) </option>
										<option value="Bryan">Bryan - HK$ 15 (76337100) </option>
										<option value="carolchan">Carol - HK$ 15 (62384599) </option>
										<option value="Catherine">Catherine - HK$ 15 (59236223) </option>
										<option value="Cecilia">Cecilia - HK$ 15 (98125181) </option>
										<option value="Cherry">Cherry - HK$ 15 (98088531) </option>
										<option selected="selected"  value="Christy">Christy - HK$ 19 (61386649) </option>
										<option value="cyrus">Cyrus - HK$ 15 (62836855) </option>
										<option value="daniellai">Daniel - HK$ 15 (98821298) </option>
										<option value="Elaine">Elaine - HK$ 15 (93696826) </option>
										<option value="Eli">Eli - HK$ 15 (92882414) </option>
										<option value="feeling">Feeling - HK$ 17 (10171758) </option>
										<option value="fiona">Fiona - HK$ 15 (98124162) </option>
										<option value="frankieng">Frankie - HK$ 15 (96693124) </option>
										<option value="Gary">Gary - HK$ 17 (97435078) </option>
										<option value="Gerhard">Gerhard - HK$ 17 (56670946) </option>
										<option value="gordon">Gordon - HK$ 17 (91687689) </option>
										<option value="holly">Holly - HK$ 15 (63752576) </option>
										<option value="jackel">Jackel - HK$ 15 (62805880) </option>
										<option value="Jo">Jo - HK$ 15 (66056606) </option>
										<option value="Josephine">Josephine - HK$ 21 (91792968) </option>
										<option value="kama">Kama - HK$ 15 (111111) </option>
										<option value="libra">Libra - HK$ 14 (91431891) </option>
										<option value="Lilian">Lilian - HK$ 15 (96388706) </option>
										<option value="Mani">Mani - HK$ 19 (92242826) </option>
										<option value="maria">Maria - HK$ 15 (111111) </option>
										<option value="Mic">Mic - HK$ 15 (54022470) </option>
										<option value="nicky">Nicky - HK$ 17 (64159565) </option>
										<option value="perry">Perry - HK$ 15 (91478858) </option>
										<option value="queena">Queena - HK$ 15 (11111111) </option>
										<option value="Rachel">Rachel - HK$ 15 (60202021) </option>
										<option value="Riva">Riva - HK$ 15 (67521527) </option>
										<option value="sandeep">Sandeep - HK$ 15 (62206223) </option>
										<option value="stevenshui">Steven - HK$ 13 (96017706) </option>
										<option value="Sweety Luo">Sweety Luo - HK$ 15 (66832350) </option>
										<option value="Thomas">Thomas - HK$ 17 (98336115) </option>
										<option value="Ursula">Ursula - HK$ 15 (62085850) </option>
										<option value="Wayne">Wayne - HK$ 15 (63214827) </option>
										<option value="Wesley">Wesley - HK$ 19 (97567988) </option>
										<option value="william">William - HK$ 15 (97798885) </option>
										<option value="Wing">Wing - HK$ 15 (66850989) </option>
										<option value="winniehon">Winnie Hon - HK$ 15 (96408008) </option>
										<option value="winnieng">Winnie Ng - HK$ 13 (96168628) </option>
										<option value="Won">Won - HK$ 17 (97749339) </option>
										<option value="Zoobby">Zoobby - HK$ 15 (59912865) </option>
									</select>

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
							<td class="danger">
								<a href="#" class="btn btn-danger">Delete</a>
							</td>
						</tr>
					@endfor
				</table>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading text-center">
					Arranged retention calls
				</div>
				<table class="table table-striped table-hover">
					<tr class="info">
						<td>Status</td>
						<td>Will Call at this time</td>
						<td>Customer ID</td>
						<td>Phone</td>
						<td>Name</td>
						<td>Booking id</td>
						<td>Reader</td>
						<td>Reschedule</td>
						<td></td>
					</tr>
					@for ($i=0;$i<2;$i++)
						<tr>
							<td>retention request via VIP line</td>
							<td>2015-05-25 20:00:00</td>
							<td><a href="#" class="btn btn-info"><span class="glyphicon glyphicon-user"></span> 50088</a></td>
							<td>+852 6259-3750</td>
							<td>馬詩婷</td>
							<td>33888</td>
							<td>Josephine</td>
							<td>
								<form>
									<select name="supplier" class="form-control">
										<option value="1line">1line - HK$ 15 (111) </option>
										<option value="AhPo">AhPo - HK$ 13 (94386393) </option>
										<option value="alice">Alice - HK$ 13 (63116881) </option>
										<option value="ally">Ally - HK$ 19 (98799176) </option>
										<option value="Angel">Angel - HK$ 17 (92372077) </option>
										<option value="Angela">Angela - HK$ 15 (97357008) </option>
										<option value="annemilk">Anne - HK$ 13 (12345678) </option>
										<option value="Apple">Apple - HK$ 15 (93635060) </option>
										<option value="Ari">Ari - HK$ 15 (93531474) </option>
										<option value="ashirley">Ashirley - HK$ 15 (64114414) </option>
										<option value="Bonnie">Bonnie - HK$ 15 (98892997) </option>
										<option value="bowiewat">Bowie - HK$ 17 (65905146) </option>
										<option value="Bryan">Bryan - HK$ 15 (76337100) </option>
										<option value="carolchan">Carol - HK$ 15 (62384599) </option>
										<option value="Catherine">Catherine - HK$ 15 (59236223) </option>
										<option value="Cecilia">Cecilia - HK$ 15 (98125181) </option>
										<option value="Cherry">Cherry - HK$ 15 (98088531) </option>
										<option selected="selected"  value="Christy">Christy - HK$ 19 (61386649) </option>
										<option value="cyrus">Cyrus - HK$ 15 (62836855) </option>
										<option value="daniellai">Daniel - HK$ 15 (98821298) </option>
										<option value="Elaine">Elaine - HK$ 15 (93696826) </option>
										<option value="Eli">Eli - HK$ 15 (92882414) </option>
										<option value="feeling">Feeling - HK$ 17 (10171758) </option>
										<option value="fiona">Fiona - HK$ 15 (98124162) </option>
										<option value="frankieng">Frankie - HK$ 15 (96693124) </option>
										<option value="Gary">Gary - HK$ 17 (97435078) </option>
										<option value="Gerhard">Gerhard - HK$ 17 (56670946) </option>
										<option value="gordon">Gordon - HK$ 17 (91687689) </option>
										<option value="holly">Holly - HK$ 15 (63752576) </option>
										<option value="jackel">Jackel - HK$ 15 (62805880) </option>
										<option value="Jo">Jo - HK$ 15 (66056606) </option>
										<option value="Josephine">Josephine - HK$ 21 (91792968) </option>
										<option value="kama">Kama - HK$ 15 (111111) </option>
										<option value="libra">Libra - HK$ 14 (91431891) </option>
										<option value="Lilian">Lilian - HK$ 15 (96388706) </option>
										<option value="Mani">Mani - HK$ 19 (92242826) </option>
										<option value="maria">Maria - HK$ 15 (111111) </option>
										<option value="Mic">Mic - HK$ 15 (54022470) </option>
										<option value="nicky">Nicky - HK$ 17 (64159565) </option>
										<option value="perry">Perry - HK$ 15 (91478858) </option>
										<option value="queena">Queena - HK$ 15 (11111111) </option>
										<option value="Rachel">Rachel - HK$ 15 (60202021) </option>
										<option value="Riva">Riva - HK$ 15 (67521527) </option>
										<option value="sandeep">Sandeep - HK$ 15 (62206223) </option>
										<option value="stevenshui">Steven - HK$ 13 (96017706) </option>
										<option value="Sweety Luo">Sweety Luo - HK$ 15 (66832350) </option>
										<option value="Thomas">Thomas - HK$ 17 (98336115) </option>
										<option value="Ursula">Ursula - HK$ 15 (62085850) </option>
										<option value="Wayne">Wayne - HK$ 15 (63214827) </option>
										<option value="Wesley">Wesley - HK$ 19 (97567988) </option>
										<option value="william">William - HK$ 15 (97798885) </option>
										<option value="Wing">Wing - HK$ 15 (66850989) </option>
										<option value="winniehon">Winnie Hon - HK$ 15 (96408008) </option>
										<option value="winnieng">Winnie Ng - HK$ 13 (96168628) </option>
										<option value="Won">Won - HK$ 17 (97749339) </option>
										<option value="Zoobby">Zoobby - HK$ 15 (59912865) </option>
									</select>

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
								<a href="#" class="btn btn-danger">Delete</a>
							</td>
						</tr>
					@endfor
				</table>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading text-center">
					Connections established in the last 48 hours
				</div>
				<table class="table table-striped table-hover">
					<tr class="info">
						<td>Reader</td>
						<td>Customer ID</td>
						<td>Begin time</td>
						<td>End Time</td>
						<td></td>
					</tr>
					@for ($i=0;$i<2;$i++)
						<tr class="success">
							<td>Nicky</td>
							<td><a href="#" class="btn btn-info"><span class="glyphicon glyphicon-user"></span> 47667</a></td>
							<td>2015-05-24 20:14:25</td>
							<td>2015-05-24 20:21:33</td>
							<td><a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-play"></span></a></td>
						</tr>
						<tr class="danger">
							<td>Nicky</td>
							<td><a href="#" class="btn btn-info"><span class="glyphicon glyphicon-user"></span> 47667</a></td>
							<td>2015-05-24 20:14:25</td>
							<td>2015-05-24 20:21:33</td>
							<td><a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-play"></span></a></td>
						</tr>
					@endfor
				</table>
			</div>

		</div>
	</div>
</div>
@stop