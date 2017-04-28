<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends Base_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function register()
    {
        $username = $this->input->post('username');
        $nickname = $this->input->post('nickname');
        $password = $this->input->post('password');
        $email = $this->input->post('email');

        $this->load->model('register_model');

        $result = $this->register_model->getRegisterList($username,$nickname,$password,$email);

        $this->smarty->assign('title', '注册');
        $this->smarty->assign('result',$result);
        $this->smarty->display('register/register.html');
    }
}