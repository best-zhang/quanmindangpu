<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finance extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('finance');
    }

    public function __construct()
    {
        parent::__construct();

        $this->load->library('MYController');

        $this->load->database();
    }

    /**
     *根据月份获取当月数据列表
     */
    public function getFinance()
    {
        $date = trim($_POST['date']) . "-01";

        $this->setMonthTotal($date);
        $query = $this->getData($date);
        $this->response_data($query->result());
    }

    /**
     * 导出数据
     */
    public function getTable()
    {
        $this->load->library('wordhelper');
        $date = trim($_GET['date']) . "-01";
        if (!$date) {
            echo "月份未选择";
            return;
        }

        $query = $this->getData($date);
        $arr = array();
        foreach ($query->result() as $row) {
            array_push($arr, array(
                "customerid" => $row->id,
                "name" => $row->name,
                "dttime" => '',
                "bedsheet" => $row->bedsheet,
                "bedsack" => $row->bedsack,
                "pillowcase" => $row->pillowcase,
                "towels" => $row->towels,
                "bathtowel" => $row->bathtowel,
                "floortowel" => $row->floortowel,
                "memo" => $row->cmoney));
        }

        $dt = date('Y-n-j', strtotime("$date"));
        $arrd = explode('-', $dt);
        echo $this->wordhelper->getWord("逸洁{$arrd[1]}月总账", $arr, "逸洁洗涤{$arrd[0]}年{$arrd[1]}月总账单", '', 'finance');
    }

    function getData($date)
    {
        $sqlselect = "SELECT t1.id, t1. NAME name, IFNULL(t2.bedsheet, 0) bedsheet, IFNULL(t2.bedsack, 0) bedsack, IFNULL(t2.pillowcase, 0) pillowcase, IFNULL(t2.towels, 0) towels, IFNULL(t2.bathtowel, 0) bathtowel, IFNULL(t2.floortowel, 0) floortowel, ( t1.bedsheet * IFNULL(t2.bedsheet, 0) + t1.bedsack * IFNULL(t2.bedsack, 0) + t1.pillowcase * IFNULL(t2.pillowcase, 0) + t1.towels * IFNULL(t2.towels, 0) + t1.bathtowel * IFNULL(t2.bathtowel, 0) + t1.floortowel * IFNULL(t2.floortowel, 0)) AS cmoney FROM ( SELECT a.id, a. NAME, IFNULL(b.bedsheet, 0) bedsheet, IFNULL(b.bedsack, 0) bedsack, IFNULL(b.pillowcase, 0) pillowcase, IFNULL(b.towels, 0) towels, IFNULL(b.bathtowel, 0) bathtowel, IFNULL(b.floortowel, 0) floortowel FROM CustomerInfo a LEFT OUTER JOIN CustomerPrice b ON a.id = b.customerid WHERE a.isdelete = 0 ) t1 LEFT OUTER JOIN ( SELECT customerid, SUM(bedsheet) bedsheet, SUM(bedsack) bedsack, SUM(pillowcase) pillowcase, SUM(towels) towels, SUM(bathtowel) bathtowel, SUM(floortowel) floortowel FROM CustomerInventory WHERE date_format(dttime, '%Y-%m') = date_format('{$date}', '%Y-%m') GROUP BY customerid ) t2 ON t1.id = t2.customerid "
            . "UNION SELECT '0' id, '总金额' name, 0 bedsheet, 0 bedsack, 0 pillowcase, 0 towels, 0 bathtowel, 0 floortowel, SUM(IFNULL(cmoney, 0)) cmoney FROM ( SELECT t1.bedsheet * IFNULL(t2.bedsheet, 0) + t1.bedsack * IFNULL(t2.bedsack, 0) + t1.pillowcase * IFNULL(t2.pillowcase, 0) + t1.towels * IFNULL(t2.towels, 0) + t1.bathtowel * IFNULL(t2.bathtowel, 0) + t1.floortowel * IFNULL(t2.floortowel, 0) AS cmoney FROM ( SELECT a.id, a. NAME, IFNULL(b.bedsheet, 0) bedsheet, IFNULL(b.bedsack, 0) bedsack, IFNULL(b.pillowcase, 0) pillowcase, IFNULL(b.towels, 0) towels, IFNULL(b.bathtowel, 0) bathtowel, IFNULL(b.floortowel, 0) floortowel FROM CustomerInfo a LEFT OUTER JOIN CustomerPrice b ON a.id = b.customerid WHERE a.isdelete = 0 ) t1 LEFT OUTER JOIN ( SELECT customerid, SUM(bedsheet) bedsheet, SUM(bedsack) bedsack, SUM(pillowcase) pillowcase, SUM(towels) towels, SUM(bathtowel) bathtowel, SUM(floortowel) floortowel FROM CustomerInventory WHERE date_format(dttime, '%Y-%m') = date_format('{$date}', '%Y-%m') GROUP BY customerid ) t2 ON t1.id = t2.customerid ) m";

        $query = $this->db->query($sqlselect);

        return $query;
    }

    function setMonthTotal($date)
    {
        $arr = array();
        $query = $this->getData($date);
        foreach ($query->result() as $row) {
            if ($row->id != '0') {
                array_push($arr, array(
                    "customerid" => $row->id,
                    "dttime" => $date,
                    "monthmoney" => $row->cmoney));
            }
        }

        $this->db->query("DELETE FROM CustomerMonth  WHERE date_format(dttime, '%Y-%m') = date_format('{$date}', '%Y-%m')");
        $this->db->insert_batch('CustomerMonth', $arr);
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
