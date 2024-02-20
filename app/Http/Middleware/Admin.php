<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // Retrieve credentials from the request
        $userName = $request->input('user_name');
        $password = $request->input('password');
        if(session()->has('user_name') == 'admin' && session()->has('stack_level') == '1'){

            return $next($request);
        }
        else{
            return redirect()->route('login')->with('flash_message', 'Login Faield');
        }
    }
}
