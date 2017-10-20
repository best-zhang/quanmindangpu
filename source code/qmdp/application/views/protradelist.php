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
    <title>交易列表</title>

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

    <!--Page Related styles-->
    <link href="assets/css/dataTables.bootstrap.css" rel="stylesheet"/>

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

        #simpledatatable_filter, #simpledatatable_length, #simpledatatable_info {
            display: none;
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
                    <li class="active">交易列表</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">
                <div class="row">
                    <div class="input-group-title">交易列表</div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <table class="table table-striped table-bordered table-hover" id="simpledatatable">
                            <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    姓名
                                </th>
                                <th>
                                    项目名称
                                </th>
                                <th>
                                    金额(万)
                                </th>
                                <th>
                                    积分
                                </th>
                                <th>
                                    时间
                                </th>
                                <th>
                                    交易地点
                                </th>
                                <th>
                                    经办人
                                </th>
                            </tr>
                            </thead>
                            <tbody id="list">

                            </tbody>
                        </table>
                    </div>
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
<script src="assets/js/datatable/jquery.dataTables.min.js"></script>
<script src="assets/js/datatable/ZeroClipboard.js"></script>
<script src="assets/js/datatable/dataTables.tableTools.min.js"></script>
<script src="assets/js/datatable/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        inittable();
        getlist();
    });

    function inittable() {
        //Datatable Initiating
        var oTable = $('#simpledatatable').dataTable({
            "sDom": "Tflt<'row DTTTFooter'<'col-sm-6'i><'col-sm-6'p>>",
            "iDisplayLength": 5,
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
                {"bSortable": false},
                {"bSortable": false}
            ],
            "aaSorting": []
        });

        //Check All Functionality
        jQuery('#simpledatatable .group-checkable').change(function () {
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
        jQuery('#simpledatatable tbody tr .checkboxes').change(function () {
            $(this).parents('tr').toggleClass("active");
        });
    }

    function getlist() {
        $.ajax({
            type: 'POST',
            url: '../protradelist/getProTradeList',//路径
            data: {},
            success: function (data) {
                var str = "";
                if (data) {
                    for (i = 0; i < data.length; i++) {
                        str += '<tr lid="' + data[i]["id"] + '">' +
                            '<td>' + (i + 1) + '</td>' +
                            '<td>' + data[i]["person"] + '</td>' +
                            '<td>' + (data[i]["name"] ? data[i]["name"] : "") + '</td>' +
                            '<td>' + data[i]["money"] + ' </td>' +
                            '<td>' + data[i]["integral"] + '</td>' +
                            '<td>' + data[i]["tradetime"].replace('00:00:00', '') + '</td>' +
                            '<td>' + data[i]["address"] + '</td>' +
                            '<td>' + data[i]["jingban"] + '</td>' +
                            '</tr>';
                    }
                }
                if (!str) {
                    str = '<tr class="odd"><td valign="top" colspan="8" class="dataTables_empty">无数据</td></tr>';
                }

                $("#list").html(str);
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
