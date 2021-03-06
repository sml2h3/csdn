<?php

namespace App\Http\Middleware;

use Closure;
use Crypt;
use App\Http\Model\Admin;
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
            return redirect('index');
        }else{
            $username = session('username');
            $token = session('token');
            $result = Admin::where("admin_username",$username)->first();
            if ($result){
                if (base64_decode($token) != $result->admin_password){
                    return redirect('index');
                }
            }else{
                return redirect('index');
            }
        }
        return $next($request);
    }
}
