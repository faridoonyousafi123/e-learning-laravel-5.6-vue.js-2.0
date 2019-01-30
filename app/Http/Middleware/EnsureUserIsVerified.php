<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;

class EnsureUserIsVerified
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
        try {
            if(auth()->check()){
                if(!Auth::user()->confirm_token == null){
            
            return redirect('/confirmemail');
        }
    }else{
        return redirect('/');
    }
            
            
        } catch (Exception $e) {
            
        }
        
        return $next($request);
    }
}
