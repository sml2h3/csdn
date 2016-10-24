<?php

namespace App\Http\Controllers\Home;
use Illuminate\Support\Facades\Mail;
//use App\Mail\OrderShipped;
use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Crypt;

use App\Http\Model\User;

use Illuminate\Support\Facades\Redirect;
class UserController extends CommonController
{
    public function reg(){
        $phone = Input::get("phone");
        $code = Input::get('code');
        $email = Input::get('email');
        $pass = Input::get('pass');
        $session_code = session('code');
        $session_phone = session('phone');
        $session_addtime = session('addtime');
        $array = array(
            "result" => "",
            "reason" => ""
        );
        //判断验证码时间是否超时
        if (time()-300>$session_addtime){
            //5分钟后超时
            $array['result'] = "error";
            $array['reason'] = "验证码超时";
            session(['phone'=>'','code'=>'','addtime'=>'']);
            return json_encode($array);
        }
        //判断手机是否正确
        if ($session_phone != $phone){
            $array['result'] = "error";
            $array['reason'] = "手机号错误";
//            session(['phone'=>'','code'=>'','addtime'=>'']);
            return json_encode($array);
        }
        //验证短信验证码是否正确
        if ($session_code != $code){
            $array['result'] = "error";
            $array['reason'] = "验证码错误";
//            session(['phone'=>'','code'=>'','addtime'=>'']);
            return json_encode($array);
        }
        $encode_pass = Crypt::encrypt($pass);
        $create_time = time();

        $result = User::insertGetId(['password'=>$encode_pass,'phone'=>htmlspecialchars($phone),'email'=>htmlspecialchars($email),'create_time'=>$create_time]);
        $c = array(
            "phone" => $phone,
            "time" => time()
        );
        $cc = json_encode($c);
        $link = Crypt::encrypt($cc);
        $data = ['phone'=>$phone,'link'=>$link,'email'=>$email];
        if ($result){

            $array['result'] = "success";
            $array['reason'] = "注册成功";
            Mail::queue('email.e',$data, function ($message)use($data) {
                $to = $data['email'];
                $message ->to($to)->subject('天津工业大学CSDN校园俱乐部注册激活链接');
            });
        }else{
            $array['result'] = "error";
            $array['reason'] = "系统错误";
        }
        return json_encode($array);
    }
    public function verfy($code){
        $decode = Crypt::decrypt($code);
        $decode = json_decode($decode);
        //右键链接是否超时
        if (time()-900 > $decode->time){
            return view('errors.503')->with(['info'=>'链接已失效']);
        }
        $result = User::where('phone',$decode->phone)->first();
        if ($result == null){
            return view('errors.503')->with(['info'=>'未找到此用户']);
        }else{
            User::where('phone',$decode->phone)->update(['is_use'=>1]);
            return redirect('/index');
        }
    }
    public function login(){
        $name = Input::get('username');
        $pass = Input::get('password');
        $array = array(
            "result" => "",
            "reason" => ""
        );
        $result = User::where("username",$name)->orWhere('phone',$name)->orWhere('email',$name)->first();
        if ($result == null){
            $array['result'] = 'error';
            $array['reason'] = '账号不存在';
        }else{
            if(Crypt::decrypt($result->password) === $pass){
                $time = time();
                User::where("Id",$result->Id)->update(['login_time'=>$time]);
                return redirect('/index');
            }else{
                $array['result'] = 'error';
                $array['reason'] = '密码错误';
            }
            return $array;
        }
    }
}
