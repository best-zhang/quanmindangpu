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

// 格式化金额，调用：fmoney("12345.675910", 3)，返回12,345.676
function fmoney(s, n) {
    s = parseFloat((s + "").replace(/[^\d\.-]/g, "")).toFixed(n) + "";
    if (isNaN(s) || ((s + "").replace(/\s/g, "")) == "") {
        return "";
    }
    n = n > 0 && n <= 20 ? n : 2;
    var l = s.split(".")[0].split("").reverse(), r = s.split(".")[1];
    t = "";
    for (i = 0; i < l.length; i++) {
        t += l[i] + ((i + 1) % 3 == 0 && (i + 1) != l.length ? "," : "");
    }
    return t.split("").reverse().join("") + "." + r;
}

// 金额格式化还原函数
function rmoney(s) {
    var ret = (s + "").replace(/[^\d\.-]/g, "");
    return parseFloat(ret);
}

function toThousands(num) {
    var num = (num || 0).toString(), result = '';
    while (num.length > 3) {
        result = ',' + num.slice(-3) + result;
        num = num.slice(0, num.length - 3);
    }
    if (num) {
        result = num + result;
    }
    return result;
}