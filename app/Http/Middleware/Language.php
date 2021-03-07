<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;



class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $locale = substr($request->server('HTTP_ACCEPT_LANGUAGE'),0,2);// Lenguaje del navegador
        App::setLocale($locale);
        return $next($request);
    }
}

