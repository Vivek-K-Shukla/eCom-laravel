<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //Condition to check whether user is login & having user data in session or not.If condition true then send them on home(product page):
        if($request->path()=="login" && $request->session()->has('user')){
            return redirect('/');
        }
        return $next($request);
    }
}
