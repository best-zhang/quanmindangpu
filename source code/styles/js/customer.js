/**
 * Created by jumee on 2016/10/9.
 */

$(function () {
    $("#btnCAdd").click(function () {
        $("#editModalLabel").attr("uid", "").text("新增客户");
        $("#cname").val("");
        $("#cboss").val("");
        $("#clink").val("");
        $("#ctel").val("");
        $("#caddress").val("");

        $("#resultinfo").text("");
    });

    $("#btnsubmit").click(function () {
        var id = $("#editModalLabel").attr("uid");
        if (id) {
            editCustomer();
        } else {
            addCustomer();
        }
    });

    $("#btndel").click(function () {
        delCustomer();
    });

    $("#btnreuse").click(function () {
        reUseCustomer();
    });

    modelCenter($('#editModal'));
    modelCenter($('#delModal'));
    modelCenter($('#reuseModal'));
    getCustomers();
});

function getCustomers() {
    $("#datalist").html('<tr><td colspan="7">数据加载中...</td></tr>');
    $.ajax({
        type: 'POST',
        url: '../customer/getCustomersNoDel',//路径
        data: {//"name": "hi,是我"
        },
        //dataType: 'json',//加上会报错
        success: function (data) {
            if (data) {
                var info = eval(data);
                var htm = '';
                $.each(info, function (index, item) {
                    htm += '<tr>' + '<td>' + item.id + '</td><td>' + item.name + '</td><td>' + item.bossname
                        + '</td><td>' + item.linkman + '</td><td>' + item.linktel + '</td><td>' + item.address + ' </td><td> ' +
                        '<a href="" onclick="setValue(this)" class="editinfo" data-toggle="modal" data-target="#editModal">修改</a>/' +
                        '<a href="" onclick="setDelName(this)" class="delinfo" data-toggle="modal" data-target="#delModal">删除</a></td></tr>'
                });
                htm += '<tr><td colspan="7">总数: ' + info.length + ' </td></tr>';
                $("#datalist").html(htm);
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("获取数据出错：状态码" + XMLHttpRequest.status + "," + textStatus);
        }
    });
}

function addCustomer() {
    $.ajax({
        type: 'POST',
        url: '../customer/addCustomer',//路径
        data: {
            "name": $("#cname").val(),
            "boss": $("#cboss").val(),
            "link": $("#clink").val(),
            "linktel": $("#ctel").val(),
            "address": $("#caddress").val()
        },
        //dataType: 'json',//加上会报错
        success: function (data) {
            $("#resultinfo").text(data);
            if (data == "成功") {
                getCustomers();
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("获取数据出错：状态码" + XMLHttpRequest.status + "," + textStatus);
        }
    });
}

function editCustomer() {
    $.ajax({
        type: 'POST',
        url: '../customer/editCustomer',//路径
        data: {
            "name": $("#cname").val(),
            "boss": $("#cboss").val(),
            "link": $("#clink").val(),
            "linktel": $("#ctel").val(),
            "address": $("#caddress").val(),
            "id": $("#editModalLabel").attr("uid")
        },
        //dataType: 'json',//加上会报错
        success: function (data) {
            $("#resultinfo").text(data);
            if (data == "成功") {
                getCustomers();
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("获取数据出错：状态码" + XMLHttpRequest.status + "," + textStatus);
        }
    });
}

function delCustomer() {
    $.ajax({
        type: 'POST',
        url: '../customer/delCustomerById',//路径
        data: {
            "id": $("#delModalLabel").attr("uid")
        },
        //dataType: 'json',//加上会报错
        success: function (data) {
            $("#delinfo").text(data);
            if (data == "成功") {
                getCustomers();
                $('#delModal').modal('hide');
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("获取数据出错：状态码" + XMLHttpRequest.status + "," + textStatus);
        }
    });
}

function modelCenter(model) {
    // 模态窗口 居中
    model.on('shown.bs.modal', function () {
        var $this = $(this);
        var $modal_dialog = $this.find('.modal-dialog');
        var m_top = ($(window).height() - $modal_dialog.height()) / 2;
        $modal_dialog.css({'margin': m_top + 'px auto'});

        $("#cname").focus();
    });
}

function setValue(obj) {
    var $this = $(obj);
    var td = $this.parents("tr").children().first();
    $("#editModalLabel").attr("uid", td.text()).text("修改客户信息");
    td = td.next("td");
    $("#cname").val(td.text());
    td = td.next("td");
    $("#cboss").val(td.text());
    td = td.next("td");
    $("#clink").val(td.text());
    td = td.next("td");
    $("#ctel").val(td.text());
    td = td.next("td");
    $("#caddress").val(td.text());

    $("#resultinfo").text("");
    return false;
}

function setDelName(obj) {
    var $this = $(obj);
    var td = $this.parents("tr").children().first();
    $("#delModalLabel").attr("uid", td.text());
    td = td.next("td");
    $("#delName").text(td.text());

    $("#delinfo").text("");
    return false;
}

function onRecycleLink() {
    var recycleobj = $("#recyclelink");
    if (recycleobj.text() == "回收站") {
        $("#btnCAdd").hide();
        recycleobj.text("返回");
        getDelCustomers();
    }
    else {
        window.location.href = "../customer";
    }

    return false;
}

function getDelCustomers() {
    $("#datalist").html('<tr><td colspan="7">数据加载中...</td></tr>');
    $.ajax({
        type: 'POST',
        url: '../customer/getCustomersDel',//路径
        data: {//"name": "hi,是我"
        },
        //dataType: 'json',//加上会报错
        success: function (data) {
            if (data) {
                var info = eval(data);
                var htm = '';
                $.each(info, function (index, item) {
                    htm += '<tr>' + '<td>' + item.id + '</td><td>' + item.name + '</td><td>' + item.bossname
                        + '</td><td>' + item.linkman + '</td><td>' + item.linktel + '</td><td>' + item.address + ' </td><td> ' +
                        '<a href="" onclick="reUse(this)" class="reuse" data-toggle="modal" data-target="#reuseModal">恢复可用</a></td></tr>'
                });
                htm += '<tr><td colspan="7">总数: ' + info.length + ' </td></tr>';
                $("#datalist").html(htm);
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("获取数据出错：状态码" + XMLHttpRequest.status + "," + textStatus);
        }
    });
}

function reUse(obj) {
    var $this = $(obj);
    var td = $this.parents("tr").children().first();
    $("#reuseModalLabel").attr("uid", td.text());
    td = td.next("td");
    $("#reuseName").text(td.text());

    $("#reuseinfo").text("");
    return false;
}

function reUseCustomer() {
    $.ajax({
        type: 'POST',
        url: '../customer/reUseCustomer',//路径
        data: {
            "id": $("#reuseModalLabel").attr("uid")
        },
        //dataType: 'json',//加上会报错
        success: function (data) {
            $("#reuseinfo").text(data);
            if (data == "成功") {
                getDelCustomers();
                $('#reuseModal').modal('hide');
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("获取数据出错：状态码" + XMLHttpRequest.status + "," + textStatus);
        }
    });
}