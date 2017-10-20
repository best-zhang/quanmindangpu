<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Goodsset extends CI_Controller
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
        $this->load->view('goodsset');
    }

    public function __construct()
    {
        parent::__construct();

        $this->load->library('MYController');

        $this->load->database();
    }

    function getProjects()
    {
        $query = $this->db->query('SELECT id,name FROM raise ORDER BY dtinsert DESC;');

        $this->response_data($query->result());
    }

    function getGoodsType()
    {
        $query = $this->db->query('SELECT id,name FROM goodstype ORDER BY id;');

        $this->response_data($query->result());
    }

    function getBaseType()
    {
        $query = $this->db->query('SELECT id,name FROM basetype ORDER BY id;');

        $this->response_data($query->result());
    }

    public function uploadimg()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $config['file_name'] = time(); //文件名不使用原始名

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image_data')) {
            $error = array('error' => $this->upload->display_errors());
            $this->response_data($error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $this->response_data($data);
        }

    }

    function save()
    {
        $gname = trim($_POST['gname']);
        $gcode = trim($_POST['gcode']);
        $price = trim($_POST['price']);
        $jifen = trim($_POST['jifen']);
        $gtype = trim($_POST['gtype']);
        $basetype = trim($_POST['basetype']);
        $project = trim($_POST['project']);
        $tel = trim($_POST['tel']);
        $certificate = trim($_POST['certificate']);
        $size = trim($_POST['size']);
        $weight = trim($_POST['weight']);
        $material = trim($_POST['material']);
        $imgs = trim($_POST['imgs']);
        $discrible = trim($_POST['discrible']);

        $imgs = ltrim($imgs, ",");

        $user = $this->session->userdata('user_info');

        $sqladd = "INSERT INTO goods(name,price,integral,goodstypeid,basetypeid,proid,tel,goodscode,certificate,size,weight,material,imgs,detail,createby,dtinsert) " .
            "VALUES('{$gname}','{$price}','{$jifen}','{$gtype}','{$basetype}','{$project}','{$tel}','{$gcode}','{$certificate}','{$size}','{$weight}','{$material}','{$imgs}','{$discrible}','{$user}',NOW());";

        $this->db->query($sqladd);
        if ($this->db->affected_rows() > 0) {
            echo "保存成功";
        } else {
            echo "保存失败";
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
