<?php namespace App\Http\Middleware;

use Closure;

class MustBeAjax {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param string 	 $plan
     * @return mixed
     */

    // this is how middleware parameters work
    // public function handle($request, Closure $next, $plan = null)
    public function handle($request, Closure $next)
    {
        $isAjax = $request->ajax();

        if ($isAjax) {
            return $next($request);
        }

        Throw new \Exception ('Request not allowed');
    }
}
