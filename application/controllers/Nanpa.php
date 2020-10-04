<?php 
/***********************
 * nanpa main page
 ***********************/
defined('BASEPATH') OR exit('No direct script access allowed');

class Nanpa extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }
    public function index(){
        $this->main();
    }
    public function main(){
        $this->load->view('top_view.php');
    }
    public function serch(){
        $this->load->view('serch_view.php');
    }
    public function profile(){
        $this->load->view('profile_view.php');
    }
    public function twit(){
        $this->load->view('twit_view.php');
    }
}
?>