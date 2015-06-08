@extends('backend/default')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading text-center">
					Open invoices overview
				</div>
				<table class="table table-striped table-hover">
					<tr class="info">
						<td>Connection finished at</td>
						<td>Invoice ID</td>
						<td>Amount</td>
						<td>Customer name</td>
						<td>Customer Id</td>
						<td>Phone</td>
						<td>Supplier Name</td>
						<td>Customer comment</td>
						<td>Bad debt rating</td>
						<td>Recording</td>
						<td>Do action</td>
					</tr>
					<tr>
						<td>2015-05-25 03:30:41</td>
						<td><a href="#" class="btn btn-info"><span class="glyphicon glyphicon-file"></span> 47667</a></td>
						<td>226.80</td>
						<td>Cathy</td>
						<td><a href="#" class="btn btn-info"><span class="glyphicon glyphicon-user"></span> 347667</a></td>
						<td>+852 6056-7309</td>
						<td>Josephine</td>
						<td width="20%">out of service (2015-02-11 15:48:59) out of service (2015-02-16 20:03:37) out of service (2015-02-24 20:54:38) out of service (2015-03-05 22:03:41)</td>
						<td>★☆☆☆☆</td>
						<td><a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-play"></span></a></td>
						<td>
							<abbr title="Invoice got paid"><a href="#" class="btn btn-success"><span class="glyphicon glyphicon-ok-circle"></span></a>
							<abbr title="Invoice is bad debt"><a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span></a>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection