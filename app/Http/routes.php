<?php

// Frontend Pages
Route::get('/', function (){return view('frontend.signup');});


// Profile Pages
Route::group(['middleware' => 'auth'], function(){
	Route::get('profile', 'Profile\DashboardController@index');
	Route::get('profile/dashboard', 'Profile\DashboardController@index');

	// Billing
	Route::get('profile/billing', 'BillingController@showForm');
	Route::post('profile/billing', 'BillingController@ChargeClient');

});


// Supplier Pages
Route::group(['middleware' => 'supplier'], function(){
	Route::get('supplier', 'Supplier\DashboardController@index');
	Route::get('supplier/dashboard', 'Supplier\DashboardController@index');
	Route::get('supplier/profile', 'Supplier\ProfileController@edit');
	Route::post('supplier/profile', 'Supplier\ProfileController@update');
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



// tests
Route::get('test/email', 'EmailController@send');








Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
	]);

