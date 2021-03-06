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
        return $this->db->insert('users',$data);
    }
    public function login_check()
    {
        $this->db->from('users');
        $query = $this->db->get();

        if($query->num_rows() > 0){
			return $query->row_array();
		}
        
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