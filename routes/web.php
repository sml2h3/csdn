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
Route::get('serve',function(){
   return $_SERVER;
});
Route::get('/', function () {
    return view('home.index');
});
Route::get('/index', function () {
    return view('home.index');
});
Route::get('/list',function(){
    return view('home.news');
});
Route::get('/tool',function(){
   return view('home.tool');
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
//Admin Group
Route::group(['prefix'=>'admin','middleware' => ['web','autologin']],function(){
    //admin layouts
    Route::get("/","Admin\LayoutsController@login");
    Route::get("/index","Admin\LayoutsController@login");
});
Route::group(['prefix'=>'admin','middleware' => 'web'],function(){
    //admin layouts
    Route::post("login","Admin\UserController@login");
});
Route::group(['prefix'=>'admin','middleware'=>'verfy'],function(){
    //admin layouts had login
    Route::get('main',"Admin\LayoutsController@main");
    Route::get('syset','Admin\LayoutsController@syset');
});
Route::group(['prefix'=>'admin','middleware'=>'adminapi'],function (){
    Route::post('syset/action',"Admin\SetController@set");
});