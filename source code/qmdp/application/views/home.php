﻿<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

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
    <title>全民当铺</title>

    <meta name="description" content="index"/>
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
            background-color: rgba(230, 230, 230, 1);
            font-size: 17px;
            height: auto;
        }

        .navbar-default .navbar-main > .active > a, .navbar-default .navbar-main > .active > a:hover,
        .navbar-default .navbar-main > .active > a:focus {
            color: #ff3738;
            background-color: rgba(255, 255, 255, 0);
        }

        .navbar-default .navbar-main > li > a:hover {
            color: #ff000c;
            border-bottom: solid 2px #16caff;
            padding-bottom: 13px;
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

        .navbar .pull-right a {
            color: #215ea5;
        }

        .carousel .item img {
            width: 100%;
        }

        .carousel .item {
            height: 600px;
        }

        .raise-item h3 {
            font-size: 23px;
            margin-bottom: 20px;
            padding-top: 50px;
        }

        .img-project {
            width: 100%;
            height: 0px;
            padding-bottom: 100%;
            background-size: 100% 100%;
            background-repeat: no-repeat;
        }

        .label {
            padding: 8px;
        }

        .well {
            box-shadow: 0 0 15px rgba(0, 0, 0, .3);
        }

        .well .row div {
            font-size: 14px;
        }

        .well .item-pname {
            font-size: 18px;
        }

        .well .item-title {
            font-size: 15px;
        }

        .well .item-day {
            font-size: 30px;
            color: #d58512;
        }

        .badge {
            height: auto;
        }

        .footer {
            background-color: #5b5958;
            color: #eeeeee;
        }

        .footer a {
            color: #eeeeee;
            font-size: 15px;
        }

        .footer img {
            height: 100px;
            width: 100px;
        }

        .list-unstyled li {
            padding: 3px;
        }

        .beian {
            background-color: #1e1e1e;
            color: #eeeeee;
        }

        .dropdown .dropdown-toggle {
            line-height: 50px;
        }

        .dropdown-menu {
            min-width: 120px;
        }

        .dropdown .dropdown-menu li a {
            color: #1e1e1e;
        }

        .colored {
            color: red;
        }
    </style>
</head>
<!-- /Head -->
<!-- Body -->
<body>
<nav class="navbar navbar-default navbar-fixed-top hidden-xs" role="navigation">
    <div class="container">
        <div class="navbar-header margin-right-50 no-padding">
            <a class="navbar-brand no-padding" href="home"><img title="全民当铺" src="assets/img/logo.jpg" width="50" height="50"></a>
        </div>
        <div>
            <ul class="nav navbar-nav navbar-main">
                <li class="active"><a href="home">首页</a></li>
                <li><a href="about">关于我们</a></li>
                <li><a href="shopindex" target="_blank">当铺商城</a></li>
            </ul>
        </div>

        <div class="pull-right">
            <?php
            if ($userinfo) {
                echo '<ul class="nav navbar-nav"><li class="dropdown"><a href="#" class="dropdown-toggle no-padding font-110" data-toggle="dropdown"><img src="uploads/' . $userinfo->img . '" class="img-circle margin-right-5" width="40" height="40">' . $userinfo->name . '</a><ul class="dropdown-menu"><li><a href="userinfo">个人资料</a></li><li><a id="logout" onclick="logout();"  href="#">退出</a></li></ul></li></ul>';
            } else {
                echo '<span> <a href="userlogin">登录</a> </span>';
            }
            ?>
        </div>
    </div>
</nav>

<div>
    <div style="height: 50px;"></div>
    <div id="carousel-example-generic" class="carousel slide"
         data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0"
                class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="assets/img/bg1.jpg">
            </div>
            <div class="item">
                <img src="assets/img/bg2.jpg">
            </div>
            <div class="item">
                <img src="assets/img/bg3.jpg">
            </div>
        </div>
    </div>
</div>

<div class="page-body no-padding">
    <div class="raise-item">
        <div class="row">
            <div class="container">
                <h3>近期资助</h3>
                <div id="pro1" class="row padding-top-10">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <h3>即将上线</h3>
                <div id="pro2" class="row padding-top-10">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <h3>完成项目</h3>
                <div id="pro3" class="row padding-top-10">
                </div>
            </div>
        </div>
    </div>
    <div class="row padding-top-50">
        <div class="container padding-top-50">
            <div class="text-center">
                <h2>发现财富的秘密</h2>
            </div>
            <div class="row padding-top-50">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center">
                    <span class="badge badge-sky badge-square padding-20"><h4>关注项目</h4></span>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center">
                    <span class="badge badge-sky badge-square padding-20"><h4>了解项目</h4></span>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center">
                    <span class="badge badge-sky badge-square padding-20"><h4>项目购买</h4></span>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center">
                    <span class="badge badge-sky badge-square padding-20"><h4>协议签署</h4></span>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center">
                    <span class="badge badge-sky badge-square padding-20"><h4>财富实现</h4></span>
                </div>
            </div>
        </div>
    </div>

    <div class="row margin-50 padding-bottom-30">
        <div class="container padding-top-50">
            <div class="text-center">
                <h4>全名当铺众筹项目</h4>
            </div>
        </div>
        <div class="container margin-top-20">
            <div class="text-center">想知道更多关于项目发生</div>
        </div>
        <div class="container margin-top-10">
            <div class="text-center">或开始你自己</div>
        </div>
        <div class="container margin-top-40">
            <div class="text-center">
                <a href="javascript:void(0);" class="btn btn-success">了解更多</a>
            </div>
        </div>
    </div>

    <div class="row padding-50 footer">
        <div class="container">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <h2>全民当铺众筹网</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <ul class="list-unstyled">
                    <li><a href="about">关于我们</a></li>
                    <li><a href="shopindex">当铺商城</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="padding-10 text-align-center beian">蜀ICP备12569350号
        Copyright © 2017 qmdp168.com
    </div>
</div>

<!--Basic Scripts-->
<script src="assets/js/jquery-2.0.3.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!--Beyond Scripts-->
<script src="assets/js/beyond.min.js"></script>

<!--Page Related Scripts-->
<script src="assets/js/_js/home.common.js"></script>

<script>
    $(document).ready(function () {
        getpros1();
        getpros2();
        getpros3();
    });

    function getpros1() {
        $.ajax({
            type: 'POST',
            url: '../home/getProList1',//路径
            data: {},
            //dataType: 'json',//加上会报错
            success: function (data) {
                var progress = "";
                var str = "";
                if (data) {
                    for (i = 0; i < data.length; i++) {
                        progress = (data[i]["completed"] / data[i]["target"]) * 100;
                        str += '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">' +
                            '<div class="well no-padding padding-bottom-20">' +
                            '<a href="prodetail?id=' + data[i]["id"] + '">' +
                            '<div class="img-project"' +
                            'style="background-image: url(uploads/' + data[i]["cover"] + ');">' +
                            '<span class="label label-info">众筹中</span>' +
                            '</div>' +
                            '</a>' +
                            '<div class="margin-top-5 margin-left-10 item-pname">' + data[i]["name"] + '</div>' +
                            '<div class="margin-top-5 margin-left-10 item-title">' + data[i]["title"] + '</div>' +
                            '<div class="progress margin-top-5 no-margin-bottom">' +
                            '<div class="progress-bar progress-bar-info" role="progressbar"' +
                            ' aria-valuenow="' + progress + '" aria-valuemin="0" aria-valuemax="100"' +
                            ' style="width: ' + progress + '%"><span>' + data[i]["completed"] + '</span>' +
                            '</div>' +
                            '</div>' +
                            '<div class="row padding-left-10">' +
                            '<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">' +
                            '<div class="margin-top-10"><b>' +
                            '目标：<span class="colored">￥' + toThousands(data[i]["target"]) + '</span>' +
                            '</b></div>' +
                            '<div class="margin-top-5"><b>' +
                            '起投：<span class="colored">￥' + toThousands(data[i]["minimum"]) + '</span>' +
                            '</b></div>' +
                            '</div>' +
                            '<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-align-right padding-right-50">' +
                            '<div class="margin-top-5"><b>剩余时间</b></div>' +
                            '<div><b>' +
                            '<span class="item-day">' + (Number(data[i]["remianday"]) >= 0 ? data[i]["remianday"] : "0") + '</span>天' +
                            '</b></div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                    }
                }
                if (!str) {
                    str = '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">暂无数据</div>';
                }

                $("#pro1").html(str);
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("获取项目数据出错：状态码" + XMLHttpRequest.status + "," + textStatus);
            }
        });
    }

    function getpros2() {
        $.ajax({
            type: 'POST',
            url: '../home/getProList0',//路径
            data: {},
            //dataType: 'json',//加上会报错
            success: function (data) {
                var progress = "";
                var str = "";
                if (data) {
                    for (i = 0; i < data.length; i++) {
                        progress = (data[i]["completed"] / data[i]["target"]) * 100;
                        str += '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">' +
                            '<div class="well no-padding padding-bottom-20">' +
                            '<a href="prodetail?id=' + data[i]["id"] + '">' +
                            '<div class="img-project"' +
                            'style="background-image: url(uploads/' + data[i]["cover"] + ');">' +
                            '<span class="label label-warning">计划中</span>' +
                            '</div>' +
                            '</a>' +
                            '<div class="margin-top-5 margin-left-10 item-pname">' + data[i]["name"] + '</div>' +
                            '<div class="margin-top-5 margin-left-10 item-title">' + data[i]["title"] + '</div>' +
                            '<div class="progress margin-top-5 no-margin-bottom">' +
                            '<div class="progress-bar progress-bar-warning" role="progressbar"' +
                            ' aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"' +
                            ' style="width: 100%"><span>等待开始</span>' +
                            '</div>' +
                            '</div>' +
                            '<div class="row padding-left-10 padding-bottom-10">' +
                            '<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">' +
                            '<div class="margin-top-10"><b>' +
                            '目标：<span class="colored">￥' + toThousands(data[i]["target"]) + '</span>' +
                            '</b></div>' +
                            '<div class="margin-top-5"><b>' +
                            '起投：<span class="colored">￥' + toThousands(data[i]["minimum"]) + '</span>' +
                            '</b></div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                    }
                }
                if (!str) {
                    str = '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">暂无数据</div>';
                }

                $("#pro2").html(str);
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("获取项目数据出错：状态码" + XMLHttpRequest.status + "," + textStatus);
            }
        });
    }

    function getpros3() {
        $.ajax({
            type: 'POST',
            url: '../home/getProList2',//路径
            data: {},
            //dataType: 'json',//加上会报错
            success: function (data) {
                console.info(data);
                var progress = "";
                var str = "";

                if (data) {
                    for (i = 0; i < data.length; i++) {
                        progress = (data[i]["completed"] / data[i]["target"]) * 100;
                        var tar = data[i]["target"];
                        var mini = data[i]["minimum"];
                        str += '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">' +
                            '<div class="well no-padding padding-bottom-20">' +
                            '<a href="prodetail?id=' + data[i]["id"] + '">' +
                            '<div class="img-project"' +
                            'style="background-image: url(uploads/' + data[i]["cover"] + ');">' +
                            '<span class="label label-success">已完成</span>' +
                            '</div>' +
                            '</a>' +
                            '<div class="margin-top-5 margin-left-10 item-pname">' + data[i]["name"] + '</div>' +
                            '<div class="margin-top-5 margin-left-10 item-title">' + data[i]["title"] + '</div>' +
                            '<div class="progress margin-top-5 no-margin-bottom">' +
                            '<div class="progress-bar progress-bar-success" role="progressbar"' +
                            ' aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"' +
                            ' style="width: 100%"><span>' + data[i]["completed"] + '</span>' +
                            '</div>' +
                            '</div>' +
                            '<div class="row padding-left-10 padding-bottom-10">' +
                            '<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">' +
                            '<div class="margin-top-10"><b>' +
                            '目标：<span class="colored">￥' + toThousands(tar) + '</span>' +
                            '</b></div>' +
                            '<div class="margin-top-5"><b>' +
                            '起投：<span class="colored">￥' + toThousands(mini) + '</span>' +
                            '</b></div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                    }
                }
                if (!str) {
                    str = '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">暂无数据</div>';
                }

                $("#pro3").html(str);
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("获取项目数据出错：状态码" + XMLHttpRequest.status + "," + textStatus);
            }
        });
    }
</script>
</body>
<!--  /Body -->
</html>
