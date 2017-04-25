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

}
