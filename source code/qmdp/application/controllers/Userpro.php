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
        $this->load->view('userpro');
    }

    public function __construct()
    {
        parent::__construct();

//        $this->load->library('MYController');

        $this->load->database();
    }

    function getGoodsList()
    {
        $sqlselect = 'SELECT t1.id, t1.name,t1.goodscode,t1.price,t1.integral,t2.name AS proname,t3.name AS protype,t4.name AS basetype' .
            ' FROM goods t1 LEFT JOIN raise t2 ON t1.proid = t2.id' .
            ' LEFT JOIN goodstype t3 ON t1.goodstypeid = t3.id' .
            ' LEFT JOIN basetype t4 ON t1.basetypeid = t4.id' .
            ' ORDER BY t1.id;';

        $query = $this->db->query($sqlselect);

        $this->response_data($query->result());
    }

    function delgoods()
    {
        $id = trim($_POST['id']);

        $sqldelete = "DELETE FROM goods WHERE id='{$id}'";
        $this->db->query($sqldelete);
        if ($this->db->affected_rows() > 0) {
            echo "删除成功";
        } else {
            echo "删除失败";
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
