@extends('layouts.home')
@section('content')
    <style>
        #tagsList {
            position: relative;
            width: 250px;
            height: 250px;
            /*margin: 150px auto 0;*/
        }
        #tagsList a {
            position: absolute;
            top: 0px;
            left: 0px;
            font-family: Microsoft YaHei;
            color: #000;
            font-weight: bold;
            text-decoration: none;
            padding: 3px 6px;
        }
        #tagsList a:hover {
            color: #FF0000;
            letter-spacing: 2px;
        }
    </style>
    <div class="am-g am-g-fixed">
        <div class="am-u-md-9 am-u-sm-12 am-u-lg-9">
            <div class="am-u-sm-12" style="padding-left: 0px;">
                <ol class="am-breadcrumb">
                    <li><a href="index">首页</a></li>
                    <li><a href="index/cate/">分类</a></li>
                    <li class="am-active">内容</li>
                </ol>
            </div>
            <div class="am-u-sm-12 list_box">
                <ul>
                    <li>
                        <div class="pic am-u-sm-12 am-u-md-3 am-u-lg-3">
                            <img src="{{ asset('assets/images/pic.jpg') }}" width="100%" height="100%" alt="">
                            <p>
                                <a href="">今日快讯</a>
                            </p>
                        </div>
                        <div class="info am-u-sm-12 am-u-md-9 am-u-lg-9">
                            <h3><a href="">用PYTHON进行爬虫获得结果</a></h3>
                            <p class="descript">声明：采集程序只做技术研究使用，切不可做出格的事以免惹来麻烦首先感谢广大网友的支持，现将源代码公开，地址如下：https://github.com/owner888/phpspidergithub地址的demo目录下的 mafengwo.php 和 mafengwo.sql ...</p>
                            <p class="time">2016-10-18 09:05:00</p>
                        </div>
                    </li>
                    <li>
                        <div class="pic am-u-sm-12 am-u-md-3 am-u-lg-3">
                            <img src="{{ asset('assets/images/pic.jpg') }}" width="100%" height="100%" alt="">
                            <p>
                                <a href="">今日快讯</a>
                            </p>
                        </div>
                        <div class="info am-u-sm-12 am-u-md-9 am-u-lg-9">
                            <h3><a href="">用PYTHON进行爬虫获得结果</a></h3>
                            <p class="descript">声明：采集程序只做技术研究使用，切不可做出格的事以免惹来麻烦首先感谢广大网友的支持，现将源代码公开，地址如下：https://github.com/owner888/phpspidergithub地址的demo目录下的 mafengwo.php 和 mafengwo.sql ...</p>
                            <p class="time">2016-10-18 09:05:00</p>
                        </div>
                    </li>
                    <li>
                        <div class="pic am-u-sm-12 am-u-md-3 am-u-lg-3">
                            <img src="{{ asset('assets/images/pic.jpg') }}" width="100%" height="100%" alt="">
                            <p>
                                <a href="">今日快讯</a>
                            </p>
                        </div>
                        <div class="info am-u-sm-12 am-u-md-9 am-u-lg-9">
                            <h3><a href="">用PYTHON进行爬虫获得结果</a></h3>
                            <p class="descript">声明：采集程序只做技术研究使用，切不可做出格的事以免惹来麻烦首先感谢广大网友的支持，现将源代码公开，地址如下：https://github.com/owner888/phpspidergithub地址的demo目录下的 mafengwo.php 和 mafengwo.sql ...</p>
                            <p class="time">2016-10-18 09:05:00</p>
                        </div>
                    </li>
                    <li>
                        <div class="pic am-u-sm-12 am-u-md-3 am-u-lg-3">
                            <img src="{{ asset('assets/images/pic.jpg') }}" width="100%" height="100%" alt="">
                            <p>
                                <a href="">今日快讯</a>
                            </p>
                        </div>
                        <div class="info am-u-sm-12 am-u-md-9 am-u-lg-9">
                            <h3><a href="">用PYTHON进行爬虫获得结果</a></h3>
                            <p class="descript">声明：采集程序只做技术研究使用，切不可做出格的事以免惹来麻烦首先感谢广大网友的支持，现将源代码公开，地址如下：https://github.com/owner888/phpspidergithub地址的demo目录下的 mafengwo.php 和 mafengwo.sql ...</p>
                            <p class="time">2016-10-18 09:05:00</p>
                        </div>
                    </li>
                    <li>
                        <div class="pic am-u-sm-12 am-u-md-3 am-u-lg-3">
                            <img src="{{ asset('assets/images/pic.jpg') }}" width="100%" height="100%" alt="">
                            <p>
                                <a href="">今日快讯</a>
                            </p>
                        </div>
                        <div class="info am-u-sm-12 am-u-md-9 am-u-lg-9">
                            <h3><a href="">用PYTHON进行爬虫获得结果</a></h3>
                            <p class="descript">声明：采集程序只做技术研究使用，切不可做出格的事以免惹来麻烦首先感谢广大网友的支持，现将源代码公开，地址如下：https://github.com/owner888/phpspidergithub地址的demo目录下的 mafengwo.php 和 mafengwo.sql ...</p>
                            <p class="time">2016-10-18 09:05:00</p>
                        </div>
                    </li>
                    <li>
                        <div class="pic am-u-sm-12 am-u-md-3 am-u-lg-3">
                            <img src="{{ asset('assets/images/pic.jpg') }}" width="100%" height="100%" alt="">
                            <p>
                                <a href="">今日快讯</a>
                            </p>
                        </div>
                        <div class="info am-u-sm-12 am-u-md-9 am-u-lg-9">
                            <h3><a href="">用PYTHON进行爬虫获得结果</a></h3>
                            <p class="descript">声明：采集程序只做技术研究使用，切不可做出格的事以免惹来麻烦首先感谢广大网友的支持，现将源代码公开，地址如下：https://github.com/owner888/phpspidergithub地址的demo目录下的 mafengwo.php 和 mafengwo.sql ...</p>
                            <p class="time">2016-10-18 09:05:00</p>
                        </div>
                    </li>
                    <li>
                        <div class="pic am-u-sm-12 am-u-md-3 am-u-lg-3">
                            <img src="{{ asset('assets/images/pic.jpg') }}" width="100%" height="100%" alt="">
                            <p>
                                <a href="">今日快讯</a>
                            </p>
                        </div>
                        <div class="info am-u-sm-12 am-u-md-9 am-u-lg-9">
                            <h3><a href="">用PYTHON进行爬虫获得结果</a></h3>
                            <p class="descript">声明：采集程序只做技术研究使用，切不可做出格的事以免惹来麻烦首先感谢广大网友的支持，现将源代码公开，地址如下：https://github.com/owner888/phpspidergithub地址的demo目录下的 mafengwo.php 和 mafengwo.sql ...</p>
                            <p class="time">2016-10-18 09:05:00</p>
                        </div>
                    </li>
                    <li>
                        <div class="pic am-u-sm-12 am-u-md-3 am-u-lg-3">
                            <img src="{{ asset('assets/images/pic.jpg') }}" width="100%" height="100%" alt="">
                            <p>
                                <a href="">今日快讯</a>
                            </p>
                        </div>
                        <div class="info am-u-sm-12 am-u-md-9 am-u-lg-9">
                            <h3><a href="">用PYTHON进行爬虫获得结果</a></h3>
                            <p class="descript">声明：采集程序只做技术研究使用，切不可做出格的事以免惹来麻烦首先感谢广大网友的支持，现将源代码公开，地址如下：https://github.com/owner888/phpspidergithub地址的demo目录下的 mafengwo.php 和 mafengwo.sql ...</p>
                            <p class="time">2016-10-18 09:05:00</p>
                        </div>
                    </li>
                    <li>
                        <div class="pic am-u-sm-12 am-u-md-3 am-u-lg-3">
                            <img src="{{ asset('assets/images/pic.jpg') }}" width="100%" height="100%" alt="">
                            <p>
                                <a href="">今日快讯</a>
                            </p>
                        </div>
                        <div class="info am-u-sm-12 am-u-md-9 am-u-lg-9">
                            <h3><a href="">用PYTHON进行爬虫获得结果</a></h3>
                            <p class="descript">声明：采集程序只做技术研究使用，切不可做出格的事以免惹来麻烦首先感谢广大网友的支持，现将源代码公开，地址如下：https://github.com/owner888/phpspidergithub地址的demo目录下的 mafengwo.php 和 mafengwo.sql ...</p>
                            <p class="time">2016-10-18 09:05:00</p>
                        </div>
                    </li>
                    <li>
                        <div class="pic am-u-sm-12 am-u-md-3 am-u-lg-3">
                            <img src="{{ asset('assets/images/pic.jpg') }}" width="100%" height="100%" alt="">
                            <p>
                                <a href="">今日快讯</a>
                            </p>
                        </div>
                        <div class="info am-u-sm-12 am-u-md-9 am-u-lg-9">
                            <h3><a href="">用PYTHON进行爬虫获得结果</a></h3>
                            <p class="descript">声明：采集程序只做技术研究使用，切不可做出格的事以免惹来麻烦首先感谢广大网友的支持，现将源代码公开，地址如下：https://github.com/owner888/phpspidergithub地址的demo目录下的 mafengwo.php 和 mafengwo.sql ...</p>
                            <p class="time">2016-10-18 09:05:00</p>
                        </div>
                    </li>
                </ul>
                <div class="more">
                    <input type="hidden" id="list_count">
                    <input type="hidden" id="list_catid">
                    <a href="javascript:;" id="more_btn">加载更多</a>
                </div>
                <div class="am-u-md-12 am-u-lg-12 am-u-sm-12 link">
                    <div class="link_box am-u-sm-3 am-u-md-2 am-u-lg-2">
                        <span class="am-text-break">版权申明</span>
                    </div>
                    <div class="link_content am-u-sm-9 am-u-md-10 am-u-lg-10">
                        <p>凡"天工大CSDN俱乐部"所有原创/编译文章及图片、图表的版权均属于"天工大CSDN俱乐部"所有，如需转载，请注明"信息来源：天工大CSDN俱乐部"</p>
                        <p>"天工大CSDN俱乐部"部分文章转自网络，转载目的主要在于传递更多信息，并不代表本俱乐部赞同其观点和对其真实性进行负责，如果您对文章的内容、版权或其它问题有异议，请联系我们</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cate am-u-md-3 am-u-lg-3 am-hide-sm-only">
            <h2>热门分类</h2>
            <div id="tagsList">
                <a href="" title="123">12321312</a>
                <a href="" title="123">12321312</a>
                <a href="" title="123">12321312</a>
                <a href="" title="123">12321312</a>
                <a href="" title="123">12321312</a>
                <a href="" title="123">12321312</a>
                <a href="" title="123">12321312</a>
                <a href="" title="123">12321312</a>
                <a href="" title="123">12321312</a>
                <a href="" title="123">12321312</a>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/tags.js') }}"></script>
    @endsection