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
    <title>交易录入</title>

    <meta name="description" content="form editors"/>
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
                <li class="open">
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-table"></i>
                        <span class="menu-text"> 商城管理 </span>

                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="../goodsset">
                                <span class="menu-text">商品设置</span>
                            </a>
                        </li>
                        <li>
                            <a href="../goodslist">
                                <span class="menu-text">商品列表</span>
                            </a>
                        </li>
                        <li class="active">
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
                        <a href="#">众筹管理</a>
                    </li>
                    <li class="active">交易录入</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">
                <div class="row">
                    <form id="inputform" method="post" action="../protrade/save"
                          class="form-horizontal"
                          data-bv-message="填写不正确"
                          data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                          data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                          data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                        <div class="input-group-title">信息录入</div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">用户姓名:</label>
                            <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5">
                                <select class="form-control" id="pname" name="pname" data-bv-field="pname">
                                    <option value="">请选择</option>
                                </select><i class="form-control-feedback" data-bv-field="pname"
                                            style="display: none;"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">商品名称:</label>
                            <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5">
                                <select class="form-control" id="gname" name="gname" data-bv-field="gname">
                                    <option value="">请选择</option>
                                </select>
                                <i class="form-control-feedback" data-bv-field="gname" style="display: none;"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">店铺名称:</label>
                            <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5">
                                <select class="form-control" id="project" name="project" data-bv-field="project">
                                    <option value="">请选择</option>
                                </select>
                                <i class="form-control-feedback" data-bv-field="project" style="display: none;"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">金额:</label>
                            <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5">
                                <input type="text" class="form-control input-sm" name="money" id="money"
                                       placeholder=""
                                       data-bv-message="金额填写不正确"
                                       data-bv-notempty="true"
                                       data-bv-notempty-message="金额不能为空"
                                       data-bv-regexp="true"
                                       data-bv-regexp-regexp="(^[1-9]([0-9]+)?(\.[0-9]{1,2})?$)|(^(0){1}$)|(^[0-9]\.[0-9]([0-9])?$)"
                                       data-bv-regexp-message="金额填写不正确"
                                       data-bv-stringlength="true"
                                       data-bv-stringlength-min="1"
                                       data-bv-stringlength-max="10"
                                       data-bv-stringlength-message="金额长度范围为1-10"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">积分:</label>
                            <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5">
                                <input type="text" class="form-control input-sm" name="jifen" id="jifen" value="0"
                                       placeholder=""
                                       data-bv-message="积分填写不正确"
                                       data-bv-regexp="true"
                                       data-bv-regexp-regexp="[0-9]*"
                                       data-bv-regexp-message="积分只允许填写数字"
                                       data-bv-stringlength="true"
                                       data-bv-stringlength-min="1"
                                       data-bv-stringlength-max="10"
                                       data-bv-stringlength-message="积分长度范围为1-10"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">交易时间:</label>
                            <div class="col-lg-2 col-md-2 col-sm-3 padding-left-5 no-padding-right">
                                <input class="form-control date-picker" name="tradetime" id="tradetime" type="text"
                                       data-date-format="yyyy-mm-dd">
                            </div>
                            <label class="col-lg-1 col-md-1 col-sm-1 control-label no-padding-left text-align-left">
                                <i class="fa fa-calendar"></i>
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">经办人:</label>
                            <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5">
                                <input type="text" class="form-control input-sm" name="jingban" id="jingban"
                                       placeholder=""
                                       data-bv-message="经办人格式不正确"
                                       data-bv-notempty="true"
                                       data-bv-notempty-message="经办人不能为空"
                                       data-bv-stringlength="true"
                                       data-bv-stringlength-min="1"
                                       data-bv-stringlength-max="30"
                                       data-bv-stringlength-message="经办人长度范围为1-30"/>
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

<!--Bootstrap Date Picker-->
<script src="assets/js/datetime/bootstrap-datepicker.js"></script>

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
        getusers();
        getgoods();
        getpros();

        //--Bootstrap Date Picker--
        $('.date-picker').datepicker();
        $("#inputform").bootstrapValidator();
    });

    function toVaild() {
        $('#inputform').data('bootstrapValidator').validate();
        if (!$('#inputform').data('bootstrapValidator').isValid()) {
            alert("数据填写不正确,请检查");
        } else if (!$("#pname").val()) {
            alert("请选择用户");
        } else if (!$("#gname").val()) {
            alert("请选择商品");
        } else if (!$("#project").val()) {
            alert("请选择店铺");
        } else {
            save();
        }
    }

    function save() {
        $.ajax({
            type: 'POST',
            url: '../goodstrade/save',//路径
            data: {
                "uid": $("#pname").val(),
                "goods": $("#gname").val(),
                "project": $("#project").val(),
                "money": $("#money").val(),
                "jifen": $("#jifen").val(),
                "tradetime": $("#tradetime").val(),
                "jingban": $("#jingban").val()
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

    function getpros() {
        $.ajax({
            type: 'POST',
            url: '../goodstrade/getProjects',//路径
            data: {},
            success: function (data) {
                if (data) {
                    var str = '';
                    for (i = 0; i < data.length; i++) {
                        str += '<option value="' + data[i]["id"] + '">' + data[i]["name"] + '</option>';
                    }

                    $("#project").html(str);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("获取项目数据出错：" + XMLHttpRequest.status + "," + textStatus);
            }
        });
    }

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

                    $("#pname").html(str);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("获取项目数据出错：" + XMLHttpRequest.status + "," + textStatus);
            }
        });
    }

    function getgoods() {
        $.ajax({
            type: 'POST',
            url: '../goodstrade/getGoods',//路径
            data: {},
            success: function (data) {
                if (data) {
                    var str = '';
                    for (i = 0; i < data.length; i++) {
                        str += '<option value="' + data[i]["id"] + '">' + data[i]["name"] + '</option>';
                    }

                    $("#gname").html(str);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("获取项目数据出错：" + XMLHttpRequest.status + "," + textStatus);
            }
        });
    }

</script>

</body>
<!--  /Body -->
</html>
