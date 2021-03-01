<?php
if ( ! defined('BASEPATH')) exit('No direct script accessallowed');
class Compass_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function add_users($data)
    {
        return $this->db->insert('posts',$data);
    }
    public function get_user_login($email,$password)
    {
        // $query = $this->db->get_where('posts',array('email' => $email, 'password' => password_verify($password)));
        
    }
    public function serch_data()
    {
        $query = $this->db->get('users');
        
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
}
?>