<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 1.0.0
Purchase: http://wrapbootstrap.com
-->

<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<!-- Head -->
<head>
    <meta charset="utf-8"/>
    <title>用户设置</title>

    <meta name="description" content="project setting"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

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

        .input-group-title {
            font-size: 18px;
            font-weight: bold;
            padding: 20px;
            line-height: 34px;
            color: #555;
        }
    </style>
</head>
<!-- /Head -->
<!-- Body -->
<body>
<!-- Navbar -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="assets/img/logo.png" alt=""/>
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings --->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="assets/img/avatars/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>系统管理员</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <!--/Theme Selector Area-->
                                <li class="dropdown-footer">
                                    <a href="../login">
                                        退 出
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                        no space must be between these elements-->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>
<!-- /Navbar -->
<!-- Main Container -->
<div class="main-container container-fluid">
    <!-- Page Container -->
    <div class="page-container">
        <!-- Page Sidebar -->
        <div class="page-sidebar" id="sidebar">
            <!-- Page Sidebar Header-->
            <div class="sidebar-header-wrapper">

            </div>
            <!-- /Page Sidebar Header -->
            <!-- Sidebar Menu -->
            <ul class="nav sidebar-menu">
                <!--UI Elements-->
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-desktop"></i>
                        <span class="menu-text"> 众筹管理 </span>
                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="../proset">
                                <span class="menu-text">项目设置</span>
                            </a>
                        </li>
                        <li>
                            <a href="../prostatus">
                                <span class="menu-text">项目状态</span>
                            </a>
                        </li>
                        <li>
                            <a href="../protrade">
                                <span class="menu-text">交易录入</span>
                            </a>
                        </li>
                        <li>
                            <a href="../protradelist">
                                <span class="menu-text">交易列表</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--Tables-->
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-table"></i>
                        <span class="menu-text"> 商城管理 </span>

                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">
                        <li class="active">
                            <a href="../goodsset">
                                <span class="menu-text">商品设置</span>
                            </a>
                        </li>
                        <li>
                            <a href="../goodslist">
                                <span class="menu-text">商品列表</span>
                            </a>
                        </li>
                        <li>
                            <a href="../goodstrade">
                                <span class="menu-text">交易录入</span>
                            </a>
                        </li>
                        <li>
                            <a href="../goodstradelist">
                                <span class="menu-text">交易列表</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="open">
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-table"></i>
                        <span class="menu-text"> 用户管理 </span>

                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">
                        <li class="active">
                            <a href="../user">
                                <span class="menu-text">用户设置</span>
                            </a>
                        </li>
                        <li>
                            <a href="../userlist">
                                <span class="menu-text">用户列表</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- /Sidebar Menu -->
        </div>
        <!-- /Page Sidebar -->
        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="#">首页</a>
                    </li>
                    <li>
                        <a href="#">用户管理</a>
                    </li>
                    <li class="active">用户设置</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">
                <div class="row">
                    <form id="inputform" method="post" action="../proset/save"
                          class="form-horizontal"
                          data-bv-message="填写不正确"
                          data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                          data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                          data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                        <div class="input-group-title">用户信息</div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">用户名:</label>
                            <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5">
                                <input type="text" class="form-control input-sm" name="username" id="username"
                                       placeholder=""
                                       data-bv-message="用户名格式不正确"
                                       data-bv-notempty="true"
                                       data-bv-notempty-message="用户名不能为空"
                                       data-bv-stringlength="true"
                                       data-bv-stringlength-min="1"
                                       data-bv-stringlength-max="50"
                                       data-bv-stringlength-message="用户名长度范围为1-50"/>
                                <label>用于登录前台系统，密码默认。</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">姓名:</label>
                            <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5">
                                <input type="text" class="form-control input-sm" name="uname" id="uname"
                                       placeholder=""
                                       data-bv-message="姓名格式不正确"
                                       data-bv-notempty="true"
                                       data-bv-notempty-message="姓名不能为空"
                                       data-bv-stringlength="true"
                                       data-bv-stringlength-min="1"
                                       data-bv-stringlength-max="50"
                                       data-bv-stringlength-message="姓名长度范围为1-50"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">性别:</label>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                <label class="radio-inline">
                                    <input name="sex" type="radio" value="0" checked="checked">
                                    <span class="text">男</span>
                                </label>
                                <label class="radio-inline">
                                    <input name="sex" type="radio" value="1">
                                    <span class="text">女</span>
                                </label>
                                <label class="radio select2-display-none">
                                    <input name="sex" type="radio">
                                    <span class="text"></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">年龄:</label>
                            <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5">
                                <input type="text" class="form-control input-sm" name="age" id="age"
                                       placeholder=""
                                       data-bv-message="年龄填写不正确"
                                       data-bv-notempty="false"
                                       data-bv-notempty-message="年龄不能为空"
                                       data-bv-regexp="true"
                                       data-bv-regexp-regexp="[1-9][0-9]*"
                                       data-bv-regexp-message="年龄只允许填写数字"
                                       data-bv-stringlength="true"
                                       data-bv-stringlength-min="0"
                                       data-bv-stringlength-max="5"
                                       data-bv-stringlength-message="年龄长度范围为0-5"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">联系电话:</label>
                            <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5">
                                <input type="text" class="form-control input-sm" name="tel" id="tel"
                                       placeholder=""
                                       data-bv-message="联系电话格式不正确"
                                       data-bv-stringlength="true"
                                       data-bv-stringlength-min="1"
                                       data-bv-stringlength-max="30"
                                       data-bv-stringlength-message="联系电话长度范围为1-30"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">上级:</label>
                            <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5">
                                <select class="form-control" id="superior" name="superior" data-bv-field="superior">
                                    <option value="">请选择</option>
                                </select><i class="form-control-feedback" data-bv-field="superior"
                                            style="display: none;"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-8 col-md-offset-3 col-md-8">
                                <input class="btn btn-palegreen" type="button" onclick="toVaild();" value="提 交"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Page Body -->
        </div>
        <!-- /Page Content -->
    </div>
    <!-- /Page Container -->
    <!-- Main Container -->
</div>

<!--Basic Scripts-->
<script src="assets/js/jquery-2.0.3.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!--Beyond Scripts-->
<script src="assets/js/beyond.min.js"></script>

<!--Page Related Scripts-->
<!--Bootstrap  wysiwig Scripts-->
<script src="assets/js/editors/wysiwyg/jquery.hotkeys.js"></script>
<script src="assets/js/editors/wysiwyg/prettify.js"></script>
<script src="assets/js/editors/wysiwyg/bootstrap-wysiwyg.js"></script>

<!--Summernote Scripts-->
<script src="assets/js/editors/summernote/summernote.js"></script>
<script src="assets/js/validation/bootstrapValidator.js"></script>

<script>
    $(document).ready(function () {
        $("#inputform").bootstrapValidator();
        getusers();
    });

    function getusers() {
        $.ajax({
            type: 'POST',
            url: '../goodstrade/getUsers',//路径
            data: {},
            success: function (data) {
                if (data) {
                    var str = '';
                    for (i = 0; i < data.length; i++) {
                        str += '<option value="' + data[i]["id"] + '">' + data[i]["name"] + '</option>';
                    }

                    $("#superior").html(str);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("获取用户数据出错：" + XMLHttpRequest.status + "," + textStatus);
            }
        });
    }

    function toVaild() {
        $('#inputform').data('bootstrapValidator').validate();
        if (!$('#inputform').data('bootstrapValidator').isValid()) {
            alert("数据填写不正确,请检查");
        } else {
            save();
        }
    }

    function save() {
        $.ajax({
            type: 'POST',
            url: '../user/save',//路径
            data: {
                "username": $("#username").val(),
                "uname": $("#uname").val(),
                "sex": $('input:radio:checked').val(),
                "age": $("#age").val(),
                "tel": $("#tel").val(),
                "superior": $("#superior").val()
            },
            success: function (data) {
                if (data) {
                    alert(data);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("保存数据出错：" + XMLHttpRequest.status + "," + textStatus);
            }
        });
    }

</script>

</body>
<!--  /Body -->
</html>
