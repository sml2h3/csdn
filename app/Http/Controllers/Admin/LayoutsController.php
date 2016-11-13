<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\Nav;
use App\Http\Model\NavPer;
use App\Http\Model\Admin;
use App\Http\Model\System;
class LayoutsController extends Controller
{
    public $nav;

    protected function getnav(){
        $tem = array();
        $array = array();
        //获取权限的列表nav
        $username = session('username');
        $uidres = Admin::where("admin_username",$username)->first();
        $uid = $uidres['Id'];
        $is_admin = $uidres['is_admin'];
        $result = NavPer::where('uid',$uid)->first();
        $navall = Nav::all()->toArray();
        if (!$is_admin){
            $navjson = $result['permission_json'];
            $navlist = json_decode($navjson,true);
            foreach ($navall as $x => $ob){
                $nid = $ob["Id"];
                if ($navlist[$nid]){
                    $tem[] = $ob;
                }
            }
        }else{
            $tem = Nav::all()->toArray();
        }
        foreach ($tem as $nid => $v){
            if ($v['nav_level'] == '0'){
                $array['height'][] = $v;
            }else{
                $array['son'][$v['nav_parent']][] = $v;
            }
        }
        return $array;
    }
    public function login(){
        return view('admin.login');
    }
    public function main(){
//        return $this->getnav();
        return view('admin.main',['nav'=>$this->getnav()]);
    }
    public function syset(){
        $result = System::all();
        foreach ($result as $Id =>$content){
            $arr[$content['name']] = $content['content'];
        }
        return view('admin.syset',['nav'=>$this->getnav(),'page'=>'syset','config'=>$arr]);
    }
}
