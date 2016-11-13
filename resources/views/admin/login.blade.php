<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>天津工业大学-CSDN俱乐部后台管理系统</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <!--[if IE]>
    <script src="http://libs.baidu.com/html5shiv/3.7/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
<article class="htmleaf-container">
    <div class="panel-lite">
        <form action="{{ asset('admin/login') }}" method="post">
            {{ csrf_field() }}
        <div class="thumbur">
            <div class="icon-lock"></div>
        </div>
        <h4>用户登录</h4>
        <div class="form-group">
            <input required="required" class="form-control" name="username"/>
            <label class="form-label">用户名</label>
        </div>
        <div class="form-group">
            <input type="password" required="required" class="form-control" name="password"/>
            <label class="form-label">密　码</label>
        </div><a href="#">忘记密码 ?  </a>
        <button type="submit" class="floating-btn"><i class="icon-arrow"></i></button>
        </form>
    </div>

</article>

</body>
</html>