<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getRegisterList($username,$nickname,$password,$email)
    {
        $this->load->helper('date');
        $time =  now();
        $where = "username = '".$username."' OR nickname = '".$nickname."'";
        if(($username != "") && ($nickname != "") && ($password != "")){
            $this->db->select('nickname');
            $judge = $this->db->get_where('user',$where,0,0);
            $row = $judge->row();
            if(($row == NULL)){
                $sql = "INSERT INTO user VALUES(NULL,'0','0','"
                    .$username."','".$password."','".$email."','".$nickname."','".$time."','".$time."')";
                $this->db->query($sql);
            }else{
                return "用户名已被注册，请重新输入！";
            }
            return "恭喜您已成功注册！";
        }else{
            return "";
        }
    }
}