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
    public function register()
    {
        $this->load->view('register_pages/register_view');
    }
    public function register_check()
    {
        $data = array(
            "email" => $this->input->post('email'),
            "password" => $this->input->post('password'),
            "post_date" => date('Y-m-d H:i:s'),
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
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $this->form_validation->set_rules('email', 'メールアドレス', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'パスワード', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        if($this->form_validation->run() === FALSE){
            $this->load->view('compass/login');
        } else { 
            if($admin_data = $this->Compass_model->login_check()) {
                if(password_verify($password,$admin_data['password'])) {
                    $_SESSION['admin'] = true;
                    $this->session->set_userdata('email',$email);
                    $this->session->set_userdata('password',$password);
                    $this->session->set_userdata('user_id',$admin_data['id']);
                    $this->session->set_userdata('is_logged_in', true);
                    $session_data = $this->session->all_userdata();
                    $this->can_login($session_data);
                } else {
                    $this->session->set_flashdata('msg_error','Login missed...');    
                    redirect('compass/login');
                }
            } else {
                $this->session->set_flashdata('msg_error','Login missed...');
                redirect('compass/login');
            }
        }
    }
    public function can_login($session_data) {
        if(empty($_SESSION['admin']) || $_SESSION['admin'] !== true){
            redirect('compass/login');
        } else {
            $this->profile($session_data);
        }        
    }
    public function profile($session_data)
    {
        $session_id = $session_data['user_id'];
        if($data['results'] = $this->Compass_model->getData($session_id)){
            $this->load->view('profile_pages/profile_view',$data);
        } else {
            echo "データベース登録情報がありません。";
            $this->load->view('profile_pages/profile_view');
        }
    }
    public function select_pages() {
        $user_id = $this->input->post('user_id');
        $pages = $this->input->post('pages');
        
        if($pages == 1) {
            $this->serch();
        } else if ($pages == 2) {
            $this->profile_edit($user_id);
        } else if ($pages == 3) {
            $this->message($user_id);
        }
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
    public function profile_edit($user_id)
    {
        $this->load->view('profile_pages/profile_edit',$user_id);
    }
    public function message($user_id)
    {
        $this->load->view('profile_pages/message_view',$user_id);
    }
    
}
