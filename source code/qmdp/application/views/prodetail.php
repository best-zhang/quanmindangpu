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
    <title>项目详情</title>

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
            background-color: rgba(230, 230, 230, 0.85);
            font-size: 17px;
            height: auto;
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

        .img-pro-main {
            width: 100%;
            height: 0px;
            padding-bottom: 90%;
            background-size: 100% 100%;
            background-repeat: no-repeat;
        }

        .page-body .container .row .label {
            font-size: 18px;
            padding: 10px 25px;
        }

        .well .row div {
            font-size: 14px;
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
                <li><a href="home">首页</a></li>
                <li><a href="about">关于我们</a></li>
                <li><a href="shopindex" target="_blank">当铺商城</a></li>
            </ul>
        </div>

        <div class="pull-right">
            <?php
            if ($userinfo) {
                echo '欢迎您，<span>' . $userinfo->name . '</span> <span class="margin-left-10"> <a id="logout" onclick="logout();"  href="#">退出</a></span>';
            } else {
                echo '<span> <a href="userlogin">登录</a> </span>';
            }
            ?>
        </div>
    </div>
</nav>

<div class="page-body no-padding margin-top-50">
    <div class="container padding-30">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-6">
                <div class="img-pro-main"
                     style="background-image: url(<?php echo 'uploads/' . $proinfo->cover ?>);"></div>
                <div class="font-110 padding-top-5">
                    <i class="fa fa-map-marker"></i> 地址：<?php echo $proinfo->title ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 padding-left-20">
                <div class="font-200 padding-bottom-10"><?php echo $proinfo->name ?></div>
                <div class="font-110 padding-bottom-10"><?php echo $proinfo->instruction ?></div>
                <div class="progress">
                    <div class="progress-bar progress-bar-info" role="progressbar"
                         aria-valuenow="<?php echo $proinfo->progress ?>" aria-valuemin="0" aria-valuemax="100"
                         style="width: <?php echo $proinfo->progress ?>%">
                        <span><?php echo $proinfo->progress ?>%</span>
                    </div>
                </div>
                <div class="font-110 padding-bottom-10">目标：￥<span><?php echo $proinfo->target ?></span></div>
                <div class="font-110 padding-bottom-10">起投：￥<span><?php echo $proinfo->minimum ?></span></div>
                <div class="font-110 padding-bottom-10">
                    截止时间：<span><?php echo date("Y年n月j日", strtotime($proinfo->dtend)) ?></span>
                </div>
                <div class="padding-top-10"><span class="label label-info">
                        <?php if ($proinfo->prostatus == 0) {
                            echo "计划中";
                        } else if ($proinfo->prostatus == 1) {
                            echo "众筹中";
                        } else {
                            echo "已完成";
                        } ?>
                    </span></div>
            </div>
        </div>
        <div class="row margin-top-20">
            <div class="font-140 padding-10">关于这个项目</div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                <?php echo $proinfo->detail ?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="well bg-blue padding-left-50">
                    <div class="font-160">项目咨询</div>
                    <div class="font-120 padding-top-10 margin-top-10">电话号码：<span><?php echo $proinfo->tel ?></span>
                    </div>
                    <div class="font-120 padding-top-5">微信：<span><?php echo $proinfo->weixin ?></span></div>
                    <div class="font-120 padding-top-5">QQ：<span><?php echo $proinfo->qq ?></span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row padding-50 footer">
        <div class="container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <h2>全民当铺众筹网</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <ul class="list-unstyled">
                    <li><a href="#">关于我们</a></li>
                    <li><a href="#">关于我们</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 no-padding">
                <div>
                    <img class="margin-right-10" src="assets/img/ewm1.jpg"> <img
                            class="margin-left-10" src="assets/img/ewm1.jpg">
                </div>
            </div>
            <div></div>
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

</script>
</body>
<!--  /Body -->
</html>
