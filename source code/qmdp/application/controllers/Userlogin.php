<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userlogin extends CI_Controller
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
        $this->load->view('userlogin');
    }

    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->database();
    }

    public function userLogin()
    {
        $res = '登录成功';
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        if ($username && $password) {
            $sqlselect = "SELECT id,username,name, if(sex=0,'男','女') AS sex,age,tel,integral,img,birthday,dtlast FROM user WHERE username = '{$username}'  AND password = '{$password}' LIMIT 1;";
            $query = $this->db->query($sqlselect);

            $user = null;
            foreach ($query->result() as $row) {
                $user = $row;
            }
            if ($user) {
                $this->session->set_userdata('user_info_home', $user);
            } else {
                $res = '用户名或密码不正确';
            }
        } else {
            $res = '请填写用户名和密码';
        }
        echo $res;
    }

    public function getUser()
    {
        $session_data = $this->session->userdata('user_info_home');

        echo $session_data;
    }

    public function userLogout()
    {
        $user = $this->session->userdata('user_info_home');
        if ($user) {
            $this->session->unset_userdata('user_info_home');
        }
        echo '退出成功';
    }

}
