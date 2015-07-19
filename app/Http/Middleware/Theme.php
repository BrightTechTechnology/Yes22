<?php

namespace App\Http\Middleware;

use Closure;

class Theme
{

    public function __construct(\App\Http\Controllers\ConfigController $configController)
    {
        $theme = $configController->getTheme();
        $configController->setTheme($theme);
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }

}
