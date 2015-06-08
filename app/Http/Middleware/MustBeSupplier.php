<?php namespace App\Http\Middleware;

use Closure;

class MustBeSupplier {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @param string 	 $plan
	 * @return mixed
	 */

	public function handle($request, Closure $next)
	{

		$user = $request->user();

		if ($user && $user->isSupplier()) {
			return $next($request);
		}
		elseif ($user) {
			return 'You do not have permission to access this page';
		}
		else {
			return \View::make('auth.login');
		}
	}
}
