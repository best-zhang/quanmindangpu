<!DOCTYPE html>
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 1.0.0
Purchase: http://wrapbootstrap.com
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->
<head>
    <meta charset="utf-8"/>
    <title>已投项目</title>

    <meta name="description" content="form validation"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="assets/img/favicon.png"
          type="image/x-icon">

    <!--Basic Styles-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link id="bootstrap-rtl-link" href="" rel="stylesheet"/>
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="assets/css/weather-icons.min.css" rel="stylesheet"/>

    <!--Beyond styles-->
    <link id="beyond-link" href="assets/css/beyond.min.css" rel="stylesheet"/>
    <link href="assets/css/demo.min.css" rel="stylesheet"/>
    <link href="assets/css/typicons.min.css" rel="stylesheet"/>
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <link id="skin-link" href="" rel="stylesheet" type="text/css"/>

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="assets/js/skins.min.js"></script>

    <style type="text/css">
        body:before, .page-body {
            background: #ffffff;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Microsoft YaHei', 'Open Sans', 'Segoe UI';
        }

        .navbar {
            font-size: 17px;
            height: auto;
        }

        .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover,
        .navbar-default .navbar-nav > .active > a:focus {
            color: #ff000c;
            background-color: rgba(255, 255, 255, 0);
        }

        .navbar-default .navbar-nav > li > a:hover {
            color: #ff000c;
            border-bottom: solid 2px #16caff;
        }

        .navbar-default .navbar-nav > li > a {
            color: #060606;
        }

        .navbar .navbar-brand {
            padding: 15px;
            color: #666666;
        }

        .navbar .pull-right {
            font-size: 13px;
            line-height: 50px;
        }

        .well-nav {
            max-width: 250px;
            background-color: #EBF5EA;
        }

        .well-nav .nav-title {
            background-color: #0099FF;
            font-size: 16px;
            font-weight: bold;
            padding: 5px;
        }

        .well-nav .nav-link a {
            font-size: 14px;
            color: #000000;
        }

        .well-detail .prolabel {
            font-size: 15px;
            margin-top: 10px;
        }

        .well-detail .row {
            margin: 20px 10px;
        }

        .well-detail .proname {
            margin-bottom: 10px;
            margin-top: 10px;
            font-size: 16px;
            font-weight: bold;
        }

        .well-detail .label {
            font-size: 16px;
        }

        .proday {
            font-size: 40px;
            padding-left: 10px;
            padding-right: 10px;
            color: #d58512;
        }
    </style>
</head>
<!-- /Head -->
<!-- Body -->
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header margin-right-50">
            <a class="navbar-brand" href="#">全民当铺</a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index">首页</a></li>
                <li><a href="about">关于我们</a></li>
                <li><a href="shopindex" target="_blank">当铺商城</a></li>
            </ul>
        </div>

        <div class="pull-right">
            欢迎您，<span>库伊特</span> <span class="margin-left-10"> <a
                href="index">退出</a>
				</span>
        </div>
    </div>
</nav>
<!-- Main Container -->
<div class="page-body">
    <div class="row margin-top-50">
        <div class="contianer">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
                <div class="well well-nav text-center no-padding padding-top-10">
                    <div class="img-user-header">
                        <img src="assets/img/avatars/John-Smith.jpg" class="img-circle">
                    </div>
                    <div class="margin-top-20 nav-title">个人信息</div>
                    <div class="nav-link padding-5">
                        <a href="_userupdate.html">个人资料</a>
                    </div>
                    <div class="nav-link padding-5">
                        <a href="_userpwd.html">密码修改</a>
                    </div>
                    <div class="margin-top-10 nav-title">盈利分析</div>
                    <div class="nav-link padding-5">
                        <a href="_lowerlist.html">人员列表</a>
                    </div>
                    <div class="nav-link padding-5">
                        <a href="_lowerarch.html">人员架构</a>
                    </div>
                    <div class="margin-top-10 nav-title">项目支持</div>
                    <div class="nav-link padding-10">
                        <a href="_userpro.html">已投项目</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                <div class="row well well-detail">
                    <div class="row well no-padding">
                        <div class="col-lg-3 col-md-3 col-sm-6 no-padding">
                            <img src="assets/img/avatars/John-Smith.jpg" width=180
                                 height=180/>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-6 padding-20">
                            <div class="proname">项目名称</div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar"
                                     aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                     style="width: 60%">
                                    <span>60%</span>
                                </div>
                            </div>
                            <div class="prolabel">目标: ￥3,000,000</div>
                            <div class="prolabel">起投: ￥3,000,000</div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 padding-top-20 text-center">
                            <div class="prolabel"><span class="label label-info">筹备中</span></div>
                            <div class="prolabel">剩余时间</div>
                            <div class="prolabel">
                                <span class="proday">10</span>天
                            </div>
                        </div>
                    </div>

                    <div class="row well no-padding">
                        <div class="col-lg-3 col-md-3 col-sm-6 no-padding">
                            <img src="assets/img/avatars/John-Smith.jpg" width=200
                                 height=200/>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-6 padding-20">
                            <div class="proname">项目名称</div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar"
                                     aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                     style="width: 60%">
                                    <span>60%</span>
                                </div>
                            </div>
                            <div class="prolabel">目标: ￥3,000,000</div>
                            <div class="prolabel">起投: ￥3,000,000</div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 padding-top-20 text-center">
                            <div class="prolabel"><span class="label label-info">筹备中</span></div>
                            <div class="prolabel">剩余时间</div>
                            <div class="prolabel">
                                <span class="proday">10</span>天
                            </div>
                        </div>
                    </div>

                    <div class="row well no-padding">
                        <div class="col-lg-3 col-md-3 col-sm-6 no-padding">
                            <img src="assets/img/avatars/John-Smith.jpg" width=200
                                 height=200/>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-6 padding-20">
                            <div class="proname">项目名称</div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar"
                                     aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                     style="width: 60%">
                                    <span>60%</span>
                                </div>
                            </div>
                            <div class="prolabel">目标: ￥3,000,000</div>
                            <div class="prolabel">起投: ￥3,000,000</div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 padding-top-20 text-center">
                            <div class="prolabel"><span class="label label-info">筹备中</span></div>
                            <div class="prolabel">剩余时间</div>
                            <div class="prolabel">
                                <span class="proday">10</span>天
                            </div>
                        </div>
                    </div>

                    <div class="row well no-padding">
                        <div class="col-lg-3 col-md-3 col-sm-6 no-padding">
                            <img src="assets/img/avatars/John-Smith.jpg" width=200
                                 height=200/>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-6 padding-20">
                            <div class="proname">项目名称</div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar"
                                     aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                     style="width: 60%">
                                    <span>60%</span>
                                </div>
                            </div>
                            <div class="prolabel">目标: ￥3,000,000</div>
                            <div class="prolabel">起投: ￥3,000,000</div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 padding-top-20 text-center">
                            <div class="prolabel"><span class="label label-info">筹备中</span></div>
                            <div class="prolabel">剩余时间</div>
                            <div class="prolabel">
                                <span class="proday">10</span>天
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!--Basic Scripts-->
<script src="assets/js/jquery-2.0.3.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!--Beyond Scripts-->
<script src="assets/js/beyond.min.js"></script>

<script>
    $(document).ready(function () {

    });
</script>
</body>
<!--  /Body -->
</html>
