<!DOCTYPE html>
<!--
Beyond Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3
Version: 1.0.0
Purchase: http://wrapbootstrap.com
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<!--Head-->
<head>
    <meta charset="utf-8"/>
    <title>全民当铺系统登录</title>
    <meta name="description" content="login page"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="assets/img/favicon.png"
          type="image/x-icon">

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
    <style type="text/css">
        body:before {
            background-color: #0099FF;
        }

        .loginbox-copyright {
            text-align: center;
            color: #ffffff;
        }

        .loginbox-title {
            color: #0099FF;
            font-size: 20px;
        }

        .login-container {
            margin: 0px;
            max-width: 100%;
        }

        .login-container .loginbox {
            height: 300px !important;
        }
    </style>
</head>
<!--Head Ends-->
<!--Body-->
<body>
<div class="login-container margin-30 margin-top-50 padding-top-50 animated fadeInDown">
    <div class="loginbox bg-white pull-right">

        <div class="loginbox-title margin-top-20">欢迎登录</div>

        <div class="loginbox-textbox margin-top-20">
            <input id="username" type="text" class="form-control"
                   placeholder="用户名"/>
        </div>
        <div class="loginbox-textbox">
            <input id="password" type="password" class="form-control"
                   placeholder="密码"/>
        </div>

        <div class="loginbox-submit margin-top-30">
            <input id="btnLogin" type="button" class="btn btn-primary btn-block" value="登 录">
        </div>
    </div>
</div>
<div class="navbar-fixed-bottom loginbox-copyright padding-bottom-10">Copyright
    © www.qmdp168.com, All Rights Reserved.
</div>

<!--Basic Scripts-->
<script src="assets/js/jquery-2.0.3.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!--Beyond Scripts-->
<script src="assets/js/beyond.min.js"></script>

<script>
    $(document).ready(function () {
        $("#btnLogin").click(function () {
            var username = $("#username").val();
            var password = $("#password").val();

            if (username && password) {
                login(username, password);
            } else {
                alert("请输入用户名和密码");
            }
        });
		
		//回车登录
        document.onkeydown = function(e){ 
            var ev = document.all ? window.event : e;
            if(ev.keyCode==13) {
                $("#btnLogin").click();
            }
        };
    });

    function login(name, pwd) {
        $.ajax({
            type: 'POST',
            url: '../userlogin/userLogin',//路径
            data: {
                "username": name,
                "password": pwd
            },
            //dataType: 'json',//加上会报错
            success: function (data) {
                if (data && data.indexOf('成功') < 0) {
                    alert(data);
                } else {
                    window.location.href = 'userinfo';
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("获取数据出错：状态码" + XMLHttpRequest.status + "," + textStatus);
            }
        });
    }
</script>
</body>
<!--  /Body -->

