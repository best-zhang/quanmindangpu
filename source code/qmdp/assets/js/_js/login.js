/**
 * Created by jumee on 2016/10/9.
 */

$(function () {
    $("#btnLogin").click(function () {
        var username = $("#username").val();
        var password = $("#password").val();

        if (username && password) {
            login(username, password);
        } else {
            alert("请输入用户名和密码");
        }
    });

});

function login(name, pwd) {
    $.ajax({
        type: 'POST',
        url: '../login/userLogin',//路径
        data: {
            "username": name,
            "password": pwd
        },
        //dataType: 'json',//加上会报错
        success: function (data) {
            if (data && data.indexOf('成功') < 0) {
                alert(data);
            } else {
                window.location.href = '../main';
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("获取数据出错：状态码" + XMLHttpRequest.status + "," + textStatus);
        }
    });
}