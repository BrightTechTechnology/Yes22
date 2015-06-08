<?php namespace App\Http\Controllers\Supplier;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends Controller {

	public function __construct (){
		// this is how middleware parameters work
		// $this->middleware('staff:yearly');

		// this is in general how to protect whole controller via middleware
		$this->middleware('supplier');
	}

	public function index() {
		return \View::make('supplier.dashboard');
	}

}
