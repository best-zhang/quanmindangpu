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
    <title>项目设置</title>

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
        .page-body {
            background: #ffffff;
        }

        .input-group .input-group-addon {
            background-image: linear-gradient(to bottom, #fff 0, #fff 100%);
        }

        .input-group-addon {
            padding: 6px 5px;
            border: 1px solid #fff;
        }

        .input-group-qm .row {
            margin-bottom: 10px;
        }

        .widget-header > .widget-caption {
            font-size: 18px;
            font-weight: bold !important;
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
                                    <a href="login.html">
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
                            <a href="#">
                                <span class="menu-text">项目设置</span>
                            </a>
                        </li>
                        <li>
                            <a href="../prostatus">
                                <span class="menu-text">项目状态</span>
                            </a>
                        </li>
                        <li>
                            <a href="alerts.html">
                                <span class="menu-text">交易录入</span>
                            </a>
                        </li>
                        <li>
                            <a href="modals.html">
                                <span class="menu-text">人员列表</span>
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
                        <li>
                            <a href="tables-simple.html">
                                <span class="menu-text">商品设置</span>
                            </a>
                        </li>
                        <li>
                            <a href="tables-data.html">
                                <span class="menu-text">商品列表</span>
                            </a>
                        </li>
                        <li>
                            <a href="tables-simple.html">
                                <span class="menu-text">交易录入</span>
                            </a>
                        </li>
                        <li>
                            <a href="tables-data.html">
                                <span class="menu-text">人员列表</span>
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
                    <li class="active">项目设置</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">
                <form id="inputForm" method="post" class="form-horizontal"
                      data-bv-message="必填项"
                      data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                      data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                      data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="widget flat radius-bordered">
                                <div class="widget-header bordered-bottom">
                                    <span class="widget-caption">基本信息</span>
                                </div>
                                <div class="widget-body input-group-qm">
                                    <div class="row">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">项目名称：</span>
                                                <input type="text" class="form-control input-sm" id="sminput"
                                                       placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;品牌：</span>
                                                <input type="text" class="form-control input-sm" id="sminput"
                                                       placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;标题：</span>
                                                <input type="text" class="form-control input-sm" id="sminput"
                                                       placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">商品简介：</span>
                                                <textarea rows="3" name="S1" cols="60"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">联系电话：</span>
                                                <input type="text" class="form-control input-sm" id="sminput"
                                                       placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;微信：</span>
                                                <input type="text" class="form-control input-sm" id="sminput"
                                                       placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QQ：</span>
                                                <input type="text" class="form-control input-sm" id="sminput"
                                                       placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="widget flat radius-bordered">
                                <div class="widget-header bordered-bottom">
                                    <span class="widget-caption">项目金额</span>
                                </div>
                                <div class="widget-body input-group-qm">
                                    <div class="row">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">众筹金额：</span>
                                                <input type="text" class="form-control input-sm" id="sminput"
                                                       placeholder="">
                                                <span class="input-group-addon">万</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">起投金额：</span>
                                                <input type="text" class="form-control input-sm" id="sminput"
                                                       placeholder="">
                                                <span class="input-group-addon">万</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">剩余时间：</span>
                                                <input type="text" class="form-control input-sm" id="sminput"
                                                       placeholder="">
                                                <span class="input-group-addon">天</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="widget flat radius-bordered">
                                <div class="widget-header bordered-bottom">
                                    <span class="widget-caption">项目主图</span>
                                </div>
                                <div class="widget-body input-group-qm">
                                    <div class="row">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-8">
                                            <div>
                                                <input type="file" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="widget flat radius-bordered">
                                <div class="widget-header bordered-bottom">
                                    <span class="widget-caption">商品描述</span>
                                </div>
                                <div class="widget-body">
                                    <div id="alerts"></div>
                                    <div class="btn-toolbar wysiwyg-toolbar" data-role="editor-toolbar"
                                         data-target="#editor">
                                        <div class="btn-group">
                                            <a class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                               title="字体"><i class="fa fa-font"></i><b class="caret"></b></a>
                                            <ul class="dropdown-menu"></ul>
                                        </div>
                                        <div class="btn-group">
                                            <a class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                               title="字号"><i class="fa fa-text-height"></i>&nbsp;<b
                                                        class="caret"></b></a>
                                            <ul class="dropdown-menu dropdown-default">
                                                <li><a data-edit="fontSize 5"><font size="5">大</font></a></li>
                                                <li><a data-edit="fontSize 3"><font size="3">中</font></a></li>
                                                <li><a data-edit="fontSize 1"><font size="1">小</font></a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <a class="btn btn-default" data-edit="bold" title="粗体 (Ctrl/Cmd+B)"><i
                                                        class="fa fa-bold"></i></a>
                                            <a class="btn btn-default" data-edit="italic" title="斜体 (Ctrl/Cmd+I)"><i
                                                        class="fa fa-italic"></i></a>
                                            <a class="btn btn-default" data-edit="strikethrough" title="删除线"><i
                                                        class="fa fa-strikethrough"></i></a>
                                            <a class="btn btn-default" data-edit="underline" title="下划线 (Ctrl/Cmd+U)"><i
                                                        class="fa fa-underline"></i></a>
                                        </div>
                                        <div class="btn-group">
                                            <a class="btn btn-default" data-edit="insertunorderedlist"
                                               title="圆点编号"><i class="fa fa-list-ul"></i></a>
                                            <a class="btn btn-default" data-edit="insertorderedlist" title="数字编号"><i
                                                        class="fa fa-list-ol"></i></a>
                                            <a class="btn btn-default" data-edit="outdent"
                                               title="去掉缩进 (Shift+Tab)"><i class="fa fa-outdent"></i></a>
                                            <a class="btn btn-default" data-edit="indent" title="增加缩进 (Tab)"><i
                                                        class="fa fa-indent"></i></a>
                                        </div>
                                        <div class="btn-group">
                                            <a class="btn btn-default" data-edit="justifyleft"
                                               title="居左 (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                                            <a class="btn btn-default" data-edit="justifycenter"
                                               title="居中 (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                                            <a class="btn btn-default" data-edit="justifyright"
                                               title="居右 (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                                            <a class="btn btn-default" data-edit="justifyfull" title="自适应 (Ctrl/Cmd+J)"><i
                                                        class="fa fa-align-justify"></i></a>
                                        </div>
                                        <div class="btn-group">
                                            <a class="btn btn-default" data-edit="undo" title="撤销 (Ctrl/Cmd+Z)"><i
                                                        class="fa fa-undo"></i></a>
                                            <a class="btn btn-default" data-edit="redo" title="前进 (Ctrl/Cmd+Y)"><i
                                                        class="fa fa-repeat"></i></a>
                                        </div>
                                        <input type="text" data-edit="inserttext" class="wysiwyg-voiceBtn" id="voiceBtn"
                                               x-webkit-speech="">
                                    </div>
                                    <div class="wysiwyg-editor" id="editor">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-5 col-lg-10">
                            <input class="btn btn-palegreen" type="submit" value=" 提  交 "/>
                        </div>
                    </div>
                </form>
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
<script>
    $(function () {
        function initToolbarBootstrapBindings() {
            var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                    'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                    'Times New Roman', 'Verdana'],
                fontTarget = $('[title=Font]').siblings('.dropdown-menu');
            $.each(fonts, function (idx, fontName) {
                fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
            });
            $('a[title]').tooltip({container: 'body'});
            $('.dropdown-menu input').click(function () {
                return false;
            })
                .change(function () {
                    $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                })
                .keydown('esc', function () {
                    this.value = '';
                    $(this).change();
                });

            $('[data-role=magic-overlay]').each(function () {
                var overlay = $(this), target = $(overlay.data('target'));
                overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
            });
            if ("onwebkitspeechchange" in document.createElement("input")) {
                var editorOffset = $('#editor').offset();
                $('#voiceBtn').css('position', 'absolute').offset({
                    top: editorOffset.top,
                    left: editorOffset.left + $('#editor').innerWidth() - 35
                });
            } else {
                $('#voiceBtn').hide();
            }
        };

        function showErrorAlert(reason, detail) {
            var msg = '';
            if (reason === 'unsupported-file-type') {
                msg = "Unsupported format " + detail;
            }
            else {
                console.log("error uploading file", reason, detail);
            }
            $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
        };
        initToolbarBootstrapBindings();
        $('.wysiwyg-editor').wysiwyg({fileUploadError: showErrorAlert});
        window.prettyPrint && prettyPrint();
    });
</script>

<!--Summernote Scripts-->
<script src="assets/js/editors/summernote/summernote.js"></script>
<script>
    $(document).ready(function () {
        $("#inputForm").bootstrapValidator();
    });
</script>

</body>
<!--  /Body -->
</html>
