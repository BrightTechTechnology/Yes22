<?php namespace App\Http\Middleware;

use Closure;

class MustBeStaff {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @param string 	 $plan
	 * @return mixed
	 */

	// this is howmiddleware parameters work
	// public function handle($request, Closure $next, $plan = null)
	public function handle($request, Closure $next)
	{

		$user = $request->user();

		// this is how middleware parameters work
		// if ($user && $user->isStaff($plan)) {

		if ($user && $user->isStaff()) {
			return $next($request);
		}
		elseif ($user) {
			return 'You do not have permission to access this page';
		}
		else {
			return redirect()->to('authenticated');
		}
	}
}
