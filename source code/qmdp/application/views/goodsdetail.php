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
    <title>商品详情</title>

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
    <link href="assets/css/magnify.css" rel="stylesheet"/>

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

        .page-breadcrumbs {
            background: #ffffff;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
        }

        .picZoomer img {
            width: 100%;
            height: 100%;
        }

        .well .row div {
            font-size: 14px;
        }

        .footer {
            background-color: #eeeeee;
            padding-top: 60px;
            padding-left: 50px;
            padding-right: 50px;
            margin-top: 50px;
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

<div class="container">
    <!-- Page Breadcrumb -->
    <div class="page-breadcrumbs">
        <ul class="breadcrumb no-margin">
            <li>
                <i class="fa fa-home"></i>
                <a href="shopindex">首页</a>
            </li>
            <li>
                <a href="shop?id=<?php echo $proinfo->id ?>"><?php echo $proinfo->name ?></a>
            </li>
            <li class="active"><?php echo $goodsinfo->name ?></li>
        </ul>
    </div>
    <!-- /Page Breadcrumb -->
</div>

<div class="page-body no-padding margin-top-40">
    <div class="container">
        <div class="row">
            <div class="picZoomer col-lg-5 col-md-5 col-sm-5 col-xs-6 no-padding">
                <div>
                    <img id="picZoomer-pic" src="<?php echo 'uploads/' . $img1 ?>"
                         data-magnify-src="<?php echo 'uploads/' . $img1 ?>">
                </div>
                <div class="row img-goods-list no-margin padding-top-10">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 padding-5">
                        <img src="<?php if ($img1) echo 'uploads/' . $img1 ?>" alt="">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 padding-5">
                        <img src="<?php if ($img2) echo 'uploads/' . $img2 ?>" alt="">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 padding-5">
                        <img src="<?php if ($img3) echo 'uploads/' . $img3 ?>" alt="">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 padding-5">
                        <img src="<?php if ($img4) echo 'uploads/' . $img4 ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-6 padding-left-50">
                <div class="goods-info-name font-150 padding-bottom-10 padding-left-10">
                    <b><span><?php echo $goodsinfo->name ?></b></span></div>
                <div class="well font-120 goods-info-price">
                    <div class="padding-bottom-5">价格：<span>￥<?php echo $goodsinfo->price ?></span></div>
                    <div class="padding-top-5">积分：<span><?php echo $goodsinfo->integral ?></span></div>
                </div>
                <div class="well margin-bottom-5 font-120 goods-info-more">
                    <div class="padding-bottom-5">产品编号：<span><?php echo $goodsinfo->goodscode ?></span></div>
                    <div class="padding-bottom-5">大小：<span><?php echo $goodsinfo->size ?></span></div>
                    <div class="padding-bottom-5">重量：<span><?php echo $goodsinfo->weight ?></span></div>
                    <div class="padding-bottom-5">材质：<span><?php echo $goodsinfo->material ?></span></div>
                    <div class="padding-bottom-5">证书：<span><?php echo $goodsinfo->certificate ?></span></div>
                </div>
                <div class="padding-left-10 padding-bottom-10 font-120">线下交易</div>
                <div class="padding-left-10 text-center">
                    <a href="javascript:void(0);" class="btn btn-danger" data-container="body"
                       data-titleclass="" data-class="" data-toggle="popover"
                       data-placement="bottom"
                       data-title=""
                       data-content="<img src='assets/img/ewm1.jpg' width=100 height=100 />"
                       data-original-title=""
                       title="" aria-describedby=""> <span class="font-130">立即购买</span> </a>
                </div>
            </div>
        </div>
        <div class="row margin-top-20 margin-bottom-30">
            <div class="font-130 padding-10">商品详情</div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                <?php echo $goodsinfo->detail ?>
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
                    <li><a href="home">众筹网</a></li>
                    <li><a href="about">关于我们</a></li>
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
<script src="assets/js/magnify/jquery.magnify.js"></script>

<!--Page Related Scripts-->
<script>
    $(document).ready(function () {
        var $zoom = $('#picZoomer-pic');
        $zoom.magnify();

        $('.img-goods-list div').on('click', function (event) {
            var $pic = $(this).find('img');
            $zoom.attr('src', $pic.attr('src'));
            $zoom.attr('data-magnify-src', $pic.attr('src'));
            $zoom.destroy();
            $zoom.magnify();
        });
    })
</script>
</body>
<!--  /Body -->
</html>
