/**
 * Created by jumee on 2016/10/9.
 */

$(function () {
    $("#btnSearch").click(function () {
        var dt = $("#datetimepicker").val();
        var btnExport = $("#btnExport");
        if (dt) {
            getFinance(dt);
            btnExport.removeAttr("disabled");
            btnExport.attr("href", "http://cms.ejoycd.com/finance/getTable?date=" + dt);
        }
        else {
            btnExport.attr({"disabled": "disabled"});
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
});

function getFinance(dt) {
    $("#datalist").html('<tr><td colspan="9">数据加载中...</td></tr>');
    $.ajax({
        type: 'POST',
        url: '../finance/getFinance',//路径
        data: {
            "date": dt
        },
        //dataType: 'json',//加上会报错
        success: function (data) {
            if (data) {
                var info = eval(data);
                var htm = '';
                $.each(info, function (index, item) {
                    if (index < info.length - 1) {
                        htm += '<tr cid="' + item.id + '">' + '<td>' + item.name + '</td><td>'
                            + (item.bedsheet ? item.bedsheet : 0) + '</td><td>'
                            + (item.bedsack ? item.bedsack : 0) + '</td><td>'
                            + (item.pillowcase ? item.pillowcase : 0) + '</td><td>'
                            + (item.towels ? item.towels : 0) + '</td><td>'
                            + (item.bathtowel ? item.bathtowel : 0) + '</td><td>'
                            + (item.floortowel ? item.floortowel : 0) + '</td><td> '
                            + (item.cmoney ? item.cmoney : 0) + '</td><td> '
                            + '<a href="../billDetail/showView?cid=' + item.id + '&cname=' + item.name + '&date=' + dt + '">查看详情</a></td></tr>';
                    }
                    else {
                        htm += '<tr><td colspan="9">总计 :  ' + (item.cmoney ? item.cmoney : 0) + ' </td></tr>';
                    }
                });
                $("#datalist").html(htm);
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("获取数据出错：状态码" + XMLHttpRequest.status + "," + textStatus);
        }
    });
}