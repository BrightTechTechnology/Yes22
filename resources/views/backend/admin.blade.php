@extends('backend/default')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading text-center">
					Staff (backend users)
				</div>
				<div class="panel-body">
					@foreach ($staffs as $staff)
						{{ $staff->name.' ('.$staff->email.')' }}
                        <a href="{{ action('Backend\AdminController@removeStaff')}}/?id={{$staff->id}}">
                            <abbr title="Remove Staff Right">
                                <span class="glyphicon glyphicon-remove text-blue"></span>
                            </abbr>
                        </a>
                        <BR>
					@endforeach
				</div>
                <div class="panel-body">
					<form>
                        <label for="add_staff">Add Staff (backend user)</label>
                        <input id="add_staff" name="add_staff" type="text" class="form-control" placeholder="Enter Email">
                        <ul id="add_staff_list"></ul>
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
						{{ $supplier->name.' ('.$supplier->email.')' }}
                        <a href="{{ action('Backend\AdminController@removeSupplier') }}/?id={{$supplier->id}}">
                            <abbr title="Remove Supplier Right">
                                <span class="glyphicon glyphicon-remove text-blue"></span>
                            </abbr>
                        </a>
                        <BR>
					@endforeach
				</div>
                <div class="panel-body">
                    <form>
                        <label for="add_supplier">Add Supplier</label>
                        <input id="add_supplier" name="add_supplier" type="text" class="form-control" placeholder="Enter Email">
                        <ul id="add_supplier_list"></ul>
                    </form>
                </div>
			</div>
		</div>
	</div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    All Users
                </div>
                <div class="panel-body">
                    @foreach ($users as $user)
                        {{ $user->name.' ('.$user->email.')' }}
                        <a href="{{ action('Backend\AdminController@destroy') }}/?id={{$user->id}}">
                            <abbr title="Permanently delete account">
                                <span class="glyphicon glyphicon-remove text-red"></span>
                            </abbr>
                        </a>
                        <BR>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


@stop

@section('js-additions')
    <script type="text/javascript">

        {{-- add staff --}}
        $('#add_staff').on('keyup', function () {
            $.ajax({
                url: '/backend/admin/search/?add_staff=' + $(this).val(),
                type: 'GET',
                cache: false,
                success: function (response) {
                    $('#add_staff_list').html('');
                    if (response !== false) {
                        for (var key in response) {
                            if (response.hasOwnProperty(key)) {
                                $('#add_staff_list').append('<li><a href="admin/addStaff?id=' + key + '">' + response[key] + '</a></li>')
                            }
                        }
                    }
                },
                error: function (){
                    alert('database connection error');
                }
            });
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
                        for (var key in response) {
                            if (response.hasOwnProperty(key)) {
                                $('#add_supplier_list').append('<li><a href="admin/addSupplier?id=' + key + '">' + response[key] + '</a></li>')
                            }
                        }
                    }
                },
                error: function (){
                    alert('database connection error');
                }
            });
        });

    </script>
@stop