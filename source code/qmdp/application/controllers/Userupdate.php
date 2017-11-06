<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userupdate extends CI_Controller
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
        $this->load->view('userupdate', $data);
    }

    public function __construct()
    {
        parent::__construct();

        $this->load->library('MYHomeController');

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
        $sex = trim($_POST['sex']);
        $birthday = trim($_POST['birthday']);
        $tel = trim($_POST['tel']);
        $imgs = trim($_POST['imgs']);

        $imgs = ltrim($imgs, ",");
        $img = "";
        if (!empty($imgs)) {
            //如果图片很多，只保留第一张
            $temp = explode(',', $imgs);
            $img = $temp[0];
        }

        $user = $this->session->userdata('user_info_home');

        $sqlupdate = "UPDATE user SET sex={$sex},birthday='{$birthday}',tel='{$tel}' ";
        if ($img) {
            $sqlupdate .= ",img='{$img}'";
        }
        $sqlupdate .= " WHERE id = {$user->id}";

        $this->db->query($sqlupdate);
        if ($this->db->affected_rows() > 0) {
            $this->refresh();
            echo "保存成功";
        } else {
            echo "保存失败";
        }
    }

    public function refresh()
    {
        $session_user = $this->session->userdata('user_info_home');
        $sqlselect = "SELECT id,username,name, if(sex=0,'男','女') AS sex,age,tel,integral,img,birthday,dtlast FROM user WHERE id = '{$session_user->id}' LIMIT 1;";
        $query = $this->db->query($sqlselect);

        $user = null;
        foreach ($query->result() as $row) {
            $user = $row;
        }
        if ($user) {
            $this->session->set_userdata('user_info_home', $user);
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
