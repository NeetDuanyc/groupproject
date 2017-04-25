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
        $this->smarty->assign('title', '注册');
        $this->smarty->display('register/register.html');
    }
}