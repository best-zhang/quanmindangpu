<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prostatus extends CI_Controller
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
        $this->load->view('prostatus');
    }

    public function __construct()
    {
        parent::__construct();

        $this->load->library('MYController');

        $this->load->database();
    }

    function getRaising()
    {
        $query = $this->db->query('SELECT id,name,cover FROM raise WHERE prostatus=0 ORDER BY dtinsert DESC;');

        $this->response_data($query->result());
    }

    function getPlan()
    {
        $query = $this->db->query('SELECT id,name,cover FROM raise WHERE prostatus=1 ORDER BY dtinsert DESC;');

        $this->response_data($query->result());
    }

    function getCompleted()
    {
        $query = $this->db->query('SELECT id,name,cover FROM raise WHERE prostatus=2 ORDER BY dtinsert DESC;');

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
