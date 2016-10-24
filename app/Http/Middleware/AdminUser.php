<?php

namespace App\Http\Middleware;

use Closure;
use Crypt;
class AdminUser
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
        if (session('username')==null || session('token') == null){
            return view('admin.login');
        }else{

        }
        return $next($request);
    }
}
