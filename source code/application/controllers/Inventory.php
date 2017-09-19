<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller
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
        $this->load->view('inventory');
    }

    public function __construct()
    {
        parent::__construct();

        $this->load->library('MYController');

        $this->load->database();
    }

    /**
     *根据客户和月份获取当月数据列表
     */
    public function getInventories()
    {
        $cid = trim($_POST['cid']);
        $date = trim($_POST['date']) . "-01";

        $sqlselect = "SELECT * FROM CustomerInventory WHERE date_format(dttime,'%Y-%m')=date_format('{$date}','%Y-%m') AND customerid = '{$cid}' ORDER BY dttime ASC ";
        $query = $this->db->query($sqlselect);

        $this->response_data($query->result());
    }

    /**
     * 新增客户数据信息
     */
    public function addInventory()
    {
        $bedsheet = trim($_POST['bedsheet']);
        $bedsack = trim($_POST['bedsack']);
        $pillowcase = trim($_POST['pillowcase']);
        $towels = trim($_POST['towels']);
        $bathtowel = trim($_POST['bathtowel']);
        $floortowel = trim($_POST['floortowel']);
        $cid = trim($_POST['cid']);
        $date = trim($_POST['date']);

        $res = "数据输入有误：";
        $isEffec = true;
        if (!$date) {
            $res .= "日期未选择；";
            $isEffec = false;
        }
        if (!$cid) {
            $res .= "客户未选择；";
            $isEffec = false;
        }
        if (!is_numeric($bedsheet)) {
            $res .= "床单；";
            $isEffec = false;
        }
        if (!is_numeric($bedsack)) {
            $res .= "被套；";
            $isEffec = false;
        }
        if (!is_numeric($pillowcase)) {
            $res .= "枕套；";
            $isEffec = false;
        }
        if (!is_numeric($towels)) {
            $res .= "毛巾；";
            $isEffec = false;
        }
        if (!is_numeric($bathtowel)) {
            $res .= "浴巾；";
            $isEffec = false;
        }
        if (!is_numeric($floortowel)) {
            $res .= "地巾；";
            $isEffec = false;
        }

        if ($isEffec) {
            $sqlselect = "SELECT * FROM CustomerInventory WHERE customerid = '{$cid}' AND dttime = '{$date}' ";
            $query = $this->db->query($sqlselect);

            if ($query->num_rows() > 0) {
                echo "该客户已存在日期为'{$date}'的数据";
            } else {
                $sqlinsert = "INSERT INTO CustomerInventory (customerid,dttime,bedSheet,bedSack,pillowcase,towels,bathtowel,floortowel) " .
                    "VALUES('{$cid}','{$date}','{$bedsheet}','{$bedsack}','{$pillowcase}','{$towels}','{$bathtowel}','{$floortowel}') ";
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
     * 更新客户价格信息
     */
    public function editInventory()
    {
        $bedsheet = trim($_POST['bedsheet']);
        $bedsack = trim($_POST['bedsack']);
        $pillowcase = trim($_POST['pillowcase']);
        $towels = trim($_POST['towels']);
        $bathtowel = trim($_POST['bathtowel']);
        $floortowel = trim($_POST['floortowel']);
        $id = trim($_POST['id']);

        $res = "数据输入有误：";
        $isEffec = true;
        if (!is_numeric($bedsheet)) {
            $res .= "床单；";
            $isEffec = false;
        }
        if (!is_numeric($bedsack)) {
            $res .= "被套；";
            $isEffec = false;
        }
        if (!is_numeric($pillowcase)) {
            $res .= "枕套；";
            $isEffec = false;
        }
        if (!is_numeric($towels)) {
            $res .= "毛巾；";
            $isEffec = false;
        }
        if (!is_numeric($bathtowel)) {
            $res .= "浴巾；";
            $isEffec = false;
        }
        if (!is_numeric($floortowel)) {
            $res .= "地巾；";
            $isEffec = false;
        }

        if ($isEffec) {
            $sqlselect = "SELECT * FROM CustomerInventory WHERE id = '{$id}' ";
            $query = $this->db->query($sqlselect);

            if ($query->num_rows() > 0) {
                $sqlupdate = "UPDATE CustomerInventory SET bedsheet='{$bedsheet}',bedsack='{$bedsack}',pillowcase='{$pillowcase}',towels='{$towels}',bathtowel='{$bathtowel}',floortowel='{$floortowel}' " .
                    "WHERE id='{$id}'";
                $this->db->query($sqlupdate);
                if ($this->db->affected_rows() > 0) {
                    echo "更新成功";
                } else {
                    echo "更新失败";
                }
            } else {
                    echo "添加失败,没有查找到相关数据";
            }
            //释放掉查询结果所占的内存，并删除结果的资源标识
            //$query->free_result();
        } else {
            echo $res;
        }
    }

    /**
     * 按ID删除指定客户数据信息
     */
    public function delInventoryById()
    {
        $id = trim($_POST['id']);
        $this->db->query('DELETE FROM CustomerInventory WHERE id = ' . $id);

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
