<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Http\Model\Admin;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    public function login(){
        $username = Input::get("username");
        $password = Input::get("password");
        if ($username == "" || $password == ""){
            return redirect('admin/index',['info'=>'账号或者密码不能为空']);
        }
        $result = Admin::where("admin_username",$username)->first();
        if (!$result){
            return redirect('admin/index',['info'=>'账号不存在']);
        }
        $dp = Crypt::decrypt($result['admin_password']);
        if ($password === $dp){
            session(['username'=>$username,'token'=>base64_encode($result['admin_password'])]);
            return redirect('admin/main');
        }else{
            return redirect('admin/index',['info'=>'密码错误']);
        }

    }
}
