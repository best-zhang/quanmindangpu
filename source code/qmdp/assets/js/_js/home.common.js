$(function () {

});

function logout() {
    $.ajax({
        type: 'POST',
        url: '../userlogin/userLogout',//路径
        data: {},
        //dataType: 'json',//加上会报错
        success: function (data) {
            if (data && data.indexOf('成功') < 0) {
                alert(data);
            } else {
                window.location.reload();
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("退出登录出错：状态码" + XMLHttpRequest.status + "," + textStatus);
        }
    });
}

