/**
 * Created by jumee on 2016/10/9.
 */

$(function () {
    $("#btnsubmit").click(function () {
        editPrice();
    });

    $("#btndel").click(function () {
        delPrice();
    });

    modelCenter($('#editModal'));
    modelCenter($('#delModal'));
    getPrices();
});

function getPrices() {
    $("#datalist").html('<tr><td colspan="8">数据加载中...</td></tr>');
    $.ajax({
        type: 'POST',
        url: '../price/getPrices',//路径
        data: {//"name": "hi,是我"
        },
        //dataType: 'json',//加上会报错
        success: function (data) {
            if (data) {
                var info = eval(data);
                var htm = '';
                $.each(info, function (index, item) {
                    htm += '<tr cid="' + item.id + '">' + '<td>' + item.name + '</td><td>'
                        + (item.bedsheet ? item.bedsheet : 0) + '</td><td>'
                        + (item.bedsack ? item.bedsack : 0) + '</td><td>'
                        + (item.pillowcase ? item.pillowcase : 0) + '</td><td>'
                        + (item.towels ? item.towels : 0) + '</td><td>'
                        + (item.bathtowel ? item.bathtowel : 0) + '</td><td>'
                        + (item.floortowel ? item.floortowel : 0) + '</td><td> ' +
                        '<a href="" onclick="setValue(this)" class="editinfo" data-toggle="modal" data-target="#editModal">修改</a>/' +
                        '<a href="" onclick="setDelName(this)" class="delinfo" data-toggle="modal" data-target="#delModal">删除</a></td></tr>'
                });
                htm += '<tr><td colspan="8">总数: ' + info.length + ' </td></tr>';
                $("#datalist").html(htm);
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("获取数据出错：状态码" + XMLHttpRequest.status + "," + textStatus);
        }
    });
}

function editPrice() {
    $.ajax({
        type: 'POST',
        url: '../price/editPrice',//路径
        data: {
            "bedsheet": $("#bedsheet").val(),
            "bedsack": $("#bedsack").val(),
            "pillowcase": $("#pillowcase").val(),
            "towels": $("#towels").val(),
            "bathtowel": $("#bathtowel").val(),
            "floortowel": $("#floortowel").val(),
            "id": $("#editModalLabel").attr("cid")
        },
        //dataType: 'json',//加上会报错
        success: function (data) {
            $("#resultinfo").text(data);
            if (data.indexOf("成功") >= 0) {
                $('#editModal').modal('hide');
                getPrices();
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("获取数据出错：状态码" + XMLHttpRequest.status + "," + textStatus);
        }
    });
}

function delPrice() {
    $.ajax({
        type: 'POST',
        url: '../price/delPriceById',//路径
        data: {
            "id": $("#delModalLabel").attr("cid")
        },
        //dataType: 'json',//加上会报错
        success: function (data) {
            $("#delinfo").text(data);
            if (data == "成功") {
                $('#delModal').modal('hide');
                getPrices();
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

        $("#bedsheet").focus();
    });
}

function setValue(obj) {
    var $this = $(obj);
    var tr = $this.parents("tr");
    $("#editModalLabel").attr("cid", tr.attr("cid")).text("修改客户价格信息");
    var td = tr.children().first();
    $("#cname").val(td.text());
    td = td.next("td");
    $("#bedsheet").val(td.text());
    td = td.next("td");
    $("#bedsack").val(td.text());
    td = td.next("td");
    $("#pillowcase").val(td.text());
    td = td.next("td");
    $("#towels").val(td.text());
    td = td.next("td");
    $("#bathtowel").val(td.text());
    td = td.next("td");
    $("#floortowel").val(td.text());

    $("#resultinfo").text("");
    return false;
}

function setDelName(obj) {
    var $this = $(obj);
    var tr = $this.parents("tr");
    $("#delModalLabel").attr("cid", tr.attr("cid"));
    var td = tr.children().first();
    $("#delName").text(td.text());

    $("#delinfo").text("");
    return false;
}

function checkDecimal(obj) {
    obj.value = obj.value.replace(/[^\d.]/g, ""); //清除"数字"和"."以外的字符
    obj.value = obj.value.replace(/^\./g, ""); //验证第一个字符是数字
    obj.value = obj.value.replace(/\.{2,}/g, "."); //只保留第一个, 清除多余的
    obj.value = obj.value.replace(".", "$#$").replace(/\./g, "").replace("$#$", ".");
    obj.value = obj.value.replace(/^(\-)*(\d+)\.(\d\d).*$/, '$1$2.$3'); //只能输入两个小数
}