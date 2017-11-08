<?php
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
    <title>热门</title>

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

        .info-hello {
            background-color: #cccccc;
        }

        .navbar {
            background-color: #ffffff;
            font-size: 18px;
            height: auto;
            min-height: 0;
        }

        .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover,
        .navbar-default .navbar-nav > .active > a:focus {
            color: #ff3738;
            background-color: rgba(255, 255, 255, 0);
        }

        .navbar-default .navbar-nav > li > a:hover {
            color: #ff000c;
            border-bottom: solid 2px #16caff;
        }

        .navbar-default .navbar-nav > li > a {
            color: #060606;
            padding-top: 10px;
            padding-bottom: 3px;
            padding-left: 15px;
            padding-right: 15px;
            margin: 0px 10px;
        }

        .page-breadcrumbs {
            background: #ffffff;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
        }

        .raise-item h3 {
            font-size: 23px;
            margin-bottom: 20px;
        }

        .goods-item .row .goods-type-item .img-goods-type {
            width: 100%;
            height: 100%;
            padding-bottom: 100%;
            background-size: 100% 100%;
            background-repeat: no-repeat;
        }

        .img-project {
            width: 100%;
            height: 0px;
            padding-bottom: 100%;
            background-size: 100% 100%;
            background-repeat: no-repeat;
        }

        .text-wide-center {
            line-height: 41px;
        }

        .wide {
            border-top: 2px solid #8b8b8b;
        }

        .label {
            padding: 8px;
        }

        .well .row div {
            font-size: 14px;
        }

        .footer {
            background-color: #eeeeee;
            padding-top: 60px;
            padding-left: 50px;
            padding-right: 50px;
            border-top: 2px solid #cfcfcf;
        }

        .footer a {
            color: #000000;
            font-size: 15px;
        }

        .footer .ewm {
            height: 100px;
            width: 100px;
        }

        .footer-icon img {
            margin: 0px 5px;
        }

        .list-unstyled li {
            padding: 3px;
        }

        .beian {
            background-color: #1e1e1e;
            color: #eeeeee;
        }
    </style>
</head>
<!-- /Head -->
<!-- Body -->
<body>
<div class="padding-5 info-hello">欢迎来到当铺商城</div>

<div class="container">
    <a class="font-200" href="shopindex">LOGO</a>
</div>
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div>
            <ul class="nav navbar-nav">
                <li class="dropdown margin-right-50">
                    <a href="javascript:void(0);"
                       class="dropdown-toggle no-padding-left no-padding-right no-margin-left" data-toggle="dropdown">
                        全民当铺
                        <b class="caret"></b>
                    </a>
                    <ul id="shops" class="dropdown-menu">
                    </ul>
                </li>
                <li class="margin-left-30"><a href="shopindex">首页</a></li>
                <li class="active"><a href="popular">热门</a></li>
                <li><a href="integral">积分</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <!-- Page Breadcrumb -->
    <div class="page-breadcrumbs">
        <ul class="breadcrumb no-margin">
            <li>
                <i class="fa fa-home"></i>
                <a href="shopindex">首页</a>
            </li>
            <li class="active">
                热门
            </li>
        </ul>
    </div>
    <!-- /Page Breadcrumb -->
</div>

<div class="page-body no-padding margin-top-40">
    <div class="goods-item">
        <div class="row">
            <div class="container">
                <div id="goods" class="row">

                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <hr class="wide">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center">
                        <span class="font-140 text-wide-center">全民当铺</span>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <hr class="wide">
                    </div>
                </div>

            </div>
            <div class="row padding-30">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-align-right">
                            <div class="btn btn-danger  btn-circle">
                                <div class="font-180">优</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 margin-top-10">
                            <strong class="font-120">品质保证</strong>
                            <div class="font-120">品质护航 购物无忧</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 bordered-left-2 bordered-gray">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-align-right">
                            <div class="btn btn-danger  btn-circle  text-center">
                                <div class="font-180">保</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 margin-top-10">
                            <strong class="font-120">交易保证</strong>
                            <div class="font-120">线下交易 最安全的保障</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 bordered-left-2 bordered-gray">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-align-right">
                            <div class="btn btn-danger  btn-circle  text-center">
                                <div class="font-180">诚</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 margin-top-10">
                            <strong class="font-120">诚信保证</strong>
                            <div class="font-120">诚信商铺 诚意待人</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row footer">
        <div class="container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <h2>全民当铺商城</h2>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <ul class="list-unstyled">
                    <li><a href="home.php">众筹网</a></li>
                    <li><a href="#">关于我们</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-align-right">
                        <i class="fa fa-phone font-200"></i>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <strong class="font-150">服务咨询热线</strong>
                        <div class="font-160">028-35622332</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 no-padding text-center">
                <div>
                    <img class="margin-right-10 ewm" src="assets/img/ewm1.jpg">
                </div>
            </div>
        </div>
        <div class="footer-icon text-center padding-top-50 padding-bottom-10"><img src="assets/img/kx.png"><img
                    src="assets/img/cx.png"><img src="assets/img/hyyz.png">
        </div>
    </div>
    <div class="padding-10 text-align-center beian">蜀ICP备12569350号 Copyright © 2017 qmdp168.com</div>
</div>

<!--Basic Scripts-->
<script src="assets/js/jquery-2.0.3.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!--Beyond Scripts-->
<script src="assets/js/beyond.min.js"></script>

<!--Page Related Scripts-->

<script>
    $(document).ready(function () {
        getpros();
        getgoods();
    });

    function getpros() {
        $.ajax({
            type: 'POST',
            url: '../shopindex/getPros',//路径
            data: {},
            success: function (data) {
                if (data) {
                    var str = '';
                    for (i = 0; i < data.length; i++) {
                        str += '<li><a href="shop?id=' + data[i]["id"] + '">' + data[i]["name"] + '</a></li>';
                    }

                    $("#shops").html(str);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("获取店铺数据出错：" + XMLHttpRequest.status + "," + textStatus);
            }
        });
    }

    function getgoods() {
        $.ajax({
            type: 'POST',
            url: '../shopindex/gethotgoods',//路径
            data: {},
            success: function (data) {
                if (data) {
                    var str = '';
                    var img = '';
                    for (i = 0; i < data.length; i++) {
                        var imgs = (data[i]["imgs"]).split(',');
                        if (imgs.length > 0) {
                            img = imgs[0];
                        }
                        str += '<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">'
                            + '<div class="well no-padding">'
                            + '<a href="goodsdetail?id=' + data[i]["id"] + '">'
                            + '<div class="img-project" '
                            + 'style="background-image: url(uploads/' + img + ');">'
                            + '</div>'
                            + '</a>'
                            + '<div class="text-center font-120 goods-name">' + data[i]["name"] + '</div>'
                            + '<div class="padding-5 text-center goods-price">'
                            + '￥<span>' + data[i]["price"] + '</span>'
                            + '</div>'
                            + '</div>'
                            + '</div>';
                    }

                    $("#goods").html(str);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("获取热门商品数据出错：" + XMLHttpRequest.status + "," + textStatus);
            }
        });
    }

</script>
</body>
<!--  /Body -->
</html>
