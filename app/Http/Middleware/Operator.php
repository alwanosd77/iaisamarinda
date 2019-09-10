<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;

class Operator
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
        if(Auth::check())
        {
            if (Auth::check())
            {
                return $next($request);

            }
            Session::flash('status','Anda tidak memiliki hak akses');
            return redirect()->back();
        }
        Session::flash('status','Login dulu');
        return redirect('/login');
    }
}
