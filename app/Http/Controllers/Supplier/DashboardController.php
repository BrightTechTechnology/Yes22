<?php namespace App\Http\Controllers\Supplier;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends Controller {

	public function __construct (){
		$this->middleware('supplier');
	}

	public function index() {
		return \View::make('supplier.dashboard');
	}

}
