@extends('layouts.admin')
@section('content')
    <div class="page-title">

        <div class="title-env">
            <h1 class="title">系统设置</h1>
            <p class="description">系统的基础信息配置</p>
        </div>
        <div class="breadcrumb-env">

            <ol class="breadcrumb bc-1">
                <li class="ms-hover">
                    <a href="index"><i class="fa-home"></i>网站设置</a>
                </li>
                <li class="active">
                    <strong>系统设置</strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>请填写以下设置</h3>
                        </div>
                        <div class="panel-body">
                            <form action="{{ asset('admin/syset/action') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="webtitle">
                                        网站标题设置
                                    </label>
                                    <input type="text" class="form-control" id="webtitle" name="title" placeholder="网站标题设置" value="{{ $config['webtitle'] }}">
                                </div>
                                <div class="form-group">
                                    <label for="webkeywords">
                                        网站关键字(SEO必备)
                                    </label>
                                    <input type="text" class="form-control" id="webkeywords" name="key" placeholder="网站关键字" value="{{ $config['webkey'] }}">
                                </div>
                                <div class="form-group">
                                    <label for="webdescribe">
                                        网站描述
                                    </label>
                                    <textarea type="text" class="form-control" id="webdescribe" name="describ" placeholder="网站描述">{{ $config['webdescrib'] }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="isopen">
                                        网站关闭
                                    </label><br>
                                    <input type="checkbox" id="isopen" name="isopen" class="iswitch iswitch-secondary" {{ $config['webopen'] == 'on' ? 'checked' :'' }}>
                                </div>
                                <div class="form-group">
                                    <label for="logo">
                                        Logo上传
                                    </label><span>{{ $config['weblogo']? '(已上传)' :'(未上传)' }}</span>
                                    <input type="file" class="form-control" name="logo" id="logo">
                                </div>
                                <button type="submit" class="btn btn-blue" id="set">设置</button>
                            </form>
                        </div>
                    </div>
        </div>
    </div>
    @endsection