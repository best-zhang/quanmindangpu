/**
 * Created by jumee on 2016/11/2.
 */
$(function () {
    getUsername();

    $("#btnlogout").click(function () {
        if (confirm("你确定要退出系统吗?")) {
            logout();
        } else {
            return false;
        }
    });
});

function getUsername() {
    $.ajax({
        type: 'POST',
        url: '../login/getUser',//路径
        data: {
            // "date": dt
        },
        //dataType: 'json',//加上会报错
        success: function (data) {
            $("#userhello").text(data);
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("获取数据出错：状态码" + XMLHttpRequest.status + "," + textStatus);
        }
    });
}

function logout() {
    $.ajax({
        type: 'POST',
        url: '../login/userLogout',//路径
        data: {
            // "date": dt
        },
        //dataType: 'json',//加上会报错
        success: function (data) {
            if (data && data.indexOf('成功') > 0) {
                window.location.href = '../login';
            } else {
                alert(data);
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("获取数据出错：状态码" + XMLHttpRequest.status + "," + textStatus);
        }
    });
}