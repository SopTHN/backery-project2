<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class adminMid
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
        if (!session()->has('Loggedadmin') && ($request->path() != 'admin.login' //&& $reqeust->path() != 'Users.Register'
        )) {
            return redirect('/admin/login')->with('fail', 'You Must login First!');
        }

        if (session()->has('Loggedadmin') && ($request->path() == 'admin.login' //|| $request->
        )) {
            return back();
        }
        return $next($request);
    }
}
