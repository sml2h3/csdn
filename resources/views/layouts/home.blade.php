<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>天津工业大学CSDN俱乐部</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <link rel="icon" type="image/png" href="{{ asset('assets/i/favicon.png') }}">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="{{ asset('assets/i/app-icon72x72@2x.png') }}">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/i/app-icon72x72@2x.png') }}">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="{{ asset('assets/i/app-icon72x72@2x.png') }}">
    <meta name="msapplication-TileColor" content="#0e90d2">

    <link rel="stylesheet" href="{{ asset('assets/css/amazeui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">
    <script src="{{ asset('assets/js/jquery-3.1.1.min.js') }}"></script>
</head>
<body>
<header class="am-topbar am-topbar-inverse" >
    <h1 class="am-topbar-brand">
        <a href="#">CSDN天工大俱乐部</a>
    </h1>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#csdn-topbar'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="csdn-topbar">
        <ul class="am-nav am-nav-pills am-topbar-nav">
            <li class="am-active"><a href="#">首页</a></li>
            <li><a href="list">快讯</a></li>
            <li class="am-dropdown" data-am-dropdown>
                <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                    俱乐部 <span class="am-icon-caret-down"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li><a href="#">竞赛专区</a></li>
                    <li><a href="#">ACM专区</a></li>
                    <li><a href="#">大数据专区</a></li>
                    <li><a href="#">人工智能专区</a></li>
                    <li><a href="#">VR专区</a></li>
                    <li><a href="#">专业学习专区</a></li>
                </ul>
            </li>
            <li><a href="#">资源共享</a></li>
            <li><a href="#">内部福利</a></li>
            <li><a href="#">WIKI</a></li>
        </ul>

        <!--<form class="am-topbar-form am-topbar-left am-form-inline" role="search">-->
        <!--<div class="am-form-group">-->
        <!--<input type="text" class="am-form-field am-input-sm" placeholder="站内搜索">-->
        <!--</div>-->
        <!--</form>-->

        <div class="am-topbar-right">
            <div class="am-dropdown" data-am-dropdown="{boundary: '.am-topbar'}">
                <button class="am-btn am-btn-secondary am-topbar-btn am-btn-sm am-dropdown-toggle" data-am-dropdown-toggle>其他 <span class="am-icon-caret-down"></span></button>
                <ul class="am-dropdown-content">
                    <li><a href="#" data-am-modal="{target:'#reg',closeViaDimmer: 0,width:400,height:550}">注册</a></li>
                    <li><a href="#">申请发表文章</a></li>
                </ul>
            </div>
        </div>

        <div class="am-topbar-right">
            <button class="am-btn am-btn-default am-topbar-btn am-btn-sm" data-am-modal="{target: '#login', closeViaDimmer: 0, width: 400, height: 225}">登录</button>
        </div>
    </div>
</header>
@yield('content')
<!--<div class="am-g">-->
<div class="footer">
    <div class="am-g am-g-fixed">
        <div class="am-u-md-5 am-u-lg-5 copyright">
            <h1>CSDN天工大俱乐部</h1>
            <p>
                <a href="#" style="color:red">加入我们</a>
                <span>|</span
                <a href="#" style="color:#fff">csdn</a>
                <br>
                <strong>
                    ©2005-2016 PHPChina.All Rights Reserved ( <a href=""> 津ICP备10001600号-21</a> )
                </strong>
                <br>
                <strong>
                    版权归 天津蚁尚有限公司 所有 | 基于PHP技术构建 | 本站使用阿里云
                </strong>
            </p>
        </div>
        <div class="am-u-md-7 am-u-lg-7 am-hide-sm-only qcode">
            <div>
                <img src="assets/images/csdn.png" alt=""><br>
                <span>官方网址</span>
            </div>
        </div>
    </div>
</div>
<!--</div>-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="{{ asset('assets/js/amazeui.ie8polyfill.min.js') }}"></script>
<![endif]-->
<script src="{{ asset('assets/js/amazeui.min.js') }}"></script>
</body>
</html>