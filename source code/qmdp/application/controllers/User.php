<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
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
        $this->load->view('user');
    }

    public function __construct()
    {
        parent::__construct();

        $this->load->library('MYController');

        $this->load->database();
    }

    function save()
    {
        $username = trim($_POST['username']);
        $uname = trim($_POST['uname']);
        $sex = trim($_POST['sex']);
        $age = trim($_POST['age']);
        $tel = trim($_POST['tel']);
        $superior = trim($_POST['superior']);

        $user = $this->session->userdata('user_info');

        $exist = null;
        $sqlselect = "SELECT * FROM user WHERE username = '{$username}' ;";
        $query = $this->db->query($sqlselect);

        foreach ($query->result() as $row) {
            $exist = $row;
        }
        if ($exist) {
            echo "该用户名已存在.";
        } else {
            $sqladd = "INSERT INTO user(username,password,name,sex,age,tel,superior,createby,dtinsert) " .
                "VALUES('{$username}','123456','{$uname}','{$sex}','{$age}','{$tel}',{$superior},'{$user}',NOW());";

            $this->db->query($sqladd);
            if ($this->db->affected_rows() > 0) {
                echo "保存成功";
            } else {
                echo "保存失败";
            }
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
