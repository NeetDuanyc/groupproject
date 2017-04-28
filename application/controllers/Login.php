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

        $result = $this->login_model->getLoginList($userornick,$password);
        if($result == "false"){
            redirect('/user/create/');
        }
        $this->smarty->assign('title', '登录');
        $this->smarty->assign('result',$result);
        $this->smarty->display('login/login.html');
    }
}