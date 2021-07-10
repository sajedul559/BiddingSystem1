<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;

use Closure;

class adminLoginMiddleware
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
        if(!Session::has('a_username')){
            
             return redirect('/admin/login');
        }
        else{
           return $next($request);
        }
    }
}
