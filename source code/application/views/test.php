<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../styles/img/favicon.ico">

    <title>test</title>

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
            <p class="navbar-text">张先生，下午好
                <button type="button" class="btn btn-danger btn-xs logout">
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
                <li class="active"><a href="../main"><span class="glyphicon glyphicon-home">&nbsp;</span>首 页</a></li>
                <li><a href="../customer"><span class="glyphicon glyphicon-user">&nbsp;</span>客户信息</a></li>
                <li><a href="../price"><span class="glyphicon glyphicon-glass">&nbsp;</span>价格信息</a></li>
                <li><a href="../inventory"><span class="glyphicon glyphicon-pencil">&nbsp;</span>数据录入</a></li>
                <li><a href="../finance"><span class="glyphicon glyphicon-usd">&nbsp;</span>逸洁总账</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h3 class="page-header">客户信息</h3>
            <button type="button" id="btnCAdd" class="btn btn-primary" data-toggle="modal"
                    data-target="#editModal"><span
                    class="glyphicon glyphicon-plus"></span>新增客户
            </button>
            <h6></h6>
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
                    <tbody>
                    <tr>
                        <td>1001</td>
                        <td>Lorem</td>
                        <td>老张</td>
                        <td>ipsum方式发到各环节看了看</td>
                        <td>dolor</td>
                        <td>sit</td>
                        <td>
                            <a href="" onclick="donothing()" class="editinfo" data-toggle="modal"
                               data-target="#editModal">修改</a> /
                            <a href="" onclick="donothing()" class="delinfo" data-toggle="modal"
                               data-target="#delModal">删除</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1002</td>
                        <td>Hello</td>
                        <td>老孙</td>
                        <td>sdhdfsds</td>
                        <td>qwer</td>
                        <td>cxv</td>
                        <td>
                            <a href="" onclick="javascript:void(0);" class="editinfo" data-toggle="modal"
                               data-target="#editModal">修改</a> /
                            <a href="" onclick="javascript:void(0);" class="delinfo" data-toggle="modal"
                               data-target="#delModal">删除</a>
                        </td>
                    </tr>
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
                                <input id="cname" type="text" title="客户名称">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="row">
                            <div class="col-sm-4 col-md-4">
                                <span>老板姓名:</span>
                            </div>
                            <div class="col-sm-8 col-md-8">
                                <input id="cboss" type="text" title="老板姓名">
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
                                <input id="clink" type="text" title="联系人">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="row">
                            <div class="col-sm-4 col-md-4">
                                <span>联系电话:</span>
                            </div>
                            <div class="col-sm-8 col-md-8">
                                <input id="ctel" type="text" title="联系电话">
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
                                <input id="caddress" type="text" title="地址">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">关闭
                </button>
                <button type="button" class="btn btn-primary">
                    提交更改
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
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">取消
                </button>
                <button type="button" class="btn btn-primary">确定
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
</body>
</html>