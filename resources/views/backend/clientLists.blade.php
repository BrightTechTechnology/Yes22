@extends('backend/default')

@section('content')
<div class="container-fluid">

<?php 

	if (isset($confirmation)) {
			echo'
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-success">
							<div class="panel-heading">
								'.$confirmation.'
							</div>
						</div>
					</div>
				</div>
			';
		}
	?>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Client Accounts
				</div>
				<div class="panel-body">
					@foreach ($clients as $client)
						{{ $client->name.' ('.$client->email.')' }} <a href="{{ action('Backend\ClientListsController@destroy', $client->id) }}"><abbr title="Delete Account"><span class="glyphicon glyphicon-remove text-red"></span></abbr></a><BR>
					@endforeach
				</div>
			</div>
		</div>
	</div>

</div>

@endsection