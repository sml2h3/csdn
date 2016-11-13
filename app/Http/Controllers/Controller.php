<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function upload($file){
        $clientName = $file -> getClientOriginalName();

        $tmpName = $file ->getFileName();

        $realPath = $file -> getRealPath();

        $extension = $file -> getClientOriginalExtension(); //上传文件的后缀.

        $mimeTye = $file -> getMimeType();

        //如果你这样写的话,默认是会放置在 我们 public/storage/uploads/php79DB.tmp

        $newName = md5(date('ymdhis').$clientName).".".$extension;

        $path = $file -> move('img',$newName);

        return $path;
        //这里app_path()就是app文件夹所在的路径.$newName 可以是你通过某种算法获得的文件的名称.主要是不能重复产生冲突即可.   比如 $newName = md5(date('ymdhis').$clientName).".".$extension;
    }
}
