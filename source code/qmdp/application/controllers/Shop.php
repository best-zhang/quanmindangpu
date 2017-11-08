<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller
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
        $data['proinfo'] = $this->getProInfo();
        $this->load->view('shop',$data);
    }

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    function getProInfo()
    {
        $id = trim($_GET['id']);
        $sqlselect = "SELECT id,name FROM raise WHERE id = '{$id}';";

        $query = $this->db->query($sqlselect);
        $pro = 0;
        foreach ($query->result() as $row) {
            $pro = $row;
        }

        return $pro;
    }

    function gethotgoods()
    {
        $id = trim($_POST['id']);
        $sqlselect = "SELECT id,name,price,imgs FROM goods WHERE basetypeid = 2 AND proid = {$id} ORDER BY id;";

        $query = $this->db->query($sqlselect);

        $this->response_data($query->result());
    }

    function getnewgoods()
    {
        $id = trim($_POST['id']);
        $sqlselect = "SELECT id,name,price,imgs FROM goods WHERE basetypeid = 1 AND proid = {$id} ORDER BY id;";

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
