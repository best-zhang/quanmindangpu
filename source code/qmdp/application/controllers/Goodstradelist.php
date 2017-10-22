<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Goodstradelist extends CI_Controller
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
        $this->load->view('goodstradelist');
    }

    public function __construct()
    {
        parent::__construct();

        $this->load->library('MYController');

        $this->load->database();
    }

    function getGoodsTradeList()
    {
        $selectsql = 'SELECT t1.id,t1.money,t1.integral,t1.tradetime,t1.jingban,t2.username AS uname,' .
            ' t3.name AS gname,t3.goodscode,t4.name AS pname' .
            ' FROM goodsdeal t1 LEFT JOIN user t2 ON t1.userid = t2.id' .
            ' LEFT JOIN goods t3 ON t1.goodsid = t3.id' .
            ' LEFT JOIN raise t4 ON t1.proid = t4.id' .
            ' ORDER BY t1.dtinsert DESC;';
        $query = $this->db->query($selectsql);

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
