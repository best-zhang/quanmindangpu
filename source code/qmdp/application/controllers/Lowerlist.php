<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lowerlist extends CI_Controller
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
        $this->load->view('lowerlist', $data);
    }

    public function __construct()
    {
        parent::__construct();

        $this->load->library('MYHomeController');

        $this->load->database();
    }

    function getLowerList()
    {
        $session_user = $this->session->userdata('user_info_home');
        $sqlselect = "SELECT proname,tradetime,name,age,if(sex=0,'男','女') AS sex,level,money FROM ("

            . " SELECT t1.tradetime,t1.money,t2.name,t2.sex,t2.age,t3.name as proname,'A' as level"
            . " FROM raisedeal t1,user t2,raise t3 WHERE t1.userid=t2.id"
            . " AND t1.projectid = t3.id"
            . " AND t2.superior = {$session_user->id}"
            . " UNION ALL"

            . " SELECT t1.tradetime,t1.money,t2.name,t2.sex,t2.age,t3.name as proname,'B' as level"
            . " FROM raisedeal t1,user t2,raise t3 WHERE t1.userid=t2.id"
            . " AND t1.projectid = t3.id"
            . " AND t2.id in ("
            . " select t1.id from user t1"
            . " inner join user  t2  on t1.superior = t2.id"
            . " where t2.superior= {$session_user->id}"
            . " )"
            . " UNION ALL"

            . " SELECT t1.tradetime,t1.money,t2.name,t2.sex,t2.age,t3.name as proname,'C' as level"
            . " FROM raisedeal t1,user t2,raise t3 WHERE t1.userid=t2.id"
            . " AND t1.projectid = t3.id"
            . " AND t2.id in("
            . " select t1.id from user t1"
            . " inner join ("
            . " select t1.id,t1.superior from user t1"
            . " inner join user  t2 on t1.superior = t2.id"
            . " where t2.superior= {$session_user->id}"
            . " ) t2 on t1.superior = t2.id"
            . " )"
            . " )m;";

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
