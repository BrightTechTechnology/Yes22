@extends('backend/default')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading text-center">
					Activity Status
				</div>
				<div class="panel-body">
					<p><strong>0 </strong>Clients called in and are in the queue</p>
					<p><strong>0 </strong>Clients have just been tried to connect but are not yet ready. System retries soon.</p>
					<p><strong>0 / 297 </strong>Clients got an invitation SMS today</p>
					<p><strong>Gary </strong>is online without client</p>
				</div>
			</div>
		</div>
	</div>
</div>
@stop