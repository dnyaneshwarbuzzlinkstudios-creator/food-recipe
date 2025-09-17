<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminLogin
{
    public function handle(Request $request, Closure $next)
    {
        if (!Session::get('isAdminLoggedIn')) {
            return redirect('/admin'); // redirect to login page
        }
        return $next($request);
    }
}
