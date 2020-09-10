<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ModelUsers extends CI_Model {
    public function __construct()
    {
         $this->load->database();
    } 
    public function getLoginData($user,$pass)
    {
        $query = $this->db->query("SELECT * FROM USUARIOS  WHERE USER= '". $user ."' and PASS= '". $pass ."'");
        if (count($query->result()) > 0) {
            foreach ($query->result() as $row ) {
                foreach ($query->result() as $rows ) {
                    $sess_data['login'] = TRUE;
                    $sess_data['userId'] = $rows->id;
                    $sess_data['userName'] = $rows->name;
                    $this->session->set_userdata($sess_data);
                    return true;
                }
            }
        } else {
            return false;
        }
    }
}

?>