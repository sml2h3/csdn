<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\System;
use Illuminate\Support\Facades\Input;
class SetController extends Controller
{
    public function set(){
        $webtitle = Input::get('title');
        $webkey = Input::get('key');
        $webdescrib = Input::get('describ');
        $webopen = Input::get('isopen');
        $weblogo = Input::file('logo');
        $weblogo = $this->upload($weblogo);
        System::where('name','webtitle')->update(['content'=>$webtitle]);
        System::where('name','webkey')->update(['content'=>$webkey]);
        System::where('name','webdescribe')->update(['content'=>$webdescrib]);
        System::where('name','webopen')->update(['content'=>$webopen]);
        System::where('name','weblogo')->update(['content'=>$weblogo]);
        return back();
    }
}
