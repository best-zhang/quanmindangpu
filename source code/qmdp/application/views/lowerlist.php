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
    <title>人员列表</title>

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

    <!--Page Related styles-->
    <link href="assets/css/dataTables.bootstrap.css" rel="stylesheet"/>

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
            background-color: #0099FF;
            font-size: 16px;
            font-weight: bold;
            padding: 5px;
        }

        .well-nav .nav-link a {
            font-size: 14px;
            color: #000000;
        }

        .well-detail {
            padding-top: 30px;
            padding-bottom: 30px;
        }

        .well-table-title {
            padding: 10px;
            background-color: #7ef0ff;
        }

        .span-level {
            font-weight: bold;
            font-size: 17px;
        }

        #profit-a, #profit-b, #profit-c {
            line-height: 24px;
            font-weight: bold;
        }

        #table-a_filter, #table-a_length, #table-a_info {
            display: none;
        }

        #table-b_filter, #table-b_length, #table-b_info {
            display: none;
        }

        #table-c_filter, #table-c_length, #table-c_info {
            display: none;
        }

        .DTTTFooter {
            display: none;
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
                    <div class="well-table-title">
                        <div class="text-center"><span class="span-level">A级(5%)</span>
                            <span id="profit-a" class="pull-right padding-right-20">金额</span>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover" id="table-a">
                        <thead>
                        <tr>
                            <th>
                                项目名称
                            </th>
                            <th>
                                日期
                            </th>
                            <th>
                                姓名
                            </th>
                            <th>
                                年龄
                            </th>
                            <th>
                                性别
                            </th>
                            <th>
                                金额
                            </th>
                            <th>
                                收益
                            </th>
                        </tr>
                        </thead>
                        <tbody id="list-a">

                        </tbody>
                    </table>
                    <div class="well-table-title margin-top-20">
                        <div class="text-center"><span class="span-level">B级(3%)</span>
                            <span id="profit-b" class="pull-right padding-right-20">金额</span>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover" id="table-b">
                        <thead>
                        <tr>
                            <th>
                                项目名称
                            </th>
                            <th>
                                日期
                            </th>
                            <th>
                                姓名
                            </th>
                            <th>
                                年龄
                            </th>
                            <th>
                                性别
                            </th>
                            <th>
                                金额
                            </th>
                            <th>
                                收益
                            </th>
                        </tr>
                        </thead>
                        <tbody id="list-b">

                        </tbody>
                    </table>
                    <div class="well-table-title margin-top-20">
                        <div class="text-center"><span class="span-level">C级(2%)</span>
                            <span id="profit-c" class="pull-right padding-right-20">金额</span>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover" id="table-c">
                        <thead>
                        <tr>
                            <th>
                                项目名称
                            </th>
                            <th>
                                日期
                            </th>
                            <th>
                                姓名
                            </th>
                            <th>
                                年龄
                            </th>
                            <th>
                                性别
                            </th>
                            <th>
                                金额
                            </th>
                            <th>
                                收益
                            </th>
                        </tr>
                        </thead>
                        <tbody id="list-c">

                        </tbody>
                    </table>
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

<!--Page Related Scripts-->
<script src="assets/js/datatable/jquery.dataTables.min.js"></script>
<script src="assets/js/datatable/ZeroClipboard.js"></script>
<script src="assets/js/datatable/dataTables.tableTools.min.js"></script>
<script src="assets/js/datatable/dataTables.bootstrap.min.js"></script>
<script src="assets/js/_js/home.common.js"></script>

<script>
    $(document).ready(function () {
        getlistA();
        getlistB();
        getlistC();
    });

    function inittableA() {
        //Datatable Initiating
        var oTableA = $('#table-a').dataTable({
            "sDom": "Tflt<'row DTTTFooter'<'col-sm-6'i><'col-sm-6'p>>",
            "bPaginate": false,//显示（使用）分页器
            "iDisplayLength": 15,
            "oTableTools": {
                "aButtons": [],
                "sSwfPath": "assets/swf/copy_csv_xls_pdf.swf"
            },
            "language": {
                "search": "",
                "sLengthMenu": "_MENU_",
                "oPaginate": {
                    "sPrevious": "往前",
                    "sNext": "往后"
                }
            },
            "aoColumns": [
                {"bSortable": false},
                {"bSortable": false},
                {"bSortable": false},
                {"bSortable": false},
                {"bSortable": false},
                {"bSortable": false},
                null
            ],
            "aaSorting": []
        });

        //Check All Functionality
        jQuery('#table-a .group-checkable').change(function () {
            var set = $(".checkboxes");
            var checked = jQuery(this).is(":checked");
            jQuery(set).each(function () {
                if (checked) {
                    $(this).prop("checked", true);
                    $(this).parents('tr').addClass("active");
                } else {
                    $(this).prop("checked", false);
                    $(this).parents('tr').removeClass("active");
                }
            });

        });
        jQuery('#table-a tbody tr .checkboxes').change(function () {
            $(this).parents('tr').toggleClass("active");
        });
    }

    function inittableB() {
        //Datatable Initiating
        var oTableB = $('#table-b').dataTable({
            "sDom": "Tflt<'row DTTTFooter'<'col-sm-6'i><'col-sm-6'p>>",
            "bPaginate": false,//显示（使用）分页器
            "iDisplayLength": 15,
            "oTableTools": {
                "aButtons": [],
                "sSwfPath": "assets/swf/copy_csv_xls_pdf.swf"
            },
            "language": {
                "search": "",
                "sLengthMenu": "_MENU_",
                "oPaginate": {
                    "sPrevious": "往前",
                    "sNext": "往后"
                }
            },
            "aoColumns": [
                {"bSortable": false},
                {"bSortable": false},
                {"bSortable": false},
                {"bSortable": false},
                {"bSortable": false},
                {"bSortable": false},
                null
            ],
            "aaSorting": []
        });

        //Check All Functionality
        jQuery('#table-b .group-checkable').change(function () {
            var set = $(".checkboxes");
            var checked = jQuery(this).is(":checked");
            jQuery(set).each(function () {
                if (checked) {
                    $(this).prop("checked", true);
                    $(this).parents('tr').addClass("active");
                } else {
                    $(this).prop("checked", false);
                    $(this).parents('tr').removeClass("active");
                }
            });

        });
        jQuery('#table-b tbody tr .checkboxes').change(function () {
            $(this).parents('tr').toggleClass("active");
        });
    }

    function inittableC() {
        //Datatable Initiating
        var oTableC = $('#table-c').dataTable({
            "sDom": "Tflt<'row DTTTFooter'<'col-sm-6'i><'col-sm-6'p>>",
            "bPaginate": false,//显示（使用）分页器
            "iDisplayLength": 15,
            "oTableTools": {
                "aButtons": [],
                "sSwfPath": "assets/swf/copy_csv_xls_pdf.swf"
            },
            "language": {
                "search": "",
                "sLengthMenu": "_MENU_",
                "oPaginate": {
                    "sPrevious": "往前",
                    "sNext": "往后"
                }
            },
            "aoColumns": [
                {"bSortable": false},
                {"bSortable": false},
                {"bSortable": false},
                {"bSortable": false},
                {"bSortable": false},
                {"bSortable": false},
                null
            ],
            "aaSorting": []
        });

        //Check All Functionality
        jQuery('#table-c .group-checkable').change(function () {
            var set = $(".checkboxes");
            var checked = jQuery(this).is(":checked");
            jQuery(set).each(function () {
                if (checked) {
                    $(this).prop("checked", true);
                    $(this).parents('tr').addClass("active");
                } else {
                    $(this).prop("checked", false);
                    $(this).parents('tr').removeClass("active");
                }
            });

        });
        jQuery('#table-c tbody tr .checkboxes').change(function () {
            $(this).parents('tr').toggleClass("active");
        });
    }

    function getlistA() {
        $.ajax({
            type: 'POST',
            url: '../lowerlist/getLowerListA',//路径
            data: {},
            success: function (data) {
                var str = "";
                if (data) {
                    var profit = 0;
                    var all = 0;
                    for (i = 0; i < data.length; i++) {
                        profit = data[i]["profit"] ? Number(data[i]["profit"]) : 0;
                        all += profit;
                        str += '<tr>' +
                            '<td>' + data[i]["proname"] + '</td>' +
                            '<td>' + data[i]["tradetime"].replace(" 00:00:00", "") + '</td>' +
                            '<td>' + (data[i]["name"] ? data[i]["name"] : "") + '</td>' +
                            '<td>' + data[i]["age"] + ' </td>' +
                            '<td>' + data[i]["sex"] + '</td>' +
                            '<td>' + (data[i]["money"] ? Number(data[i]["money"]).toFixed(2) : "0") + '</td>' +
                            '<td>' + profit + '</td>' +
                            '</tr>';
                    }
                }
                if (!str) {
                    str = '<tr class="odd"><td valign="top" colspan="8" class="dataTables_empty">暂无数据</td></tr>';
                }

                $("#list-a").html(str);
                $("#profit-a").html("金额: " + all.toFixed(2));
                inittableA();
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("获取项目数据出错：" + XMLHttpRequest.status + "," + textStatus);
            }
        });
    }

    function getlistB() {
        $.ajax({
            type: 'POST',
            url: '../lowerlist/getLowerListB',//路径
            data: {},
            success: function (data) {
                var str = "";
                if (data) {
                    var profit = 0;
                    var all = 0;
                    for (i = 0; i < data.length; i++) {
                        profit = data[i]["profit"] ? Number(data[i]["profit"]) : 0;
                        all += profit;
                        str += '<tr>' +
                            '<td>' + data[i]["proname"] + '</td>' +
                            '<td>' + data[i]["tradetime"].replace(" 00:00:00", "") + '</td>' +
                            '<td>' + (data[i]["name"] ? data[i]["name"] : "") + '</td>' +
                            '<td>' + data[i]["age"] + ' </td>' +
                            '<td>' + data[i]["sex"] + '</td>' +
                            '<td>' + (data[i]["money"] ? Number(data[i]["money"]).toFixed(2) : "0") + '</td>' +
                            '<td>' + (data[i]["profit"] ? Number(data[i]["profit"]).toFixed(2) : "0") + '</td>' +
                            '</tr>';
                    }
                }
                if (!str) {
                    str = '<tr class="odd"><td valign="top" colspan="8" class="dataTables_empty">暂无数据</td></tr>';
                }

                $("#list-b").html(str);
                $("#profit-b").html("金额: " + all.toFixed(2));
                inittableB();
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("获取项目数据出错：" + XMLHttpRequest.status + "," + textStatus);
            }
        });
    }

    function getlistC() {
        $.ajax({
            type: 'POST',
            url: '../lowerlist/getLowerListC',//路径
            data: {},
            success: function (data) {
                var str = "";
                if (data) {
                    var profit = 0;
                    var all = 0;
                    for (i = 0; i < data.length; i++) {
                        profit = data[i]["profit"] ? Number(data[i]["profit"]) : 0;
                        all += profit;
                        str += '<tr>' +
                            '<td>' + data[i]["proname"] + '</td>' +
                            '<td>' + data[i]["tradetime"].replace(" 00:00:00", "") + '</td>' +
                            '<td>' + (data[i]["name"] ? data[i]["name"] : "") + '</td>' +
                            '<td>' + data[i]["age"] + ' </td>' +
                            '<td>' + data[i]["sex"] + '</td>' +
                            '<td>' + (data[i]["money"] ? Number(data[i]["money"]).toFixed(2) : "0") + '</td>' +
                            '<td>' + (data[i]["profit"] ? Number(data[i]["profit"]).toFixed(2) : "0") + '</td>' +
                            '</tr>';
                    }
                }
                if (!str) {
                    str = '<tr class="odd"><td valign="top" colspan="8" class="dataTables_empty">暂无数据</td></tr>';
                }

                $("#list-c").html(str);
                $("#profit-c").html("金额: " + all.toFixed(2));
                inittableC();
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
