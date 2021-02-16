<?php
if ( ! defined('BASEPATH')) exit('No direct script accessallowed');
class Compass_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
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