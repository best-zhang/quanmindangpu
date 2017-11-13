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

        .img-user-header img {
            width: 100px;
            height: 100px;
        }

        .well-nav {
            max-width: 250px;
            background-color: #EBF5EA;
        }

        .well-nav .nav-title {
            background-color: #99ccff;
            font-size: 16px;
            font-weight: bold;
            padding: 5px;
			color:#fbfbfb;
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
            <a class="navbar-brand" href="home">全民当铺</a>
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
<!-- Main Container -->
<div class="page-body">
    <div class="row margin-top-50">
        <div class="contianer">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
                <div class="well well-nav text-center no-padding padding-top-10">
                    <div class="img-user-header">
                        <img src="<?php
                        if ($userinfo->img) {
                            echo 'uploads/' . $userinfo->img;
                        } else {
                            echo 'assets/img/avatars/John-Smith.jpg';
                        }
                        ?>" class="img-circle">
                    </div>
                    <div class="margin-top-20 nav-title">个人信息</div>
                    <div class="nav-link padding-5">
                        <a href="userupdate">个人资料</a>
                    </div>
                    <div class="nav-link padding-5">
                        <a href="userpwd">密码修改</a>
                    </div>
                    <div class="margin-top-10 nav-title">人员信息管理</div>
                    <div class="nav-link padding-5">
                        <a href="lowerlist">人员列表</a>
                    </div>
                    <div class="nav-link padding-5">
                        <a href="lowerarch">人员架构</a>
                    </div>
                    <div class="nav-link padding-5">
                        <a href="loweradd">信息录入</a>
                    </div>
                    <div class="margin-top-10 nav-title">项目支持</div>
                    <div class="nav-link padding-10">
                        <a href="userpro">已投项目</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                <div id="pros" class="row well well-detail">

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
<script src="assets/js/_js/home.common.js"></script>

<script>
    $(document).ready(function () {
        $.ajax({
            type: 'POST',
            url: '../userpro/getProList',//路径
            data: {},
            //dataType: 'json',//加上会报错
            success: function (data) {
                var progress = "";
                var status = "";
                var str = "";
                if (data) {
                    for (i = 0; i < data.length; i++) {
                        progress = (data[i]["completed"] / data[i]["target"]) * 100;
                        status = data[i]["prostatus"] == '0' ? "计划中" : (data[i]["prostatus"] == '1' ? "众筹中" : "已完成");
                        str += '<div class="row well no-padding">' +
                        '<div class="col-lg-3 col-md-3 col-sm-6 no-padding">' +
                        '<img src="uploads/' + data[i]["cover"] + '" width=180 height=180/></div>' +
                        '<div class="col-lg-5 col-md-5 col-sm-6 padding-20">' +
                        '<div class="proname">' + data[i]["name"] + '</div>' +
                        '<div class="progress">' +
                        '<div class="progress-bar progress-bar-info" role="progressbar" ' +
                        ' aria-valuenow="' + progress + '" aria-valuemin="0" aria-valuemax="100" ' +
                        ' style="width: ' + progress + '%"><span>' + progress + '%</span></div>' +
                        '</div>' +
                        '<div class="prolabel">目标: ￥' + data[i]["target"] + '</div>' +
                        '<div class="prolabel">起投: ￥' + data[i]["minimum"] + '</div>' +
                        '</div>' +
                        '<div class="col-lg-3 col-md-3 col-sm-6 padding-top-20 text-center">' +
                        '<div class="prolabel"><span class="label label-info">' + status + '</span></div>' +
                        '<div class="prolabel">剩余时间</div>' +
                        '<div class="prolabel">' +
                        '<span class="proday">' + data[i]["remianday"] < 0 ? "0" : data[i]["remianday"] + '</span>天' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                    }
                }
                if (!str) {
                    str = '暂无数据';
                }
                $("#pros").html(str);
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("获取项目数据出错：状态码" + XMLHttpRequest.status + "," + textStatus);
            }
        });
    });
</script>
</body>
<!--  /Body -->
</html>
