<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Base_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function login()
    {
        $userornick = $this->input->post('userornick');
        $password = $this->input->post('password');

        $this->load->model('login_model');
        $this->load->helper('url');
        $this->load->library('session');

        $result = $this->login_model->getLoginList($userornick,$password);
        if($result == "true"){
            $this->session->set_userdata('user',$userornick);
            redirect('http://123.206.16.231:8081/');
        }else if($result == "false"){
            echo "用户名或密码错误！请重新输入！";
        }else{
            echo $result;
        }
        $this->smarty->assign('title', '登录');
        $this->smarty->display('login/login.html');
    }
}