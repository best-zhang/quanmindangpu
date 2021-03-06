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
        $sqlselect = "SELECT name,superior,IFNULL(ROUND(money,2),'0') as money,id FROM("
            . " SELECT t1.id,t1.name,t1.superior,SUM(t2.money)*0.05 AS money"
            . " FROM user t1 LEFT OUTER JOIN raisedeal t2 ON t1.id = t2.userid"
            . " WHERE t1.superior = 1"
            . " GROUP BY t1.id,t1.name,t1.superior"
            . " UNION ALL"
            . " SELECT t1.id,t1.name,t1.superior,SUM(t2.money)*0.03 AS money FROM user t1 "
            . " LEFT OUTER JOIN raisedeal t2 ON t1.id = t2.userid"
            . " WHERE t1.id IN("
            . " SELECT t1.id FROM	user t1"
            . " INNER JOIN user t2 ON t1.superior = t2.id"
            . " WHERE	t2.superior = 1"
            . " )GROUP BY t1.id,t1.name,t1.superior"
            . " UNION ALL"
            . " SELECT t1.id,t1.name,t1.superior,SUM(t2.money)*0.02 AS money FROM user t1"
            . " LEFT OUTER JOIN raisedeal t2 ON t1.id = t2.userid"
            . " WHERE t1.id IN("
            . " select t1.id from user t1"
            . " inner join ("
            . " select t1.id,t1.superior from user t1"
            . " inner join user  t2 on t1.superior = t2.id"
            . " where t2.superior= 1"
            . " ) t2 on t1.superior = t2.id"
            . " )GROUP BY t1.id,t1.name,t1.superior"
            . " )t;";

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

        $arr = array("data" => $res, "all" => sprintf("%.2f", $all));
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
