<?php

namespace App\Http\Middleware;

use Closure;
use Config;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;


use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class Localization extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Session::has('locale'))
        {
            Session::put('locale', Config::get('app.locale'));
        }

        app()->setLocale(Session::get('locale'));
        return $next($request);
    }
}
