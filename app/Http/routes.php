<?php

// Frontend Pages

Route::get('/', function (){
	return view('frontend.signup');
});


	// Billing
	Route::get('billing', function (){
		return view('frontend.billing');
	});

	Route::post('billing', function (){
		$billing = App::make('App\Acme\Billing\BillingInterface');

		try {
			$customerId = $billing->charge([
				'email' => Input::get('email'),
				'token' => Input::get('stripe-token')
			]);

			$user = Auth::user();
			$user->billing_id =$customerId;
			$user->save();
		}
		catch (Exception $e) {
			return Redirect::refresh()->withFlashMessage($e->getMessage());
		}

		return 'Charge was successfull';
	});


// Profile Pages
Route::group(['middleware' => 'auth'], function(){
	Route::get('profile', 'Profile\DashboardController@index');
	Route::get('profile/dashboard', 'Profile\DashboardController@index');
});


// Supplier Pages
Route::group(['middleware' => 'supplier'], function(){
	Route::get('supplier', 'Supplier\DashboardController@index');
	Route::get('supplier/dashboard', 'Supplier\DashboardController@index');
});

// Backend Pages
Route::group(['middleware' => ['staff']], function() {

	// Dashboard
	Route::get('backend', 'Backend\DashboardController@index');
	Route::get('backend/dashboard', 'Backend\DashboardController@index');

	// Whatsapp Reminders
	Route::get('backend/whatsappReminders', 'Backend\WhatsappRemindersController@index');

	// Connections
	Route::get('backend/connections', 'Backend\ConnectionsController@index');

	// Operations
	Route::get('backend/operations', 'Backend\OperationsController@index');

	// Client Lists
	Route::get('backend/clientLists', 'Backend\ClientListsController@index');
		Route::get('backend/clientLists/destroy/{id}','Backend\ClientListsController@destroy');

	// Open Invoices
	Route::get('backend/openInvoices', 'Backend\OpenInvoicesController@index');

	// Admin
	Route::get('backend/admin','Backend\AdminController@index');
		Route::get('backend/admin/destroy/{id}','Backend\AdminController@destroy');

});

// IVR features

Route::get('ivr/call/create/{destination}', 'IVR\CallController@create');
Route::get('ivr/call/intro/{destination}', 'IVR\CallController@intro');
Route::get('ivr/call/destroy/{destination}', 'IVR\CallController@destroy');












Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
	]);




/*

TODO

=> Learn Laracast / Deploy on Staging / Git version control
=> Develop IVR, also with Twilio


	SUPPLIER LOGIN
		Overview like before

	IVR DEVELOPMENT
		Learn howto use Git
		Learn how to deploy to staging in order to test the IVR
		Develop IVR flows


		Include basic auth in IVR routes



	FRONT-END DEVELOPMENT
		Choose design, create views
		Landing Page development

	DEPLOYMENT
		Learn how to use SSL
		Learn how to deploy to production with DB backup
		Learn how to convert old DB to new production
			Suppliers
			Clients
			Invoices
			Log (Interactions)

	BACKEND DEVELOPMENT
		Invoice overview etc

*/


