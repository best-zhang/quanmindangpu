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

    <title>客户信息</title>

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
                <li class="active"><a href="../customer"><span class="glyphicon glyphicon-user">&nbsp;</span>客户信息</a>
                </li>
                <li><a href="../price"><span class="glyphicon glyphicon-glass">&nbsp;</span>价格信息</a></li>
                <li><a href="../inventory"><span class="glyphicon glyphicon-pencil">&nbsp;</span>数据录入</a></li>
                <li><a href="../finance"><span class="glyphicon glyphicon-usd">&nbsp;</span>逸洁总账</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h3 class="page-header">客户信息</h3>
            <div>
                <button type="button" id="btnCAdd" class="btn btn-primary" data-toggle="modal"
                        data-target="#editModal"><span
                        class="glyphicon glyphicon-plus"></span>新增客户
                </button>
                <a id="recyclelink" href="#" class="pull-right" onclick="onRecycleLink()">回收站</a>
                <h6 class="clearfix"></h6>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>编 号</th>
                        <th>客户名称</th>
                        <th>老板</th>
                        <th>联系人</th>
                        <th>联系电话</th>
                        <th>地址</th>
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
                                <input id="cname" class="form-control" type="text" title="客户名称" required autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="row">
                            <div class="col-sm-4 col-md-4">
                                <span>老板姓名:</span>
                            </div>
                            <div class="col-sm-8 col-md-8">
                                <input id="cboss" class="form-control" type="text" title="老板姓名">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row edititem">
                    <div class="col-sm-6 col-md-6">
                        <div class="row">
                            <div class="col-sm-4 col-md-4">
                                <span>联&nbsp;系&nbsp;人:</span>
                            </div>
                            <div class="col-sm-8 col-md-8">
                                <input id="clink" class="form-control" type="text" title="联系人">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="row">
                            <div class="col-sm-4 col-md-4">
                                <span>联系电话:</span>
                            </div>
                            <div class="col-sm-8 col-md-8">
                                <input id="ctel" class="form-control" type="text" title="联系电话">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row edititem">
                    <div class="col-sm-12 col-md-12">
                        <div class="row">
                            <div class="col-sm-2 col-md-2">
                                <span>地&nbsp;&nbsp;&nbsp;址:</span>
                            </div>
                            <div class="col-sm-10 col-md-10">
                                <input id="caddress" class="form-control" type="text" title="地址">
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
                    <h4>你确定要删除客户(<span id="delName"></span>)吗？</h4>
                    <h5>删除后可以在"回收站"中重新恢复.</h5>
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

<!-- 模态框（Modal）Reuse -->
<div class="modal fade" id="reuseModal" tabindex="-1" role="dialog" aria-labelledby="reuseModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">×
                </button>
                <h4 class="modal-title" id="reuseModalLabel">
                    恢复客户
                </h4>
            </div>
            <div class="modal-body">
                <div class="row text-center">
                    <h4>你确定要恢复客户(<span id="reuseName"></span>)为可用吗？</h4>
                </div>
            </div>
            <div class="modal-footer">
                <span id="reuseinfo" class="text-center"></span>
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">取消
                </button>
                <button id="btnreuse" type="button" class="btn btn-primary">确定
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
<script src="../../styles/js/customer.js"></script>
<script src="../../styles/js/common.js"></script>
</body>
</html>