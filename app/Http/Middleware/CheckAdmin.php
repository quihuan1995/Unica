<?php

namespace App\Http\Middleware;

use App\Models\Admin\Role;
use App\Models\Admin\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;

class CheckAdmin
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
        //// Kiểm tra có phải 'Admin'
            if(Auth::user()->roles->pluck('title')->contains('Admin' || 'Teacher')){
                return $next($request);
            }
    }
}