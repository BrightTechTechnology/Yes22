<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\User;
use Validator;
use Laravel\Socialite\Facades\Socialite;
use \App\Http\Controllers\ConfigController;

class AuthController extends Controller {

    use AuthenticatesAndRegistersUsers;

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
        $this->config = new ConfigController;
        $this->loginPath = $this->config->getLoginPath(); // where to go after failed login attempt
    }

    protected $redirectTo = 'authenticated'; // where to redirect after successful login or if filtered by route
    protected $loginPath; // where to go after failed login attempt, set in constructor via config
    protected $redirectAfterLogout = '/';

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSignup()
    {
        $theme = $this->config->getTheme();
        $viewPath = 'themes.'.$theme.'.auth.signup';
        return view($viewPath);
    }

    /**
     * Show the application login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin()
    {
        $theme = $this->config->getTheme();
        $viewPath = 'themes.'.$theme.'.auth.login';
        return view($viewPath);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegister()
    {
        $theme = $this->config->getTheme();
        $viewPath = 'themes.'.$theme.'.auth.register';
        return view($viewPath);
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
			'email' => 'required|email|max:255|unique:users,email',
			'password' => 'required|min:6',
            'theme' => 'required|in:whitelabel,gotarot,first1',
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
			'name' => $this->getNameFromEmail($data['email']),
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
            'theme' => $data['theme'],
		]);
	}

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
            $user = User::where('email', $response->getEmail())->first();

            if ($user) {
                // if find user in local db, login
                \Auth::login($user, true);
            } else {
                // if find cannot find user in local db, create
                $user = new User;
                $user->name = $this->getNameFromEmail($response->getEmail());
                $user->staff = false;
                $user->supplier = false;
                $user->email = $response->getEmail();
                $user->password = \Hash::make(str_random(6));
                $user->theme = $this->config->getTheme();
                $user->save();

                //TODO: Send email with PW in that case
            }

            \Auth::login($user);

            return \Redirect::to($this->redirectTo);
        }
    }

    protected function getNameFromEmail($email)
    {
        $emailInPieces = explode('@', $email);
        $name = $emailInPieces[0];
        return $name;
    }
}
