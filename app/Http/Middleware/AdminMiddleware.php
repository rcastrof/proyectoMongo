<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            // 1 para admin
            if(Auth::user()->role == '1') {
                return $next($request);
            }
            else
            {
                return redirect('/home')->with('message','no eres admin');
            }
        }else {
            return redirect('/home')->with('message','Inicia sesion');
        }
        return $next($request);
    }
}
