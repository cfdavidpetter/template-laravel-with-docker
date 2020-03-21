<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CheckLocale
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
        if (session('setLocale')) {
            config(['app.locale' => session('setLocale')]);
        } else {
            config(['app.locale' => 'pt-BR']);
        }

        return $next($request);
    }
}
