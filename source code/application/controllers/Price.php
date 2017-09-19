<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Price extends CI_Controller
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
        $this->load->view('price');
    }

    public function __construct()
    {
        parent::__construct();

        $this->load->library('MYController');

        $this->load->database();
    }

    /**
     *获取当前有效客户的价格信息列表
     */
    public function getPrices()
    {
        $query = $this->db->query('SELECT a.id, a.name, b.bedsheet, b.bedsack, b.pillowcase, b.towels, b.bathtowel, b.floortowel FROM CustomerInfo a LEFT JOIN CustomerPrice b ON a.id = b.customerid WHERE a.isdelete = 0');

        $this->response_data($query->result());
    }

    /**
     * 更新客户价格信息
     */
    public function editPrice()
    {
        $bedsheet = trim($_POST['bedsheet']);
        $bedsack = trim($_POST['bedsack']);
        $pillowcase = trim($_POST['pillowcase']);
        $towels = trim($_POST['towels']);
        $bathtowel = trim($_POST['bathtowel']);
        $floortowel = trim($_POST['floortowel']);
        $id = trim($_POST['id']);

        $res = "价格输入有误：";
        $isEffec = true;
        if (!is_numeric($bedsheet) && !is_float($bedsheet)) {
            $res .= "床单；";
            $isEffec = false;
        }
        if (!is_numeric($bedsack) && !is_float($bedsack)) {
            $res .= "被套；";
            $isEffec = false;
        }
        if (!is_numeric($pillowcase) && !is_float($pillowcase)) {
            $res .= "枕套；";
            $isEffec = false;
        }
        if (!is_numeric($towels) && !is_float($towels)) {
            $res .= "毛巾；";
            $isEffec = false;
        }
        if (!is_numeric($bathtowel) && !is_float($bathtowel)) {
            $res .= "浴巾；";
            $isEffec = false;
        }
        if (!is_numeric($floortowel) && !is_float($floortowel)) {
            $res .= "地巾；";
            $isEffec = false;
        }

        if ($isEffec) {
            $query = $this->db->query("SELECT * FROM CustomerPrice WHERE customerid = '{$id}' ");

            if ($query->num_rows() > 0) {
                $sqlupdate = "UPDATE CustomerPrice SET bedSheet='{$bedsheet}',bedSack='{$bedsack}',pillowcase='{$pillowcase}',towels='{$towels}',bathtowel='{$bathtowel}',floortowel='{$floortowel}' " .
                    "WHERE customerid='{$id}'";
                $this->db->query($sqlupdate);
                if ($this->db->affected_rows() > 0) {
                    echo "更新成功";
                } else {
                    echo "更新失败";
                }
            } else {
                $sqlinsert = "INSERT INTO CustomerPrice (customerid,bedSheet,bedSack,pillowcase,towels,bathtowel,floortowel,dtinsert,memo) " .
                    "VALUES('{$id}','{$bedsheet}','{$bedsack}','{$pillowcase}','{$towels}','{$bathtowel}','{$floortowel}',NOW(),'') ";
                $this->db->query($sqlinsert);
                if ($this->db->affected_rows() > 0) {
                    echo "添加成功";
                } else {
                    echo "添加失败";
                }
            }
            //释放掉查询结果所占的内存，并删除结果的资源标识
            //$query->free_result();
        } else {
            echo $res;
        }
    }

    /**
     * 根据ID删除指定客户价格信息
     */
    public function delPriceById()
    {
        $id = trim($_POST['id']);
        $query = $this->db->query("DELETE FROM CustomerPrice WHERE CustomerId =  '{$id}' ");

        if ($this->db->affected_rows() > 0) {
            echo "成功";
        } else {
            echo "失败";
        }
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
