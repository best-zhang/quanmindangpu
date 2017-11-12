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
            background-color: rgba(230, 230, 230, 0.85);
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
        }

        .instrction {
            height: 680px;
        }

        .instrction .tabbable {
            padding: 15px;
        }

        .tab-content {
            height: 550px;
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
    </style>
</head>
<!-- /Head -->
<!-- Body -->
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header margin-right-50">
            <a class="navbar-brand" href="home">全民当铺</a>
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
    <div class="container">
        <div class="row padding-top-30">
            <div class="text-center padding-top-40">
                <h2>为什么选择我们</h2>
            </div>
        </div>
        <div class="row padding-top-30">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-center">
                <img width="100%" src="assets/img/ys1.png">
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center">
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-center">
                <img width="100%" src="assets/img/ys2.png">
            </div>
        </div>
        <div class="row instrction padding-top-50 padding-bottom-50">
            <div class="tabbable tabs-left">
                <ul class="nav nav-tabs" id="myTab3">
                    <li class="active tab-sky">
                        <a data-toggle="tab" href="#aboutus">
                            关于我们
                        </a>
                    </li>

                    <li class="tab-sky">
                        <a data-toggle="tab" href="#investment">
                            关于投资
                        </a>
                    </li>

                    <li class="tab-sky">
                        <a data-toggle="tab" href="#proinvest">
                            项目投资
                        </a>
                    </li>

                    <li class="tab-sky">
                        <a data-toggle="tab" href="#legal">
                            法律协议
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="aboutus" class="tab-pane in active">
                        <p>
                            全民当铺是全国第一家，也是国内唯一成功的一家互联网当铺，公司总部在深圳市前海自贸区，目前公司拥有省级代理商5家，分布上海，深圳，重庆，成都。上千家二级代理商，上万个代理人，成为全球最大的互联网典当中心，每天典当金额过亿，当品超万件。</p>
                    </div>

                    <div id="investment" class="tab-pane">
                        <p>我们的目标是为了帮助更多的创业企业顺利地拓展事业，促进新产品和新技术的市场转化，并引导中国的产业投资沿着良性的轨道发展。</p>
                        <p>我们有着实力强大的投融资顾问专家团队，在投资可行性分析，融资顾问，财务规划方面都有着充足的实力。我们善于发掘具有投资价值和投资潜力的项目，向我们的投资会员推荐。</p>
                    </div>

                    <div id="proinvest" class="tab-pane">
                        <p>全民当铺互联网动产质押信息平台，我们通过各个渠道收集到借款人的需求，评估师上门或借款人到店，对质押物进行评估及其放款建议。覆盖珠宝首饰、奢侈品、名表、贵金属、车辆
                            等各类质押信息服务。全民当铺从产品上推动行业的创新，真正的满足大众用户，借急钱，借快钱的需求。从服务上全民当铺提供上门借贷服务，帮助债权端与资金端之间搭建O2O桥梁，优化用户贷款体验，促成双方达成交易的一个网络桥梁。</p>
                    </div>

                    <div id="legal" class="tab-pane">
                        <p>
                            本站（中国风险投资网）的会员资料和全部项目信息（包括商业计划书）属于保密范围，本站将尽量保障信息的安全和不受侵犯，但如果发生不可抗拒因素及用户自身原因造成的损失，如黑客入侵，服务器故障等，本站不承担相应赔偿责任。</p>
                    </div>
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
                    <li><a href="about">关于我们</a></li>
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
    $(document).ready(function () {

    });
</script>
</body>
<!--  /Body -->
</html>
