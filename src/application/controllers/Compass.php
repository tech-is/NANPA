<?php 
/***********************
 * compass main page
 ***********************/
defined('BASEPATH') OR exit('No direct script access allowed');

class Compass extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->model("Compass_model");
    }
    public function index()
    {
        $this->main();
    }
    public function main()
    {
        $this->load->view('main_view');
    }
    public function terms()
    {
        $this->load->view('terms_view');
    }
    public function privacy()
    {
        $this->load->view('privacy_view');
    }
    public function top()
    {
        $this->load->view('top_view');
    }
    public function serch()
    {
        $this->load->view('serch_pages/serch_view');
    }
    public function serch_submit()
    {
        $data = array(
            "prefectures" => $this->input->post('prefectures'),
            "age" => $this->input->post('age'),
            "gender" => $this->input->post('gender')
        );

        if($data['prefectures'] && $data['age'] && $data['gender'] == $this->Compass_model->serch_data()) {
            $this->load->view('serch_pages/serch_detail',$data);
        } else {
            echo "データベース登録情報がありません。";
            $this->load->view('serch_pages/serch_detail',$data);
        }

    }
    public function profile()
    {
        $this->load->view('profile_pagas/profile_view');
    }
    public function twit()
    {
        $this->load->view('profile_pagas/twit_view');
    }
    // public function json(){
    //     $config_file ="../js/pref_city.json";
    //     $config_json = file_get_contents($config_file);
    //     $elements = json_decode($config_json, true);
    // }

    // 新規登録
    public function register_mail_form()
    {
        $this->load->view('register_pages/register_mail_form_view');
    }
    public function register_check()
    {

        $data = array(
            "email" => $this->input->post('email'),
            "password" => $this->input->post('password'),
            "cpassword" => $this->input->post('cpassword'),
            "age_submit" => $this->input->post('age_submit'),
            "terms" => $this->input->post('terms')
        );

        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('email', 'メールアドレス', 'required|valid_email|xss_clean');
        $this->form_validation->set_rules('password', 'パスワード', 'required|');
        $this->form_validation->set_rules('cpassword', 'パスワードの確認', 'required|matches[password]');
        $this->form_validation->set_rules('age_submit', '年齢確認', 'required');
        $this->form_validation->set_rules('terms', '利用同意', 'required');

        if ($this->form_validation->run() == FALSE){

            $this->load->view('register_pages/register_mail_form_view');
        } else {
            $this->Compass_model->add_users($data);
        }


    }
    // 登録（本）フォームへ
    public function register_form()
    {
        $this->load->view('register_pages/register_form_view');
    }
    //ログインフォームへ
    public function login()
    {
        $this->load->view('login_pages/login_form_view');
    }
}
