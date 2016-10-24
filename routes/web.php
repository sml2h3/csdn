<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home.index');
});
Route::get('/index', function () {
    return view('home.index');
});
Route::get('/list',function(){
    return view('home.news');
});
//发送验证码短信,存于session中,基于addtime进行时间验证
Route::get("code/{phone}","Home\CommonController@sendmsg");
//注册
Route::post('reg',"Home\UserController@reg");
//登录
Route::post('login',"Home\UserController@login");
//验证注册链接
Route::get('user/verfy/{code}',"Home\UserController@verfy");
//Route::get('test',"Home\UserController@test");