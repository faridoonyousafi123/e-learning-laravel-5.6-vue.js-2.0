<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class CheckUser
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
            if(!Auth::user()->isUserConfirmed){
            
           return redirect()->route('/mail');
        }
            
        } catch (Exception $e) {
            
        }
        
        return $next($request);
    }
}
