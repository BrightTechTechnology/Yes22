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
                <div class="panel-body">
					<form>
                        <label for="add_backend_user">Add Backend User</label>
                        <input id="add_backend_user" name="add_backend_user" type="text" class="form-control" placeholder="Enter Email">
                        <ul id="add_backend_user_list"></ul>
                    </form>
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
                <div class="panel-body">
                    <form>
                        <label for="add_backend_user">Add Supplier</label>
                        <input id="add_supplier" name="add_supplier" type="text" class="form-control" placeholder="Enter Email">
                        <ul id="add_supplier_list"></ul>
                    </form>
                </div>
			</div>
		</div>
	</div>
</div>
@stop

@section('js-additions')
    <script type="text/javascript">

        {{-- add backend user --}}
        $('#add_backend_user').on('keyup', function () {
            $.ajax({
                url: '/backend/admin/search/?add_backend_user=' + $(this).val(),
                type: 'GET',
                cache: false,
                success: function (response) {
                    $('#add_backend_user_list').html('');
                    if (response !== false) {
                        for (i = 0; i < response.length; i++) {
                            $('#add_backend_user_list').append('<li><a href="add_backend_user/?id=' + i + '">' + response[i] + '</a></li>')
                        }
                    }
                },
                error: function (){
                    alert('database connection error');
                }
            });
        });

        $('#add_backend_user_list').on('click', function(){
            $('#add_backend_user_list').html('');
        });

        {{-- add supplier --}}
        $('#add_supplier').on('keyup', function () {
            $.ajax({
                url: '/backend/admin/search/?add_supplier=' + $(this).val(),
                type: 'GET',
                cache: false,
                success: function (response) {
                    $('#add_supplier_list').html('');
                    if (response !== false) {
                        for (i = 0; i < response.length; i++) {
                            $('#add_supplier_list').append('<li><a href="add_supplier/?id=' + i + '">' + response[i] + '</a></li>')
                        }
                    }
                },
                error: function (){
                    alert('database connection error');
                }
            });
        });

        $('#add_supplier').on('click', function(){
            $('#add_supplier_list').html('');
        });






    </script>
@stop