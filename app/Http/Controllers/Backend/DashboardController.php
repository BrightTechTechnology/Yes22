<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends Controller {

    public function __construct()
    {
        $this->middleware('staff');
    }


	public function index() {
		return \View::make('backend.dashboard');
	}

}
