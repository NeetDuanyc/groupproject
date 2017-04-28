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
        if(($username != " ") && ($nickname != " ") && ($password != "")){
            $sql = "SELECT password_hash FROM user WHERE username = ".$username." OR nickname = ".$nickname;
            $judge = $this->db->query($sql);
            if($judge != NULL){
                $sql = "INSERT INTO user VALUES(NULL,'0','0','"
                    .$username."','".$password."','".$email."','".$nickname."','1','1')";
                $this->db->query($sql);
            }else{
                return false;
            }
            return true;
        }else{
            return false;
        }
    }
}