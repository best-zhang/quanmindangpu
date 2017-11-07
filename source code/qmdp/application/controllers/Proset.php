<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proset extends CI_Controller
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
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('proset');
    }

    public function __construct()
    {
        parent::__construct();

        $this->load->library('MYController');

        $this->load->database();
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
        $name = trim($_POST['proname']);
        $title = trim($_POST['protitle']);
        $introduction = trim($_POST['introduction']);
        $tel = trim($_POST['tel']);
        $wx = trim($_POST['wx']);
        $qq = trim($_POST['qq']);
        $wantall = trim($_POST['wantall']);
        $minimum = trim($_POST['frommoney']);
        $imgs = trim($_POST['imgs']);
        $remainday = trim($_POST['remainday']);
        $discrible = trim($_POST['discrible']);

        $imgs = ltrim($imgs, ",");
        $img = "";
        if (!empty($imgs)) {
            //如果图片很多，只保留第一张
            $temp = explode(',', $imgs);
            $img = $temp[0];
        }

        $user = $this->session->userdata('user_info');

        $sqladd = "INSERT INTO raise(NAME,title,instruction,tel,weixin,qq,target,minimum,remainday,dtend,cover,completed,detail,createby,dtinsert)" .
            "VALUES('{$name}','{$title}','{$introduction}','{$tel}','{$wx}','{$qq}',$wantall*10000,$minimum*10000,$remainday,DATE_ADD(NOW(),INTERVAL $remainday day),'{$img}',0,'{$discrible}','{$user}',NOW());";

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
