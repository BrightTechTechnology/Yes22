<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\User;
use Validator;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller {

    /*
|--------------------------------------------------------------------------
| Registration & Login Controller
|--------------------------------------------------------------------------
|
| This controller handles the registration of new users, as well as the
| authentication of existing users. By default, this controller uses
| a simple trait to add these behaviors. Why don't you explore it?
|
*/

    use AuthenticatesAndRegistersUsers;

    /**
     * Redirect the user to the FB authentication page.
     *
     * @return Response
     */
    public function redirectToFacebook()
    {
        return Socialite::with('facebook')->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @return Response
     */
    public function handleFacebookCallback()
    {
        // get user object from FB
        $response = Socialite::driver('facebook')->user();

        if ($response) {
            // if find user in local db, redirect to login
            $user = User::where('email', $response->getEmail())->first();
            if ($user) {
                // login the user
                \Auth::login($user, true);
                return \Redirect::to('/');
            }

            // if user not found locally, redirect back with the inputs
            if ( ! $user) {
                $user = [];
                $emailInPieces = explode('@', $response->getEmail());
                $user['username'] = $emailInPieces[0];
                $user['email'] = $response->getEmail();
                $socialLogin = true;
            }

            $cta = 'Get you first free thing';
            return view('frontend.signup', compact('user', 'socialLogin', 'cta')); // redirect to signup which will redirect to profile/supplier/backend

        }
    }


	// the branches after signup or login of auth/login are defined in RedirectIfAuthenticated
	// if dont use the below, can do this in routes Route::get('home', function (){return Redirect::to('auth/login');});
	protected $redirectTo = '/auth/login';

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest', ['except' => 'getLogout']);
	}

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'username' => 'required|max:255|unique:users,username',
			'email' => 'required|email|max:255|unique:users,email',
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return User::create([
			'username' => $data['username'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
		]);
	}

}
