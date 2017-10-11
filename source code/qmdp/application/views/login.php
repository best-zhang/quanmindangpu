<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<!--Head-->
<head>
    <meta charset="utf-8"/>
    <title>全民当铺后台管理系统</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="login page"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!--Basic Styles-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link id="bootstrap-rtl-link" href="" rel="stylesheet"/>
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>

    <!--Beyond styles-->
    <link id="beyond-link" href="assets/css/beyond.min.css" rel="stylesheet"/>
    <link href="assets/css/demo.min.css" rel="stylesheet"/>
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <link id="skin-link" href="" rel="stylesheet" type="text/css"/>

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="assets/js/skins.min.js"></script>
</head>
<!--Head Ends-->
<!--Body-->
<body>
<div class="login-container animated fadeInDown">
    <div class="loginbox bg-white">
        <div class="loginbox-title">登 录</div>

        <div class="loginbox-textbox">
            <input id="username" type="text" class="form-control" placeholder="用户名"/>
        </div>
        <div class="loginbox-textbox">
            <input id="password" type="password" class="form-control" placeholder="密码"/>
        </div>

        <div class="loginbox-submit">
            <input id="btnLogin" type="button" class="btn btn-primary btn-block" value="登 录">
        </div>
    </div>
</div>

<!--Basic Scripts-->
<script src="assets/js/jquery-2.0.3.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!--Beyond Scripts-->
<script src="assets/js/beyond.js"></script>

<script src="assets/js/_js/login.js"></script>
</body>
<!--Body Ends-->
</html>