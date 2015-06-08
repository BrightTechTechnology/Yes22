@extends('backend/default')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading text-center">
					Backend Users
				</div>
				<div class="panel-body">
					@foreach ($admins as $admin)
						{{ $admin->name.' ('.$admin->email.')' }} <a href="{{ action('Backend\AdminController@destroy', $admin->id) }}"><abbr title="Delete Account"><span class="glyphicon glyphicon-remove text-red"></span></abbr></a><BR>
					@endforeach
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading text-center">
					Suppliers
				</div>
				<div class="panel-body">
					@foreach ($suppliers as $supplier)
						{{ $supplier->name.' ('.$supplier->email.')' }} <a href="{{ action('Backend\AdminController@destroy', $supplier->id) }}"><abbr title="Delete Account"><span class="glyphicon glyphicon-remove text-red"></span></abbr></a><BR>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>

@endsection