<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckLogout
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard)
    {
        if (isset($guard) && Auth::guard($guard)->check()) {
            return redirect('/');
        }

        if(Auth::check()){
            return redirect('cms/dashboard');
        }

            return $next($request);
    }
}