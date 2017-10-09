/**
 * Created by jumee on 2016/11/2.
 */
$(function () {
    getFinance();
});

function getFinance() {
    $.ajax({
        type: 'POST',
        url: '../main/getFinanceByMonth',//路径
        data: {
            // "date": dt
        },
        //dataType: 'json',//加上会报错
        success: function (data) {
            if (data) {
                var info = eval(data);
                var months = [];
                var values = [];
                $.each(info, function (index, item) {
                    months.push(item.dttime);
                    values.push(parseFloat(item.cmoney));
                });
                financeline(months, values);
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("获取数据出错：状态码" + XMLHttpRequest.status + "," + textStatus);
        }
    });
}

function financeline(months, values) {
    $('#container').highcharts({
        title: {
            text: '逸洁每月账目走势图',
            x: -20 //center
        },
        subtitle: {
            text: '最近一年',
            x: -20
        },
        credits: {
            text: '',
            href: '#'
        },
        xAxis: {
            categories: months,
            plotLines: [{
                color: '#ccd6eb',            //线的颜色，定义为红色
                value: -0.5,                //定义在哪个值上显示标示线，这里是在x轴上刻度为3的值处垂直化一条线
                width: 1                 //标示线的宽度，2px
            }],
            labels: {
                formatter: function () {
                    return formatMonth(this.value);
                }
            }
        },
        yAxis: {
            title: {
                text: '金 额'
            },
            labels: {
                align: 'right',
                x: 3,
                y: 16,
                format: '{value:.,0f}'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }],
            showFirstLabel: false
        },
        tooltip: {
            // valueSuffix: '月 份',
            formatter: function () {
                return '日期:' + formatMonth(this.x) + '<br/>' + '金额:' + this.y;
            }
        },
        legend: {
            enabled: false
            // layout: 'vertical',
            // align: 'right',
            // verticalAlign: 'middle',
            // borderWidth: 0
        },
        series: [{
            name: '',
            data: values
        }]
    });
}

function formatMonth(month) {
    var res = month;
    if (month.length > 5) {
        switch (month.substring(5)) {
            case '01':
                res = '一月';
                break;
            case '02':
                res = '二月';
                break;
            case '03':
                res = '三月';
                break;
            case '04':
                res = '四月';
                break;
            case '05':
                res = '五月';
                break;
            case '06':
                res = '六月';
                break;
            case '07':
                res = '七月';
                break;
            case '08':
                res = '八月';
                break;
            case '09':
                res = '九月';
                break;
            case '10':
                res = '十月';
                break;
            case '11':
                res = '十一月';
                break;
            case '12':
                res = '十二月';
                break;
        }
    }
    return res;
}