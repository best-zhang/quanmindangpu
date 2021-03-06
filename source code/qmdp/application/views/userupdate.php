﻿<?php
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
    <title>个人资料修改</title>

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

    <link href="assets/css/fileinput.min.css" rel="stylesheet" type="text/css"/>

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

        .well-detail {
            padding-top: 50px;
            padding-bottom: 80px;
        }

        .img-user-header img {
            width: 100px;
            height: 100px;
        }

        #inputform .form-group {
            margin: 30px;
        }

        .memo {
            font-size: 14px;
            color: #777777;
        }

        .file-drop-zone {
            margin: 0px;
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
                <div class="row well well-detail">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                        <input type="file" class="file" id="img_url" name="image_data"
                               accept="image/jpg,image/jpeg,image/png,image/gif" multiple>
                        <div class="text-center margin-top-10 memo">（图片大小建议: 120 x 120）</div>
                        <input id="imgs" class="select2-display-none" name="imgs" value="">
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <form id="inputform" method="post" action="../userupdate/save"
                              class="form-horizontal"
                              data-bv-message="填写不正确"
                              data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                              data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                              data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                            <div class="form-group">
                                <label class="col-lg-3 col-md-3 col-sm-3 control-label padding-right-5">姓名:</label>
                                <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5">
                                    <label class="control-label"><?php echo $userinfo->name ?></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 col-md-3 col-sm-3 control-label padding-right-5">性别:</label>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9">
                                    <label class="radio-inline">
                                        <input name="sex" type="radio"
                                               value="0" <?php if (($userinfo->sex) == '男') echo 'checked'; ?>>
                                        <span class="text">男</span>
                                    </label>
                                    <label class="radio-inline">
                                        <input name="sex" type="radio"
                                               value="1" <?php if (($userinfo->sex) == '女') echo 'checked'; ?>>
                                        <span class="text">女</span>
                                    </label>
                                    <label class="radio select2-display-none">
                                        <input name="sex" type="radio">
                                        <span class="text"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 col-md-3 col-sm-3 control-label padding-right-5">生日:</label>
                                <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5 no-padding-right">
                                    <span class="input-icon icon-right">
                                     <input class="form-control date-picker" name="birthday" id="birthday" type="text"
                                            data-date-format="yyyy-mm-dd" value="<?php echo $userinfo->birthday ?>">
                                       <i class="fa fa-calendar dark"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 col-md-3 col-sm-3 control-label padding-right-5">联系方式:</label>
                                <div class="col-lg-4 col-md-4 col-sm-4 padding-left-5 no-padding-right">
                                    <input type="text" class="form-control input-sm" name="tel" id="tel"
                                           placeholder="" value="<?php echo $userinfo->tel ?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-4 col-lg-8">
                                    <input class="btn btn-palegreen" type="button" onclick="toVaild()" value="保 存"/>
                                </div>
                            </div>
                        </form>
                    </div>
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
<!--Bootstrap Date Picker-->
<script src="assets/js/datetime/bootstrap-datepicker.js"></script>
<!--Page Related Scripts-->
<script src="assets/js/validation/bootstrapValidator.js"></script>

<script src="assets/js/fileinput/fileinput.min.js"></script>
<script src="assets/js/fileinput/fileinput_locale_zh.js"></script>
<script src="assets/js/_js/home.common.js"></script>

<script>
    $(document).ready(function () {
        $('.date-picker').datepicker();
        $("#inputform").bootstrapValidator();
    });

    //初始化上传插件
    $("#img_url").fileinput({
        language: 'zh',
        showCaption: false,  //不显示文字表述
        showRemove: false, //不显示移除按钮
        showUpload: false, //不显示上传按钮
        uploadUrl: "../userupdate/uploadimg", //上传后台操作的方法
//        uploadAsync: false, //设置上传同步异步 此为同步
        maxFileSize: 1024, //单位为kb，如果为0表示不限制文件大小
        allowedFileExtensions: ['jpg', 'jpeg', 'png', 'gif'], //限制上传文件后缀
        layoutTemplates: {
            actionUpload: "" //设置为空可去掉上传按钮
            //actionDelete:"" //设置为空可去掉删除按钮
        },
        dropZoneTitle: '头像上传',
        minImageWidth: 100, //图片的最小宽度
        minImageHeight: 100,//图片的最小高度
        maxImageWidth: 500,//图片的最大宽度
        maxImageHeight: 500,//图片的最大高度
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

            $("#imgs").val(newname);
        }
    }).on("filesuccessremove", function (event, data) {
        console.log("删除了");
        $("#imgs").val("");
    }).on("filecleared", function (event, data) {
        console.log("清空了");
        $("#imgs").val("");
    });

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
            url: '../userupdate/save',//路径
            data: {
                "sex": $('input:radio:checked').val(),
                "birthday": $("#birthday").val(),
                "tel": $("#tel").val(),
                "imgs": $("#imgs").val()
            },
            success: function (data) {
                if (data) {
                    alert(data);
                    window.location.reload();
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
