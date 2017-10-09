/**
 * Created by jumee on 2016/10/9.
 */

$(function () {
    $("#btnInputData").click(function () {
        clearAddModelInfo();

        $("#addresultinfo").text("");
    });

    $("#btnaddsubmit").click(function () {
        addInventory();
    });

    $("#btnsubmit").click(function () {
        editInventory();
    });

    $("#btndel").click(function () {
        delInventory();
    });

    $("#btnSearch").click(function () {
        var cid = $("#selCustomer").val();
        var dt = $("#datetimepicker").val();
        if (cid && cid > 0) {
            getInventories(dt, cid);
        }
        else {
            alert("请先选择客户");
        }
    });

    var datetimepicker = $('#datetimepicker');
    datetimepicker.datetimepicker({
        startView: "year",
        minView: "year", //选择日期后，不会再跳转去选择时分秒
        language: 'zh-CN',
        format: 'yyyy-mm',
        todayBtn: 1,
        autoclose: 1,
        pickerPosition: "bottom-left"
    });
    datetimepicker.val(moment().format("YYYY-MM"));

    var addtimepicker = $("#addtimepicker");
    addtimepicker.datetimepicker({
        minView: "month", //选择日期后，不会再跳转去选择时分秒
        language: 'zh-CN',
        format: 'yyyy-mm-dd',
        todayBtn: 1,
        autoclose: 1,
        pickerPosition: "bottom-left"
    });
    addtimepicker.val(moment().startOf('month').format("YYYY-MM-DD"));

    $('#selCustomer').selectpicker({
        maxOptions: 1,
        width: 200
    });

    $('#seladdCustomer').selectpicker({
        maxOptions: 1,
        width: 170
    });

    modelCenter($('#addModal'));
    modelCenter($('#editModal'));
    modelCenter($('#delModal'));

    getCustomersNameAndId();
});

function getCustomersNameAndId() {
    $.ajax({
        type: 'POST',
        url: '../customer/getCustomersIdAndNameNoDel',//路径
        data: {//"name": "hi,是我"
        },
        //dataType: 'json',//加上会报错
        success: function (data) {
            if (data) {
                var info = eval(data);
                var sel = $("#selCustomer");
                var addsel = $("#seladdCustomer");
                sel.empty();
                addsel.empty();
                $.each(info, function (index, item) {
                    sel.append("<option value='" + item.id + "'>" + item.name + "</option>");
                    addsel.append("<option value='" + item.id + "'>" + item.name + "</option>");
                });
                sel.selectpicker('render');
                sel.selectpicker('refresh');
                addsel.selectpicker('render');
                addsel.selectpicker('refresh');
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("获取数据出错：状态码" + XMLHttpRequest.status + "," + textStatus);
        }
    });
}

function getInventories(dt, cid) {
    $("#datalist").html('<tr><td colspan="8">数据加载中...</td></tr>');
    $.ajax({
        type: 'POST',
        url: '../inventory/getInventories',//路径
        data: {
            "date": dt,
            "cid": cid
        },
        //dataType: 'json',//加上会报错
        success: function (data) {
            if (data) {
                var info = eval(data);
                var htm = '';
                $.each(info, function (index, item) {
                    htm += '<tr cid="' + item.id + '">' + '<td>' + moment(item.dttime).format("YYYY年MM月DD日") + '</td><td>'
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

function addInventory() {
    $("#addresultinfo").text("");
    var cid = $("#seladdCustomer").val();
    var date = $("#addtimepicker").val();
    if (cid && date) {
        $.ajax({
            type: 'POST',
            url: '../inventory/addInventory',//路径
            data: {
                "bedsheet": $("#abedsheet").val(),
                "bedsack": $("#abedsack").val(),
                "pillowcase": $("#apillowcase").val(),
                "towels": $("#atowels").val(),
                "bathtowel": $("#abathtowel").val(),
                "floortowel": $("#afloortowel").val(),
                "cid": cid,
                "date": date
            },
            //dataType: 'json',//加上会报错
            success: function (data) {
                $("#addresultinfo").text(data);
                if (data.indexOf("成功") >= 0) {
                    //在之前的时间上加一天
                    var dateInput = $("#addtimepicker");
                    dateInput.val(moment(dateInput.val(), "YYYY-MM-DD").add(1, 'd').format("YYYY-MM-DD"));
                    clearAddModelInfo();
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("获取数据出错：状态码" + XMLHttpRequest.status + "," + textStatus);
            }
        });
    } else {
        alert("日期和客户都必须选择!");
    }
}

function editInventory() {
    $.ajax({
        type: 'POST',
        url: '../inventory/editInventory',//路径
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
                $("#btnSearch").click();
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("获取数据出错：状态码" + XMLHttpRequest.status + "," + textStatus);
        }
    });
}

function delInventory() {
    $.ajax({
        type: 'POST',
        url: '../inventory/delInventoryById',//路径
        data: {
            "id": $("#delModalLabel").attr("cid")
        },
        //dataType: 'json',//加上会报错
        success: function (data) {
            $("#delinfo").text(data);
            if (data == "成功") {
                $('#delModal').modal('hide');
                $("#btnSearch").click();
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

function clearAddModelInfo() {
    $("#abedsheet").val("0");
    $("#abedsack").val("0");
    $("#apillowcase").val("0");
    $("#atowels").val("0");
    $("#abathtowel").val("0");
    $("#afloortowel").val("0");
}

function setValue(obj) {
    var $this = $(obj);
    var tr = $this.parents("tr");
    $("#editModalLabel").attr("cid", tr.attr("cid")).text("修改客户数据信息");
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

function checkNumber(obj) {
    obj.value = obj.value.replace(/[^\d]/g, ""); //清除"数字"以外的字符
}