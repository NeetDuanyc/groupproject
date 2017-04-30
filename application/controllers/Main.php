<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends Base_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->smarty->assign('title', '主页');
        $this->smarty->display('main/index.html');
    }

    public function main(){
        $this->load->library('session');

        $user = $this->session->userdata('user');
        echo "尊敬的用户".$user."，请选择您需要的功能：<br>";
        $this->smarty->assign('title','用户中心');
        $this->smarty->display('main/main.html');
    }
}
