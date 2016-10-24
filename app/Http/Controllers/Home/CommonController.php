<?php

namespace App\Http\Controllers\Home;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Crypt;
use App\Http\Model\User;
class CommonController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function sendmsg(Request $request,$phone = null){
        if ($phone === null){
            $array = array(
                "result" => "error",
                "reason" => "参数不全"
            );
            return json_encode($array);
        }
        $array = array(
            "result" => "",
            "reason" => ""
        );
        $r = User::where('phone',$phone)->first();
        if ($r != null){
            $array['result'] = "error";
            $array['reason'] = "账号已经存在";
                return json_encode($array);
        }
        $length = 6;
        $time = time();
        //生成6位随机验证码
        $code = str_pad(mt_rand(0, pow(10, $length) - 1), $length, '0', STR_PAD_LEFT);
        //发送验证码
        $statusStr = array(
            "0" => "短信发送成功",
            "-1" => "参数不全",
            "-2" => "服务器空间不支持,请确认支持curl或者fsocket，联系您的空间商解决或者更换空间！",
            "30" => "密码错误",
            "40" => "账号不存在",
            "41" => "余额不足",
            "42" => "帐户已过期",
            "43" => "IP地址限制",
            "50" => "内容含有敏感词"
        );
        $smsapi = "http://api.smsbao.com/";
        $user = "xiaozhege"; //短信平台帐号
        $pass = md5("wenanzhe"); //短信平台密码
        $content="【学霸圈】您的验证码为".$code."，在5分钟内有效";//要发送的短信内容
        $phone = $phone;//要发送短信的手机号码
        $sendurl = $smsapi."sms?u=".$user."&p=".$pass."&m=".$phone."&c=".urlencode($content);
        $result =file_get_contents($sendurl);
        if ($result === '0'){
            $array['result'] = "success";
            $array['reason'] = $statusStr[$result];
            $sess = array(
                "phone" => $phone,
                "code" =>$code,
                "addtime" => $time
            );
            session($sess);
        }else{
            $array['result'] = "error";
            $array['reason'] = $statusStr[$result];
        }
        return json_encode($array);
    }
}
