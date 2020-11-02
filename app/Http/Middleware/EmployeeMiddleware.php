<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeMiddleware
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
//        return $next($request);
      //  dd(Auth::user()->role);
        if(Auth::check() && Auth::user()->role->id == 2 ){
            return $next($request);
        }else{
            return redirect()->route('login');
        }
    }
}
