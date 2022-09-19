<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    
    public function handle(Request $request, Closure $next, $roles)
    {
        if(!Auth::check()) {
            return redirect('login');
        }
        $user = Auth::user();

        if ($user->level == $roles) 
        return $next($request);

    return redirect('login')->with('error', 'Anda tidak memiliki akses');
    }
}
