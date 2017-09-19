<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: jumee
 * Date: 2016/10/11
 * Time: 15:30
 */
class MYController
{
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
            $session_data = $this->CI->session->userdata('user_info');
            if (!$session_data) {
                $url = "../../login";
                echo "<script language='javascript' type='text/javascript'>";
                echo "window.location.href='$url'";
                echo "</script>";
                exit;
            }
        }
    }

}