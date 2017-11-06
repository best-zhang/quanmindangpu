<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: jumee
 * Date: 2016/10/11
 * Time: 15:30
 */
class MYHomeController
{//前台登录
    protected $CI;
    public $need_login = true;//控制是否需要登录

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->library('session');

        $this->check_login();
    }

    /**
     * 自定义验证登录模块
     */
    private function check_login()
    {
        if ($this->need_login) {
            $user = $this->CI->session->userdata('user_info_home');
            if (!$user) {
                $url = "../../userlogin";
                echo "<script language='javascript' type='text/javascript'>";
                echo "window.location.href='$url'";
                echo "</script>";
                exit;
            }
        }
    }

}