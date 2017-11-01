<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Goodstrade extends CI_Controller
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
     * map to /home.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('goodstrade');
    }

    public function __construct()
    {
        parent::__construct();

        $this->load->library('MYController');

        $this->load->database();
    }

    function getUsers()
    {
        $query = $this->db->query('SELECT id,name FROM user ORDER BY id ASC;');

        $this->response_data($query->result());
    }

    function getGoods()
    {
        $query = $this->db->query('SELECT id,name FROM goods ORDER BY id ASC;');

        $this->response_data($query->result());
    }

    function getProjects()
    {
        $query = $this->db->query('SELECT id,name FROM raise ORDER BY id ASC;');

        $this->response_data($query->result());
    }

    function save()
    {
        $uid = trim($_POST['uid']);
        $goods = trim($_POST['goods']);
        $project = trim($_POST['project']);
        $money = trim($_POST['money']);
        $jifen = trim($_POST['jifen']);
        $tradetime = trim($_POST['tradetime']);
        $jingban = trim($_POST['jingban']);

        $user = $this->session->userdata('user_info');

        $sqladd = "INSERT INTO goodsdeal(userid,goodsid,proid,money,integral,tradetime,jingban,createby,dtinsert)" .
            "VALUES('{$uid}','{$goods}','{$project}','{$money}','{$jifen}','{$tradetime}','{$jingban}','{$user}',NOW());";
        $this->db->query($sqladd);
        if ($this->db->affected_rows() > 0) {

            if ($jifen > 0)
            {

            }
                echo "保存成功";
        } else {
            echo "保存失败";
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
