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

    <title>欢迎来到逸洁管理系统</title>

    <!-- Bootstrap core CSS -->
    <link href="../../styles/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../styles/css/signin.css" rel="stylesheet">

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

<div class="container">

    <div class="form-signin">
        <h3 class="form-signin-heading">用户登录</h3>
        <input type="text" id="username" name="username" class="form-control" placeholder="用户名" required
               autofocus>
        <br/>
        <input type="password" id="password" name="password" class="form-control" placeholder="密码" required>
        <div class="checkbox">
            <label>
                <!--<input type="checkbox" name="chk[]" value="1"> 记住我-->
            </label>
        </div>
        <button id="btnLogin" class="btn btn-lg btn-primary btn-block">登 录</button>
    </div>

</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../styles/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="../../styles/js/jquery-1.9.1.min.js"></script>
<script src="../../styles/js/login.js"></script>
</body>
</html>