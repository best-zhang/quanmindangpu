<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BillDetail extends CI_Controller
{
    public function index()
    {
        $data = array(
            'customerid' => '',
            'customer' => '无',
            'month' => '无'
        );
        $this->load->view('billdetail', $data);
    }

    public function __construct()
    {
        parent::__construct();

        $this->load->library('MYController');

        $this->load->database();
    }

    public function showView()
    {
        $data = array(
            'customerid' => trim($_GET['cid']),
            'customer' => trim($_GET['cname']),
            'month' => trim($_GET['date'])
        );

        $this->load->view('billdetail', $data);
    }

    /**
     *根据月份获取当月数据列表
     */
    public function getBillDetailByMonth()
    {
        $cid = trim($_POST['cid']);
        $date = trim($_POST['date']) . "-01";

        $arr = $this->getData($cid, $date);

        $this->response_data($arr);
    }

    /**
     * 导出数据
     */
    public function getTable()
    {
        $this->load->library('wordhelper');
        $cid = trim($_GET['cid']);
        $date = trim($_GET['date']) . "-01";
        $cname = trim($_GET['cname']);
        if (!$cid) {
            echo "客户未选择";
            return;
        } else if (!$date) {
            echo "月份未选择";
            return;
        }

        $arr = $this->getData($cid, $date);

        $endOfMonth = date('Y-n-j', strtotime("$date +1 month -1 day"));
        $arrd = explode('-', $endOfMonth);
        $title = $cname . "{$arrd[1]}月结算清单";
        echo $this->wordhelper->getWord($cname, $arr, $title, $endOfMonth, 'bill');
    }

    function getData($cid, $date)
    {
        $arr = array();
        $allbedsheet = 0;
        $allbedsack = 0;
        $allpillowcase = 0;
        $alltowels = 0;
        $allbathtowel = 0;
        $allfloortowel = 0;

        $bedsheetprice = 0;
        $bedsackprice = 0;
        $pillowcaseprice = 0;
        $towelsprice = 0;
        $bathtowelprice = 0;
        $floortowelprice = 0;

        $sqlselect = "SELECT t1.customerid, t2.name, t1.dttime, t1.bedsheet, t1.bedsack, t1.pillowcase, t1.towels, t1.bathtowel, t1.floortowel, t1.memo FROM CustomerInventory t1 LEFT JOIN CustomerInfo t2 ON t1.customerid = t2.id WHERE date_format(t1.dttime, '%Y-%m') = date_format('{$date}', '%Y-%m') AND t1.customerid = '{$cid}' ORDER BY t1.dttime ASC ";
        $query1 = $this->db->query($sqlselect);

        foreach ($query1->result() as $row) {
            array_push($arr, array("customerid" => $row->customerid, "name" => $row->name, "dttime" => $row->dttime,
                "bedsheet" => $row->bedsheet, "bedsack" => $row->bedsack, "pillowcase" => $row->pillowcase,
                "towels" => $row->towels, "bathtowel" => $row->bathtowel, "floortowel" => $row->floortowel,
                "memo" => $row->memo));

            $allbedsheet += $row->bedsheet;
            $allbedsack += $row->bedsack;
            $allpillowcase += $row->pillowcase;
            $alltowels += $row->towels;
            $allbathtowel += $row->bathtowel;
            $allfloortowel += $row->floortowel;
        }

        array_push($arr, array("customerid" => "", "name" => "合计", "dttime" => "",
            "bedsheet" => $allbedsheet, "bedsack" => $allbedsack, "pillowcase" => $allpillowcase,
            "towels" => $alltowels, "bathtowel" => $allbathtowel, "floortowel" => $allfloortowel,
            "memo" => ""));

        $sqlselect = " SELECT bedsheet, bedsack, pillowcase, towels, bathtowel, floortowel, memo FROM CustomerPrice WHERE customerid = '{$cid}' LIMIT 1 ";
        $query2 = $this->db->query($sqlselect);

        foreach ($query2->result() as $row) {
            array_push($arr, array("customerid" => "", "name" => "单价", "dttime" => "",
                "bedsheet" => $row->bedsheet, "bedsack" => $row->bedsack, "pillowcase" => $row->pillowcase,
                "towels" => $row->towels, "bathtowel" => $row->bathtowel, "floortowel" => $row->floortowel,
                "memo" => $row->memo));

            $bedsheetprice = $row->bedsheet;
            $bedsackprice = $row->bedsack;
            $pillowcaseprice = $row->pillowcase;
            $towelsprice = $row->towels;
            $bathtowelprice = $row->bathtowel;
            $floortowelprice = $row->floortowel;
        }

        array_push($arr, array("customerid" => "", "name" => "金额", "dttime" => "",
            "bedsheet" => $allbedsheet * $bedsheetprice,
            "bedsack" => $allbedsack * $bedsackprice,
            "pillowcase" => $allpillowcase * $pillowcaseprice,
            "towels" => $alltowels * $towelsprice,
            "bathtowel" => $allbathtowel * $bathtowelprice,
            "floortowel" => $allfloortowel * $floortowelprice,
            "memo" => ""));

        array_push($arr, array("customerid" => "", "name" => "总金额", "dttime" => "",
            "bedsheet" => 0,
            "bedsack" => 0,
            "pillowcase" => 0,
            "towels" => 0,
            "bathtowel" => 0,
            "floortowel" => 0,
            "memo" => $allbedsheet * $bedsheetprice + $allbedsack * $bedsackprice
                + $allpillowcase * $pillowcaseprice + $alltowels * $towelsprice
                + $allbathtowel * $bathtowelprice + $allfloortowel * $floortowelprice));

        return $arr;
    }

    /**
     * @param $data 数组
     * 构造json字符串并返回
     */
    function response_data($data)
    {
        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data, JSON_UNESCAPED_UNICODE);//该方法中第二个参数，必须php5.4版本以上才支持
    }
}
