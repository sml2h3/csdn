@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-sm-12 col-md-3">
        <div class="xe-widget xe-counter-block xe-counter-block-blue" data-suffix="k" data-count=".num" data-from="0" data-to="310" data-duration="4" data-easing="false">
            <div class="xe-upper">

                <div class="xe-icon">
                    <i class="linecons-user"></i>
                </div>
                <div class="xe-label">
                    <strong class="num">310k</strong>
                    <span>已注册用户</span>
                </div>

            </div>
            <div class="xe-lower">
                <div class="border"></div>

                <span>已实名认证</span>
                <strong>20</strong>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-3">
        <div class="xe-widget xe-counter-block" data-count=".num" data-from="0" data-to="99.9" data-suffix="%" data-duration="2">
            <div class="xe-upper">

                <div class="xe-icon">
                    <i class="linecons-cloud"></i>
                </div>
                <div class="xe-label">
                    <strong class="num">9922</strong>
                    <span>网站访问量</span>
                </div>

            </div>
            <div class="xe-lower">
                <div class="border"></div>

                <span>今日</span>
                <strong>3490</strong>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-3">
        <div class="xe-widget xe-progress-counter xe-progress-counter-pink" data-count=".num" data-from="0" data-to="12425" data-duration="2">
            <div class="xe-upper">

                <div class="xe-icon">
                    <i class="linecons-heart"></i>
                </div>
                <div class="xe-label">
                    <strong class="num">243</strong>
                    <span>本站文章</span>
                </div>

            </div>
            <div class="xe-lower">
                <div class="border"></div>
                <span>今日阅读量</span>
                <strong>76</strong>
            </div>

        </div>
    </div>
    <div class="col-sm-12 col-md-3">
        <div class="xe-widget xe-counter-block xe-counter-block-orange">
            <div class="xe-upper">

                <div class="xe-icon">
                    <i class="fa-life-ring"></i>
                </div>
                <div class="xe-label">
                    <strong class="num">232</strong>
                    <span>Wiki</span>
                </div>

            </div>
            <div class="xe-lower">
                <div class="border"></div>

                <span>今日阅读量</span>
                <strong data-count="this" data-from="0" data-to="14215" data-duration="2">14,215</strong>
            </div>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <strong>网站配置项</strong>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Content</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>网站域名:端口</td>
                    <td>{{ $_SERVER['SERVER_NAME'] }}:{{ $_SERVER['SERVER_PORT'] }}</td>
                </tr>
                <tr>
                    <td>SERVER</td>
                    <td>{{ $_SERVER['SERVER_SOFTWARE'] }}</td>
                </tr>
                <tr>
                    <td>HTTP_ACCEPT_LANGUAGE</td>
                    <td>{{ $_SERVER['HTTP_ACCEPT_LANGUAGE'] }}</td>
                </tr>
                <tr>
                    <td>HTTP_ACCEPT_ENCODING</td>
                    <td>{{ $_SERVER['HTTP_ACCEPT_ENCODING'] }}</td>
                </tr>
                <tr>
                    <td>HTTP_USER_AGENT</td>
                    <td>{{ $_SERVER['HTTP_USER_AGENT'] }}</td>
                </tr>
                <tr>
                    <td>当前时间</td>
                    <td>{{ date("Y-m-d h:i:s",time()) }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    @endsection