<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;
use Closure;

class farmerloginCheck
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
            if(!Session::has('f_username')){
                
                 return redirect('/login');
            }
            else{
               return $next($request);
            }
    }
}
