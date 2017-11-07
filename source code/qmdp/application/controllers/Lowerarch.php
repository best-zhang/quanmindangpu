<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lowerarch extends CI_Controller
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
        $arr = $this->getLowerData();
        $data['draw'] = $arr['data'];
        $data['money'] = $arr['all'];
        $this->load->view('lowerarch', $data);
    }

    public function __construct()
    {
        parent::__construct();

        $this->load->library('MYHomeController');

        $this->load->database();
    }

    function getLowerData()
    {
        $session_user = $this->session->userdata('user_info_home');
        $sqlselect = "SELECT name,superior,SUM(money) as money,id FROM ("

            . " SELECT t1.money * 0.05 as money,t2.name,t2.superior,t2.id"
            . " FROM raisedeal t1,user t2 WHERE t1.userid=t2.id"
            . " AND t2.superior = {$session_user->id}"
            . " UNION ALL"

            . " SELECT t1.money * 0.03 as money,t2.name,t2.superior,t2.id"
            . " FROM raisedeal t1,user t2 WHERE t1.userid=t2.id"
            . " AND t2.id in ("
            . " select t1.id from user t1"
            . " inner join user  t2  on t1.superior = t2.id"
            . " where t2.superior= {$session_user->id}"
            . " )"
            . " UNION ALL"

            . " SELECT t1.money * 0.02 as money,t2.name,t2.superior,t2.id"
            . " FROM raisedeal t1,user t2 WHERE t1.userid=t2.id"
            . " AND t2.id in("
            . " select t1.id from user t1"
            . " inner join ("
            . " select t1.id,t1.superior from user t1"
            . " inner join user  t2 on t1.superior = t2.id"
            . " where t2.superior= {$session_user->id}"
            . " ) t2 on t1.superior = t2.id"
            . " )"
            . " )m GROUP BY id,superior,name ;";

        $query = $this->db->query($sqlselect);

        $res = "p{$session_user->id}={text:{name:'{$session_user->name}',title:''}},";
        $config = "chart_config = [config,p{$session_user->id}";
        $all = 0;
        foreach ($query->result() as $row) {
            $res .= "p{$row->id}={parent:p{$row->superior},text:{name:'{$row->name}',title:'{$row->money}'}},";
            $config .= ",p{$row->id}";
            $all = $all + $row->money;
        }
        $res .= $config . "];";

        $arr = array("data" => $res, "all" => $all);
        return $arr;
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
