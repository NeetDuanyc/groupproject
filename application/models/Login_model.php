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
        $where = "username = ".$userornick." OR nickname = ".$userornick;
        if(($userornick != " ")&&($password != "")){
            $this->db->select('password_hash');
            $result = $this->db->get_where('user',$where,0,0);
            //$sql = "SELECT password_hash FROM user WHERE username = ".$userornick." OR nickname = ".$userornick;
            //$result = $this->db->get($sql);
            if($password == $result){
                return $true;
            }else{
                return $false;
            }
        }else{
            return $false."b";
        }
    }
}