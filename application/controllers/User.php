<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Base_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function create()
    {
        $this->smarty->assign('title', '创建调查问卷');
        $this->smarty->display('user/create.html');
    }
    public function check(){
        $this->smarty->assign('title','查看已发布的调查问卷');
        $this->smarty->assign('user/check.html');
    }
}