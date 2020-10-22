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
        $this->load->view('top_view');
    }
    public function serch(){
        $this->load->view('serch_view');
    }
    public function profile(){
        $this->load->view('profile_view');
    }
    public function twit(){
        $this->load->view('twit_view');
    }
    public function json(){
        $config_file ="../js/pref_city.json";
        $config_json = file_get_contents($config_file);
        $elements = json_decode($config_json, true);
    }
    public function test(){
        $this->load->view('main_view');
    }
}
?>