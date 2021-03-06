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
        $this->load->library(array('session', 'form_validation'));
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
        $this->load->view('profile_pages/profile_view');
    }
    public function profile_change()
    {
        $this->load->view('profile_pages/profile_edit');
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
        $this->load->view('register_pages/register_view');
    }
    public function register_check()
    {

        $data = array(
            "email" => $this->input->post('email'),
            "password" => $this->input->post('password'),
        );

        $data['password'] = password_hash($data['password'],PASSWORD_DEFAULT);
        
        $this->form_validation->set_rules('email', 'メールアドレス', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'パスワード', 'trim|required');
        $this->form_validation->set_rules('cpassword', 'パスワードの確認', 'trim|required|matches[password]');
        $this->form_validation->set_rules('age_submit', '年齢確認', 'trim|required');
        $this->form_validation->set_rules('terms', '利用同意', 'trim|required');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('register_pages/register_view');
        } else {
            if($this->Compass_model->add_users($data)){
                $this->register_mail($data);
            } else {
                $this->load->view('register_pages/register_view');
            }
        }
    }
    // 登録（本）フォームへ
    public function register_mail($data)
    {
        //メールの送信
        $this->load->view('register_pages/register_done_view',$data);

    }
    //ログインフォームへ
    public function login()
    {
        $this->load->view('login_pages/login_form_view');
    }
    public function login_check()
    {
        $data = [
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        ];
        if($admin_data = $this->Compass_model->login_check()) {
            if(password_verify($data['password'],$admin_data['password'])) {
                $_SESSION['admin'] = true;
                $this->can_login();
            } else {
                redirect('compass/login');
            }
        } else {
            redirect('compass/login');
        }
    }
    public function can_login() {
        if(empty($_SESSION['admin']) || $_SESSION['admin'] !== true){
            redirect('compass/login');
        } else {
            $this->top();
        }

    }
}
