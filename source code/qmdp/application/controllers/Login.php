<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
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
        $this->load->view('login');
    }

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function userLogin()
    {
        $res = '登录成功';
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        if ($username && $password) {
            $sqlselect = "SELECT * FROM user WHERE username = '{$username}'  AND password = '{$password}'";
            $query = $this->db->query($sqlselect);
            $row = $query->row();
            if ($row > 0) {
                $isRem = 0;
                if (isset($_POST["chk"])) {
                    $a = $_POST["chk"];
                    if ($a) {
                        $isRem = 1;
                    }
                }
                if ($isRem == 1) {

                }
                $this->load->library('session');
                $this->session->set_userdata('user_info', $username);
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
        $this->load->library('session');
        $session_data = $this->session->userdata('user_info');

        echo $session_data;
    }

    public function userLogout()
    {
        $this->load->library('session');
        $session_data = $this->session->userdata('user_info');
        if ($session_data) {
            $this->session->unset_userdata('user_info');
        }
        echo '退出成功';
    }
}
