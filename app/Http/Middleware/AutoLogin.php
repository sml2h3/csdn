<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Model\Admin;
use Illuminate\Support\Facades\Crypt;
class AutoLogin
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
        $username = session('username');
        $token = session('token');
        if ($username != "" && $token != ""){
            $pass = base64_decode($token);
            $result = Admin::where("admin_username",$username)->first();
            if ($result){
                if (Crypt::decrypt($result['admin_password']) == Crypt::decrypt($pass)){
                    return redirect('admin/main');
                }
            }
        }
        return $next($request);
    }
}
