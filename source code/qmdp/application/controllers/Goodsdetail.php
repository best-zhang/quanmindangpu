<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Goodsdetail extends CI_Controller
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
        $arr = $this->getGoodsInfo();
        $data['goodsinfo'] = $arr['data'];
        $data['img1'] = $arr['img1'];
        $data['img2'] = $arr['img2'];
        $data['img3'] = $arr['img3'];
        $data['img4'] = $arr['img4'];
        $this->load->view('goodsdetail', $data);
    }

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    function getProInfo()
    {
        $id = trim($_GET['id']);
        $sqlselect = "SELECT t1.id,t1.name FROM raise t1,goods t2 WHERE t1.id = t2.proid AND t2.id = '{$id}';";

        $query = $this->db->query($sqlselect);
        $pro = 0;
        foreach ($query->result() as $row) {
            $pro = $row;
        }

        return $pro;
    }

    function getGoodsInfo()
    {
        $id = trim($_GET['id']);
        $sqlselect = "SELECT t1.id,t1.name,t1.price,t1.integral,t1.tel,t1.goodscode,t1.certificate,t1.size,t1.weight,t1.material,t1.imgs,t1.detail,"
            . "t2.name AS goodstype,t3.name AS basetype "
            . "FROM goods t1,goodstype t2,basetype t3 WHERE t1.goodstypeid = t2.id AND t1.basetypeid = t3.id AND t1.id = '{$id}';";

        $query = $this->db->query($sqlselect);
        $pro = 0;
        $img1 = "";
        $img2 = "";
        $img3 = "";
        $img4 = "";
        foreach ($query->result() as $row) {
            $pro = $row;
        }
        if ($pro) {
            $imgs = explode(',', $pro->imgs);
            if (count($imgs) > 0) $img1 = $imgs[0];
            if (count($imgs) > 1) $img2 = $imgs[1];
            if (count($imgs) > 2) $img3 = $imgs[2];
            if (count($imgs) > 3) $img4 = $imgs[3];
        }
        $arr = array("data" => $pro, "img1" => $img1, "img2" => $img2, "img3" => $img3, "img4" => $img4);
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
