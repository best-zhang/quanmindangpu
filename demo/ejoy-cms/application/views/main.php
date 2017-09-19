<?php
/**
 * Created by PhpStorm.
 * User: jumee
 * Date: 2016/9/22
 * Time: 15:20
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../styles/img/favicon.ico">

    <title>首页</title>

    <!-- Bootstrap core CSS -->
    <link href="../../styles/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../styles/css/main.css" rel="stylesheet">
    <link href="../../styles/dist/css/highcharts.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="../../styles/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../styles/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../../styles/js/html5shiv.min.js"></script>
    <script src="../../styles/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="../main">逸洁系统管理平台1.0</a>
        </div>
        <div class="navbar-right">
            <p class="navbar-text">
                <span id="userhello"></span>
                <button id="btnlogout" type="button" class="btn btn-danger btn-xs logout">
                    <span class="glyphicon glyphicon-off">&nbsp;</span>退出
                </button>
            </p>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-stacked nav-pills nav-sidebar ">
                <li class="active"><a href="../main"><span class="glyphicon glyphicon-home">&nbsp;</span>首 页</a></li>
                <li><a href="../customer"><span class="glyphicon glyphicon-user">&nbsp;</span>客户信息</a></li>
                <li><a href="../price"><span class="glyphicon glyphicon-glass">&nbsp;</span>价格信息</a></li>
                <li><a href="../inventory"><span class="glyphicon glyphicon-pencil">&nbsp;</span>数据录入</a></li>
                <li><a href="../finance"><span class="glyphicon glyphicon-usd">&nbsp;</span>逸洁总账</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div id="container"></div>
        </div>
    </div>

    <div class="row">
        <div class="container">
            <!--<p class="text-center">成都逸洁 版权所有</p>-->
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript
   ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../../styles/js/jquery-1.9.1.min.js"></script>
<script src="../../styles/dist/js/bootstrap.min.js"></script>
<script src="../../styles/dist/js/highcharts.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../styles/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="../../styles/js/common.js"></script>
<script src="../../styles/js/main.js"></script>
</body>
</html>