<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLogin
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
        if(Auth::check()){
            $user = Auth::user();
            if ( $user->role=='user' ) {
                return redirect('user'); 
           }
           else if ( $user->role=='admin' ) {
                return $next($request);
           }
        }
        else{
            return redirect('login');
        }
        echo "this is checklog middleware";  
    }
}
