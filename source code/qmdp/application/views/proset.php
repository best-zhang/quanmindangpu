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

    <link href="assets/css/fileinput.min.css" rel="stylesheet" type="text/css"/>

    <style type="text/css">
        .page-body {
            background: #ffffff;
        }

        .input-group-title {
            font-size: 18px;
            font-weight: bold;
            padding: 20px;
            line-height: 34px;
            color: #555;
        }

        .input-textarea {
            width: 100%;
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
                <div class="row">
                    <form id="inputform" method="post" action="../proset/save"
                          class="form-horizontal"
                          data-bv-message="填写不正确"
                          data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                          data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                          data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                        <div class="input-group-title">基本信息</div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">项目名称:</label>
                            <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5">
                                <input type="text" class="form-control input-sm" name="proname" id="proname"
                                       placeholder=""
                                       data-bv-message="项目名称格式不正确"
                                       data-bv-notempty="true"
                                       data-bv-notempty-message="项目名称不能为空"
                                       data-bv-stringlength="true"
                                       data-bv-stringlength-min="1"
                                       data-bv-stringlength-max="30"
                                       data-bv-stringlength-message="项目名称长度范围为1-30"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">标题:</label>
                            <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5">
                                <input type="text" class="form-control input-sm" name="protitle" id="protitle"
                                       placeholder=""
                                       data-bv-message="标题填写不正确"
                                       data-bv-stringlength="true"
                                       data-bv-stringlength-min="1"
                                       data-bv-stringlength-max="50"
                                       data-bv-stringlength-message="标题长度范围为1-50"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">项目简介:</label>
                            <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5">
                                <textarea class="input-textarea" rows="3" name="introduction" id="introduction"
                                          cols="30"></textarea>
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
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">微信:</label>
                            <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5">
                                <input type="text" class="form-control input-sm" name="wx" id="wx"
                                       placeholder=""
                                       data-bv-message="微信填写不正确"
                                       data-bv-stringlength="true"
                                       data-bv-stringlength-min="1"
                                       data-bv-stringlength-max="30"
                                       data-bv-stringlength-message="微信长度范围为1-30"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">QQ:</label>
                            <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5">
                                <input type="text" class="form-control input-sm" name="qq" id="qq"
                                       placeholder=""
                                       data-bv-message="QQ格式不正确"
                                       data-bv-regexp="true"
                                       data-bv-regexp-regexp="[1-9][0-9]{0,20}"
                                       data-bv-regexp-message="QQ号只允许填写数字"
                                       data-bv-stringlength="true"
                                       data-bv-stringlength-min="1"
                                       data-bv-stringlength-max="20"
                                       data-bv-stringlength-message="QQ号长度范围为1-20"/>
                            </div>
                        </div>
                        <div class="input-group-title">项目金额</div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">众筹金额:</label>
                            <div class="col-lg-2 col-md-2 col-sm-3 padding-left-5">
                                <input type="text" class="form-control input-sm" name="wantall" id="wantall"
                                       placeholder=""
                                       data-bv-message="众筹金额填写不正确"
                                       data-bv-notempty="true"
                                       data-bv-notempty-message="众筹金额不能为空"
                                       data-bv-regexp="true"
                                       data-bv-regexp-regexp="(^[1-9]([0-9]+)?(\.[0-9]{1,2})?$)|(^(0){1}$)|(^[0-9]\.[0-9]([0-9])?$)"
                                       data-bv-regexp-message="众筹金额填写不正确"
                                       data-bv-stringlength="true"
                                       data-bv-stringlength-min="1"
                                       data-bv-stringlength-max="10"
                                       data-bv-stringlength-message="众筹金额长度范围为1-10"/>
                            </div>
                            <label class="col-lg-1 col-md-1 col-sm-1 control-label no-padding-left text-align-left">万</label>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">起投金额:</label>
                            <div class="col-lg-2 col-md-2 col-sm-3 padding-left-5">
                                <input type="text" class="form-control input-sm" name="frommoney" id="frommoney"
                                       placeholder=""
                                       data-bv-message="起投金额填写不正确"
                                       data-bv-notempty="true"
                                       data-bv-notempty-message="起投金额不能为空"
                                       data-bv-regexp="true"
                                       data-bv-regexp-regexp="(^[1-9]([0-9]+)?(\.[0-9]{1,2})?$)|(^(0){1}$)|(^[0-9]\.[0-9]([0-9])?$)"
                                       data-bv-regexp-message="起投金额填写不正确"
                                       data-bv-stringlength="true"
                                       data-bv-stringlength-min="1"
                                       data-bv-stringlength-max="10"
                                       data-bv-stringlength-message="起投金额长度范围为1-10"/>
                            </div>
                            <label class="col-lg-1 col-md-1 col-sm-1 control-label no-padding-left text-align-left">万</label>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-2 control-label padding-right-5">剩余天数:</label>
                            <div class="col-lg-2 col-md-2 col-sm-3 padding-left-5">
                                <input type="text" class="form-control input-sm" name="remainday" id="remainday"
                                       placeholder=""
                                       data-bv-message="剩余时间填写不正确"
                                       data-bv-notempty="true"
                                       data-bv-notempty-message="剩余时间不能为空"
                                       data-bv-regexp="true"
                                       data-bv-regexp-regexp="[1-9][0-9]*"
                                       data-bv-regexp-message="剩余时间只允许填写数字"
                                       data-bv-stringlength="true"
                                       data-bv-stringlength-min="1"
                                       data-bv-stringlength-max="5"
                                       data-bv-stringlength-message="项目名称长度范围为1-5"/>
                            </div>
                            <label class="col-lg-1 col-md-1 col-sm-1 control-label no-padding-left text-align-left">天</label>
                        </div>
                        <div class="input-group-title">项目主图</div>
                        <div class="form-group">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                <input id="imgs" class="select2-display-none" name="imgs" value="">
                            </div>
                            <div class="col-lg-4 col-md-5 col-sm-8 col-xs-10">
                                <input type="file" class="file" id="img_url" name="image_data"
                                       accept="image/jpg,image/jpeg,image/png,image/gif" multiple>
                            </div>
                        </div>
                        <div class="input-group-title">项目描述</div>
                        <div class="form-group">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            <div class="col-lg-10">
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
                        <div class="form-group">
                            <input id="discrible" class="select2-display-none" name="discrible" value="">
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-4 col-lg-8">
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
<script src="assets/js/validation/bootstrapValidator.js"></script>

<script src="assets/js/fileinput/fileinput.min.js"></script>
<script src="assets/js/fileinput/fileinput_locale_zh.js"></script>
<script>
    $(document).ready(function () {
        $("#inputform").bootstrapValidator();
    });
    //初始化上传插件
    $("#img_url").fileinput({
        language: 'zh',
        showCaption: false,  //不显示文字表述
        showRemove: false, //不显示移除按钮
        showUpload: false, //不显示上传按钮
        uploadUrl: "../proset/uploadimg", //上传后台操作的方法
//        uploadAsync: false, //设置上传同步异步 此为同步
        maxFileSize: 8 * 1024, //单位为kb，如果为0表示不限制文件大小
        allowedFileExtensions: ['jpg', 'jpeg', 'png', 'gif'], //限制上传文件后缀
        layoutTemplates: {
            actionUpload: "" //设置为空可去掉上传按钮
            //actionDelete:"" //设置为空可去掉删除按钮
        },
        dropZoneTitle: '图片上传',
        minImageWidth: 50, //图片的最小宽度
        minImageHeight: 50,//图片的最小高度
        maxImageWidth: 2000,//图片的最大宽度
        maxImageHeight: 2000,//图片的最大高度
        //minFileCount: 0,
        maxFileCount: 1 //表示允许同时上传的最大文件个数
    }).on("filebatchselected", function (event, files) {
        $(this).fileinput("upload");
    }).on("fileuploaded", function (event, data) {
        if (data.response) {
            console.log(data.response);
            var oriname = data.response.upload_data.client_name;
            var newname = data.response.upload_data.file_name;
            $("img[title$='" + oriname + "']").attr("newname", newname);
            var imgs = $("#imgs").val();
            if (!checkimg(newname)) {
                $("#imgs").val(imgs + "," + newname);
            }
        }
    }).on("filesuccessremove", function (event, data) {
        console.log("删除了");
        var delname = $("#" + data + " .kv-file-content img").attr("newname");
        var imgs = $("#imgs").val();
        imgs = imgs.replace("," + delname, "");
        $("#imgs").val(imgs);
    }).on("filecleared", function (event, data) {
        console.log("清空了");
        $("#imgs").val("");
    });

    function checkimg(name) {
        var imgs = $("#imgs").val();
        var strs = new Array(); //定义一数组
        strs = imgs.split(","); //字符分割
        for (i = 0; i < strs.length; i++) {
            if (strs[i] == name)
                return true;
        }
        return false;
    }

    function toVaild() {
        $("#discrible").val($("#editor").html());

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
            url: '../proset/save',//路径
            data: {
                "proname": $("#proname").val(),
                "protitle": $("#protitle").val(),
                "introduction": $("#introduction").val(),
                "tel": $("#tel").val(),
                "wx": $("#wx").val(),
                "qq": $("#qq").val(),
                "wantall": $("#wantall").val(),
                "frommoney": $("#frommoney").val(),
                "imgs": $("#imgs").val(),
                "remainday": $("#remainday").val(),
                "discrible": $("#discrible").val()
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
