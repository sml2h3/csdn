@extends('layouts.home')
@section('content')
    <div class="am-g am-g-fixed">
        <div class="am-u-md-3">
            <div class="am-panel-group" id="navlist">
                <div class="am-panel am-panel-default">
                    <div class="am-panel-hd">
                        <h4 class="am-panel-title" data-am-collapse="{parent:'#navlist',target:'#list_ui' }">
                            前端相关
                        </h4>
                    </div>
                    <div class="am-panel-collapse am-collapse am-in" id="list_ui">
                        <div class="am-panel-bd">
                            <ul class="am-nav">
                                <li><a href="">UI</a></li>
                                <li><a href="">媒体</a></li>
                                <li><a href="">输入</a></li>
                                <li><a href="">导航</a></li>
                                <li><a href="">其他</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="am-panel am-panel-default">
                    <div class="am-panel-hd">
                        <h4 class="am-panel-title" data-am-collapse="{parent:'#navlist',target:'#list_server' }">
                            服务器相关
                        </h4>
                    </div>
                    <div class="am-panel-collapse am-collapse" id="list_server">
                        <div class="am-panel-bd">
                            1
                        </div>
                    </div>
                </div>
                <div class="am-panel am-panel-default">
                    <div class="am-panel-hd">
                        <h4 class="am-panel-title" data-am-collapse="{parent:'#navlist',target:'#list_function' }">
                            后端相关
                        </h4>
                    </div>
                    <div class="am-panel-collapse am-collapse" id="list_function">
                        <div class="am-panel-bd">
                            1312312
                        </div>
                    </div>
                </div>
                <div class="am-panel am-panel-default">
                    <div class="am-panel-hd">
                        <h4 class="am-panel-title" data-am-collapse="{parent:'#navlist',target:'#list_android'}">
                            安卓相关
                        </h4>
                    </div>
                    <div class="am-panel-collapse am-collapse" id="list_android">
                        <div class="am-panel-bd">
                            12312312
                        </div>
                    </div>
                </div>
                <div class="am-panel am-panel-default">
                    <div class="am-panel-hd">
                        <h4 class="am-panel-title" data-am-collapse="{parent:'#navlist',target:'#list_ios'}">
                            IOS相关
                        </h4>
                    </div>
                    <div class="am-panel-collapse am-collapse" id="list_ios">
                        <div class="am-panel-bd">
                            asdasdsa
                        </div>
                    </div>
                </div>
                <button class="am-btn am-btn-block am-btn-primary">我要上传</button>
            </div>
        </div>
        <div class="am-u-md-9">
            <ul class="toolbox">
                <li class="am-u-sm-12 am-u-md-3">
                    <img src="http://s.amazeui.org/media/i/demos/bw-2014-06-19.jpg" width="100%" alt="" class="am-img-thumbnail am-radius">
                    <div class="toolbody">
                        <h2><a href=""><b>我是标题呢</b></a></h2>
                        <h3>使用简单，兼容性强，跨多种终端</h3>
                    </div>
                    <div class="aboutbox">
                        <span class="am-icon am-icon-heart heart"><i>321321</i></span>
                        <span class="am-icon am-icon-eye eye"><i>3213</i></span>
                    </div>
                </li>
                <li class="am-u-sm-12 am-u-md-3">
                    <img src="http://s.amazeui.org/media/i/demos/bw-2014-06-19.jpg" width="100%" alt="" class="am-img-thumbnail am-radius">
                    <div class="toolbody">
                        <h2><a href=""><b>我是标题呢</b></a></h2>
                        <h3>使用简单，兼容性强，跨多种终端</h3>
                    </div>
                    <div class="aboutbox">
                        <span class="am-icon am-icon-heart heart"><i>321321</i></span>
                        <span class="am-icon am-icon-eye eye"><i>3213</i></span>
                    </div>
                </li>
                <li class="am-u-sm-12 am-u-md-3">
                    <img src="http://s.amazeui.org/media/i/demos/bw-2014-06-19.jpg" width="100%" alt="" class="am-img-thumbnail am-radius">
                    <div class="toolbody">
                        <h2><a href=""><b>我是标题呢</b></a></h2>
                        <h3>使用简单，兼容性强，跨多种终端1</h3>
                    </div>
                    <div class="aboutbox">
                        <span class="am-icon am-icon-heart heart"><i>321321</i></span>
                        <span class="am-icon am-icon-eye eye"><i>3213</i></span>
                    </div>
                </li>
                <li class="am-u-sm-12 am-u-md-3">
                    <img src="http://s.amazeui.org/media/i/demos/bw-2014-06-19.jpg" width="100%" alt="" class="am-img-thumbnail am-radius">
                    <div class="toolbody">
                        <h2><a href=""><b>我是标题呢</b></a></h2>
                        <h3>使用简单，兼容性强，跨多种终端</h3>
                    </div>
                    <div class="aboutbox">
                        <span class="am-icon am-icon-heart heart"><i>321321</i></span>
                        <span class="am-icon am-icon-eye eye"><i>3213</i></span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @endsection