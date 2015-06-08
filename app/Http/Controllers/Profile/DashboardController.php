<?php namespace App\Http\Controllers\Profile;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends Controller {

	public function __construct (){
		// this is how middleware parameters work
		// $this->middleware('staff:yearly');

		$this->middleware('auth');
	}

	public function index() {
		return \View::make('profile.dashboard');
	}

}
