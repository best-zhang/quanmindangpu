<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userpwd extends CI_Controller
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
        $data['userinfo'] = $this->session->userdata('user_info_home');
        $this->load->view('userpwd', $data);
    }

    public function __construct()
    {
        parent::__construct();

        $this->load->library('MYHomeController');

        $this->load->database();
    }

    function changepwd()
    {
        $pwd = trim($_POST['pwd']);
        $newpwd = trim($_POST['newpwd']);
        $confirmpwd = trim($_POST['confirmpwd']);

        $user = $this->session->userdata('user_info_home');

        $sqlupdate = "UPDATE user SET password='{$newpwd}' WHERE id = {$user->id} AND password = '{$pwd}' ";

        $this->db->query($sqlupdate);
        if ($this->db->affected_rows() > 0) {
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
