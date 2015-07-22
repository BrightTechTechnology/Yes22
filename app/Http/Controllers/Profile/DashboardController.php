<?php namespace App\Http\Controllers\Profile;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller {

    /**
     * need to be logged in order to access your profile
     */
    public function __construct (){
		$this->middleware('auth');
	}

	public function index() {
		return \View::make('profile.dashboard');
	}

}
