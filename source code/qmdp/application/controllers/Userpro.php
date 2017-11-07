<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userpro extends CI_Controller
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
        $this->load->view('userpro', $data);
    }

    public function __construct()
    {
        parent::__construct();

        $this->load->library('MYHomeController');

        $this->load->database();
    }

    function getProList()
    {
        $user = $this->session->userdata('user_info_home');
        $sqlselect = "SELECT t1.name,t1.target,t1.minimum,t1.completed,t1.cover,t1.prostatus,DATEDIFF(t1.dtend,NOW()) as remianday "
            . " FROM raise t1,raisedeal t2 WHERE t2.projectid = t1.id AND t2.userid = {$user->id} ;";

        $query = $this->db->query($sqlselect);

        $this->response_data($query->result());
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
