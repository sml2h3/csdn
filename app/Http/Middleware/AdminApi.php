<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Model\Admin;
use Illuminate\Support\Facades\Crypt;
class AdminApi
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
                if (Crypt::decrypt($result['admin_password']) != Crypt::decrypt($pass)){
                    $array = array(
                        "result" => '0',
                        "reason" => "未登录状态"
                    );
                    return json_encode($array);
                }
            }
        }
        return $next($request);
    }
}
