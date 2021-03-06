<?php

namespace App\Http\Middleware;

use Closure;

class Language
{

    public function __construct(\App\Http\Controllers\ConfigController $configController)
    {
        $language = $configController->getLanguage();
        $configController->setLanguage($language);
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
