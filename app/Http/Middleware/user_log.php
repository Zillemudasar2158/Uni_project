<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class user_log
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
        if (!$request->session()->has('name')) {
           $request->session()->flash('msg','Please login to continue for further process');
            return redirect('login');
        }
        return $next($request);
    }
}
