<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Http\Controllers\ConfigController;

class PasswordController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Password Reset Controller
	|--------------------------------------------------------------------------
	|
	| This controller is responsible for handling password reset requests
	| and uses a simple trait to include this behavior. You're free to
	| explore this trait and override any methods you wish to tweak.
	|
	*/

	use ResetsPasswords;

	/**
	 * Create a new password controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\PasswordBroker  $passwords
	 * @return void
	 */

    protected $config;

	public function __construct()
	{
		$this->middleware('guest');
        $this->config = new ConfigController;
    }

    public function getConfirm()
    {
        $viewPath = 'theme.'.$this->config->getTheme().'.auth.confirm';
        return view($viewPath);
    }

    public function getReset()
    {
        $viewPath = 'theme.'.$this->config->getTheme().'.auth.reset';
        return view($viewPath);
    }

}
