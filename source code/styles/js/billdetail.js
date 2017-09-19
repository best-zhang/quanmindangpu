/**
 * Created by jumee on 2016/10/27.
 */

$(function () {
    var labcus = $("#labCustomer");
    var cid = labcus.attr("cid");
    var cname = labcus.text();
    var dt = $("#labmonth").text();
    var btnExport = $("#btnExport");
    if (cid && cid > 0) {
        getBillDetailByMonth(dt, cid);
    }
    else {
        btnExport.attr({"disabled": "disabled"});
        $("#datalist").html('<tr><td colspan="8">查询无结果</td></tr>');
        alert("请先选择客户");
    }

    btnExport.attr("href", "http://cms.ejoycd.com/billDetail/getTable?cid=" + cid + "&cname=" + cname + "&date=" + dt);
});

function getBillDetailByMonth(dt, cid) {
    $("#datalist").html('<tr><td colspan="8">数据加载中...</td></tr>');
    $.ajax({
        type: 'POST',
        url: '../billDetail/getBillDetailByMonth',//路径
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
                    if (item.name.indexOf("总金额") < 0) {
                        htm += '<tr>' + '<td>' + (item.dttime ? moment(item.dttime).format("YYYY年MM月DD日") : item.name) + '</td><td>'
                            + (item.bedsheet ? item.bedsheet : 0) + '</td><td>'
                            + (item.bedsack ? item.bedsack : 0) + '</td><td>'
                            + (item.pillowcase ? item.pillowcase : 0) + '</td><td>'
                            + (item.towels ? item.towels : 0) + '</td><td>'
                            + (item.bathtowel ? item.bathtowel : 0) + '</td><td>'
                            + (item.floortowel ? item.floortowel : 0) + '</td><td> '
                            + (item.memo ? item.memo : "") + '</td><tr>';
                    }
                    else {
                        htm += '<tr><td colspan="8">' + item.name + ' : ' + (item.memo ? item.memo : 0) + ' </td></tr>';
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