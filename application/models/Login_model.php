<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getLoginList($userornick,$password)
    {
        $true = "true";
        $false = "false";
        $where = "username = '".$userornick."' OR nickname = '".$userornick."'";
        if(($userornick != '')&&($password != '')){
            $this->db->select('password_hash');
            $result = $this->db->get_where('user',$where,0,0);
            $row = $result->row();
            if($row == null){
                return "用户名不存在";
            }else{
                if($password == $row->password_hash){
                    return $true;
                }else if($password != $row->password_hash){
                    return $false;
                }
            }
        }else{
            return '';
        }
    }
}