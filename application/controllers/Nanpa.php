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
        $this->load->view('main_view');
    }
    public function top(){
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
    // 登録（仮）フォームへ
    public function registration_mail_form(){
        $this->load->view('registration_mail_form_view');
    }
    // 登録（本）フォームへ
    public function registration_form(){
        $this->load->view('registration_form_view');
    }
    //ログインフォームへ
    public function login(){
        $this->load->view('login_form_view');
    }
}
?>