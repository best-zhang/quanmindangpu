<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller
{
    /**
     * Home Page for this controller.
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
        $this->load->view('customer');
    }

    public function __construct()
    {
        parent::__construct();

        $this->load->library('MYController');

        $this->load->database();
    }

    /**
     * 获取全部客户列表(含不可用客户)
     */
    public function getAllCustomers()
    {
        $query = $this->db->query('SELECT id,name,bossname,address,linkman,linktel FROM CustomerInfo ORDER BY id ASC');

        $this->response_data($query->result());
    }

    /**
     *获取当前有效客户列表
     */
    public function getCustomersNoDel()
    {
        $query = $this->db->query('SELECT id,name,bossname,address,linkman,linktel FROM CustomerInfo WHERE isdelete = 0 ORDER BY id ASC');

        $this->response_data($query->result());
    }

    /**
     * 获取当前无效客户列表
     */
    public function getCustomersDel()
    {
        $query = $this->db->query('SELECT id,name,bossname,address,linkman,linktel FROM CustomerInfo WHERE isdelete = 1 ORDER BY id ASC');

        $this->response_data($query->result());
    }

    /**
     * 获取全部客户ID和名称(包含无效客户)
     */
    public function getAllCustomersIdAndName()
    {
        $query = $this->db->query('SELECT id,name FROM CustomerInfo ORDER BY id ASC');

        $this->response_data($query->result());
    }

    /**
     * 获取有效客户ID和名称
     */
    public function getCustomersIdAndNameNoDel()
    {
        $query = $this->db->query('SELECT id,name FROM CustomerInfo WHERE isdelete = 0 ORDER BY id ASC');

        $this->response_data($query->result());
    }

    /**
     * 获取无效客户ID和名称
     */
    public function getCustomersIdAndNameDel()
    {
        $query = $this->db->query('SELECT id,name FROM CustomerInfo WHERE isdelete = 1 ORDER BY id ASC');

        $this->response_data($query->result());
    }

    /**
     * 根据客户ID获取客户信息
     */
    public function getCustomerByID($id)
    {
        $query = $this->db->query('SELECT id,name,bossname,address,linkman,linktel FROM CustomerInfo WHERE id = ' . $id . ' ORDER BY id ASC');

        $this->response_data($query->result());
    }

    /**
     * 新增客户信息
     */
    public function addCustomer()
    {
        $name = trim($_POST['name']);
        $boss = trim($_POST['boss']);
        $link = trim($_POST['link']);
        $linktel = trim($_POST['linktel']);
        $address = trim($_POST['address']);

        $query = $this->db->query("SELECT id FROM CustomerInfo WHERE isdelete = 0 AND NAME='{$name}' ");
        if ($query->num_rows() > 0) {
            echo "客户已经存在";
        } else {
            $sqlinsert = "INSERT INTO CustomerInfo (NAME,bossname,address,linkman,linktel,dtinsert,memo) " .
                "VALUES('{$name}','{$boss}','{$address}','{$link}','{$linktel}',NOW(),'') ";
            $this->db->query($sqlinsert);
            if ($this->db->affected_rows() > 0) {
                echo "成功";
            } else {
                echo "失败";
            }
        }
    }

    /**
     * 更新客户信息
     */
    public function editCustomer()
    {
        $name = trim($_POST['name']);
        $boss = trim($_POST['boss']);
        $link = trim($_POST['link']);
        $linktel = trim($_POST['linktel']);
        $address = trim($_POST['address']);
        $id = trim($_POST['id']);

        $sqlupdate = "UPDATE CustomerInfo SET NAME='{$name}',bossname='{$boss}',address='{$address}',linkman='{$link}',linktel='{$linktel}' " .
            "WHERE id='{$id}'";
        $this->db->query($sqlupdate);
        if ($this->db->affected_rows() > 0) {
            echo "成功";
        } else {
            echo "失败";
        }
    }

    /**
     * 重新激活客户信息
     */
    public function reUseCustomer()
    {
        $id = trim($_POST['id']);

        $sqlupdate = "UPDATE CustomerInfo SET isdelete = 0 WHERE id = '{$id}'";
        $this->db->query($sqlupdate);
        if ($this->db->affected_rows() > 0) {
            echo "成功";
        } else {
            echo "失败";
        }
    }

    /**
     * 根据ID删除指定客户
     */
    public function delCustomerById()
    {
        $id = trim($_POST['id']);
        $query = $this->db->query('UPDATE CustomerInfo SET isdelete = 1 WHERE id = ' . $id);

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
