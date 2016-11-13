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
                    <li><a href="list">竞赛专区</a></li>
                    <li><a href="list">ACM专区</a></li>
                    <li><a href="list">大数据专区</a></li>
                    <li><a href="list">人工智能专区</a></li>
                    <li><a href="list">VR专区</a></li>
                    <li><a href="list">专业学习专区</a></li>
                </ul>
            </li>
            <li><a href="tool">资源共享</a></li>
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
<footer class="footer">
    <div class="am-g am-g-fixed">
        <div class="am-u-md-5 am-u-lg-5 copyright">
            <h1>CSDN天工大俱乐部</h1>
            <p>
                <a href="#" style="color:red">加入我们</a>
                <span>|</span>
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
</footer>
<div id="model" >
    <div class="am-modal am-modal-no-btn" tabindex="-1" id="login">
        <div class="am-modal-dialog">
            <div class="am-modal-hd">用户登录
                <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
            </div>
            <div class="am-modal-bd">
                <form class="am-form am-form-horizontal">
                    {{ csrf_field() }}
                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label" for="loginuser">用户名</label>
                        <div class="am-u-sm-9">
                            <input type="text" class="am-form-field am-radius" id="loginuser" placeholder="用户名/邮箱/电话">
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="loginpass" class="am-u-sm-3 am-form-label">密码</label>
                        <div class="am-u-sm-9">
                            <input type="text" id="loginpass" class="am-form-field am-radius" placeholder="登录密码">
                        </div>
                    </div>
                    <div class="am-form-group">
                        <button class="am-btn am-btn-primary" id="login_btn">登录</button>
                        <button class="am-btn am-btn-link" id="nothas">没有账号？立即注册</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="am-modal am-modal-no-btn" tabindex="-1" id="reg">
        <div class="am-modal-dialog">
            <div class="am-modal-hd">
                用户注册
                <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
            </div>
            <div class="am-modal-bd">
                <form class="am-form">
                    <div class="am-form-group">
                        <label for="phone">手机号</label>
                        <div class="am-input-group">
                            <input type="phone" class="am-form-field" id="phone" placeholder="手机号">
                            <span class="am-input-group-btn">
                                    <button class="am-btn am-btn-default btn-sch" type="button" id="code_btn"><span class="am-icon-paper-plane-o"></span> </button>
                                </span>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <div class="am-form-group">
                        <label for="phonecode">验证码</label>
                        <input type="text" class="am-form-field" id="phonecode" placeholder="手机短信验证码">
                    </div>
                    <div class="am-form-group">
                        <label for="email">邮箱</label>
                        <input type="email" class="am-form-field" id="email" placeholder="请输入您的邮箱">
                    </div>
                    <div class="am-form-group">
                        <label for="pass">密码</label>
                        <input type="password" class="am-form-field" id="pass" placeholder="请输入您的密码">
                    </div>
                    <div class="am-form-group">
                        <label for="repeatpass">重复密码</label>
                        <input type="password" class="am-form-field" id="repeatpass" placeholder="请重新输入密码">
                    </div>
                    <div class="am-form-group">
                        <button class="am-btn am-btn-primary" id="reg_btn">注册</button>
                        <button class="am-btn am-btn-default">返回</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="am-modal am-modal-loading am-modal-no-btn" tabindex="-1" id="loading">
        <div class="am-modal-dialog">
            <div class="am-modal-hd" id="loading_title">正在载入...</div>
            <div class="am-modal-bd">
                <span class="am-icon-spinner am-icon-spin"></span>
            </div>
        </div>
    </div>
    <div class="am-modal am-modal-alert" tabindex="-1" id="alert">
        <div class="am-modal-dialog">
            <div class="am-modal-hd">登录失败</div>
            <div class="am-modal-bd" id="re">

            </div>
            <div class="am-modal-footer">
                <span class="am-modal-btn">关闭</span>
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
<script type="text/javascript">
    var time = 60;
    $('#login_btn').click(function(){
        var username = $('#loginuser').val();
        var password = $('#loginpass').val();
        var token = $('input[name=_token]:eq(0)').val();
        $('#login').modal("close");
        $('#loading_title').html("正在登录");
        $('#loading').modal("open");
        //ajax
        $.ajax({
            url:"login",
            type:"post",
            data:{
                _token:token,
                username:username,
                password:password
            }
        })
        setTimeout(function(){
            $('#loading').modal('close')
        },2000)
    })
    $('#code_btn').click(function(){
        var phone = $('#phone').val();
        if(phone == ""||phone ==null){
            $('#phone').parent().parent().addClass("am-form-error");
            return;
        }
        $('#code_btn span').attr("class","am-icon-spinner am-icon-spin");
        $.ajax({
            url:"code/"+phone,
            type:"get",
            success:function(result){
                console.log(result);
                var data = jQuery.parseJSON(result);

                if(data.result == 'error'){
                    $('#re').html(data.reason);
                    $('#code_btn span').attr('class','am-icon-paper-plane-o').html("");
                    $('#reg form').reset();
                    $('#reg').modal("close");
                    $('#alert').modal("open");
                }else{
                    $('#code_btn span').attr("class","");
                    $('#code_btn').attr("disabled","");
                    var val = setInterval(function(){
                        $('#code_btn span').html(time);
                        time --;
                        if(time<0){
                            clearInterval(val);
                            $('#code_btn').attr("disabled",false);

                        }
                    },1000)
                }
            }
        })
    })
    $('#reg_btn').click(function(){
        var phone = $('#phone').val();
        var code = $('#phonecode').val();
        var email = $('#email').val();
        var pass = $('#pass').val();
        var repeatpass = $('#repeatpass').val();
        var token = $('input[name=_token]:eq(1)').val();
        if(!email.match(/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/))
        {
            $('email').parent().addClass("am-form-error");
            return;
        }
        if(pass != repeatpass){
            $('#repeatpass').parent().addClass("am-form-error");
            return;
        }
        if(code.length != 6){
            $('#code').parent().addClass("am-form-error");
            return;
        }
//            $('#reg form');
        $('#reg').modal("close");
        $('#loading_title').html("正在注册");
        $('#loading').modal("open");
        $.ajax({
            url:"/reg",
            type:"post",
            data:{
                _token:token,
                phone:phone,
                code:code,
                email:email,
                pass:pass,
            },
            success:function(result){
                var data = jQuery.parseJSON(result);
                $('#loading').modal("close");
                if(data.result == 'success'){
                    location.reload();
                }else{
                    $('#re').html(data.reason);
                    $('#alert').modal("open");
                }
            }
        })
    })
    $('#nothas').click(function(){
        $('#login').modal("close");
        $('#reg').modal("open");
    })
    $('.am-form-field').click(function(){
        $(this).parents(".am-form-error").removeClass("am-form-error");
    })
</script>
</body>
</html>