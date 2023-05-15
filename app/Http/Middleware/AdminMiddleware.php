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
        if(Auth::check()) {
            if(Auth::user()->role_as == '1' or Auth::user()->role_as == '0') {  // Admin = 1 , User  = 0    
                return $next($request);
            }
            else {
                return redirect('/')->with('status', 'Girişim engellendi ! Giriş yetkiniz yoktur.');
            }
        }
        else {
            return redirect('/pn-admin')->with('status', 'Lütfen Giriş Yapınız');
        }
    }
}
