<?php
/**
 * Created by PhpStorm.
 * User: jumee
 * Date: 2016/9/22
 * Time: 15:20
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../styles/img/favicon.ico">

    <title>价格信息</title>

    <!-- Bootstrap core CSS -->
    <link href="../../styles/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../styles/css/main.css" rel="stylesheet">

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
                <li><a href="../main"><span class="glyphicon glyphicon-home">&nbsp;</span>首 页</a></li>
                <li><a href="../customer"><span class="glyphicon glyphicon-user">&nbsp;</span>客户信息</a></li>
                <li class="active"><a href="../price"><span class="glyphicon glyphicon-glass">&nbsp;</span>价格信息</a></li>
                <li><a href="../inventory"><span class="glyphicon glyphicon-pencil">&nbsp;</span>数据录入</a></li>
                <li><a href="../finance"><span class="glyphicon glyphicon-usd">&nbsp;</span>逸洁总账</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h3 class="page-header">客户价格信息</h3>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>客户名称</th>
                        <th>床单</th>
                        <th>被套</th>
                        <th>枕套</th>
                        <th>毛巾</th>
                        <th>浴巾</th>
                        <th>地巾</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody id="datalist">
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="container">
            <!--<p class="text-center">成都逸洁 版权所有</p>-->
        </div>
    </div>
</div>

<!-- 模态框（Modal）Edit -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">×
                </button>
                <h4 class="modal-title" id="editModalLabel">
                    新增客户
                </h4>
            </div>
            <div class="modal-body">
                <div class="row edititem">
                    <div class="col-sm-6 col-md-6">
                        <div class="row">
                            <div class="col-sm-4 col-md-4">
                                <span>客户名称:</span>
                            </div>
                            <div class="col-sm-8 col-md-8">
                                <input id="cname" class="form-control" type="text" title="客户名称" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6"></div>
                </div>
                <div class="row edititem">
                    <div class="col-sm-6 col-md-6">
                        <div class="row">
                            <div class="col-sm-4 col-md-4">
                                <span>床单:</span>
                            </div>
                            <div class="col-sm-8 col-md-8">
                                <input id="bedsheet" class="form-control" type="text" title="床单"
                                       onkeyup="checkDecimal(this)" autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="row">
                            <div class="col-sm-4 col-md-4">
                                <span>被套:</span>
                            </div>
                            <div class="col-sm-8 col-md-8">
                                <input id="bedsack" class="form-control" type="text" title="被套"
                                       onkeyup="checkDecimal(this)">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row edititem">
                    <div class="col-sm-6 col-md-6">
                        <div class="row">
                            <div class="col-sm-4 col-md-4">
                                <span>枕套</span>
                            </div>
                            <div class="col-sm-8 col-md-8">
                                <input id="pillowcase" class="form-control" type="text" title="枕套"
                                       onkeyup="checkDecimal(this)">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="row">
                            <div class="col-sm-4 col-md-4">
                                <span>毛巾</span>
                            </div>
                            <div class="col-sm-8 col-md-8">
                                <input id="towels" class="form-control" type="text" title="毛巾"
                                       onkeyup="checkDecimal(this)">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row edititem">
                    <div class="col-sm-6 col-md-6">
                        <div class="row">
                            <div class="col-sm-4 col-md-4">
                                <span>浴巾</span>
                            </div>
                            <div class="col-sm-8 col-md-8">
                                <input id="bathtowel" class="form-control" type="text" title="浴巾"
                                       onkeyup="checkDecimal(this)">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="row">
                            <div class="col-sm-4 col-md-4">
                                <span>地巾</span>
                            </div>
                            <div class="col-sm-8 col-md-8">
                                <input id="floortowel" class="form-control" type="text" title="地巾"
                                       onkeyup="checkDecimal(this)">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span id="resultinfo" class="text-center"></span>
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">关闭
                </button>
                <button id="btnsubmit" type="button" class="btn btn-primary">
                    提交
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal Edit-->

<!-- 模态框（Modal）Del -->
<div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="delModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">×
                </button>
                <h4 class="modal-title" id="delModalLabel">
                    删除客户
                </h4>
            </div>
            <div class="modal-body">
                <div class="row text-center">
                    <h4>你确定要删除客户(<span id="delName"></span>)的价格信息吗？</h4>
                </div>
            </div>
            <div class="modal-footer">
                <span id="delinfo" class="text-center"></span>
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">取消
                </button>
                <button id="btndel" type="button" class="btn btn-primary">确定
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal Edit-->

<!-- Bootstrap core JavaScript
   ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../../styles/js/jquery-1.9.1.min.js"></script>
<script src="../../styles/dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../styles/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="../../styles/js/price.js"></script>
<script src="../../styles/js/common.js"></script>
</body>
</html>