<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class AdminMiddleware
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
        // die(Auth::user()->isAdmin);
        if(Auth::guest()){
            return redirect()->guest('login');
        }
        if(!Auth::user()->admin){
            return "Not permitted!";
            
        }
        return $next($request);    
    }
}
