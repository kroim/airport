<?php
/**
 * Created by PhpStorm.
 * User: GaoComet
 * Date: 12/1/2017
 * Time: 1:57 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('UserModel');

    }

    public function index(){
        $this->load->view('login');
    }
    /*
     * User login
     */
    public function login(){
        $data = array();
        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }
        if($this->input->post('loginSubmit')){

            $this->form_validation->set_rules('user-email', 'user-email', 'required');
            $this->form_validation->set_rules('user-password', 'user-password', 'required');

            if($this->form_validation->run() == true){

                $con['returnType'] = 'single';
                $con['conditions'] = array(
                    'email'=>$this->input->post('user-email'),
                    'password'=>$this->input->post('user-password'),
                );
                $checkLogin = $this->UserModel->getRows($con);

                if($checkLogin){
                    $this->session->set_userdata('isUserLoggedIn', true);
                    $this->session->set_userdata('userID', $checkLogin['id']);
                    $this->session->set_userdata('permission', $checkLogin['permission']);
                    redirect('main');
                }else{
                    $data['error_msg'] = 'Login Failed!';
                }
            }
        }
//        redirect('user/login', $data);
        $this->load->view('users/login', $data);
    }
    /*
    * User registration
    */
    public function register(){
        $data = array();
        $userData = array();
        if($this->input->post('registerSubmit')){
            $this->form_validation->set_rules('name', 'name', 'required');
            $this->form_validation->set_rules('email', 'email', 'required|callback_email_check');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('conf_password', 'confirm password', 'required|matches[password]');

            $userData = array(
                'name' => strip_tags($this->input->post('name')),
                'email' => strip_tags($this->input->post('email')),
                'password' => strip_tags($this->input->post('password')),
                'permission' => strip_tags($this->input->post('permission'))
            );
            if($this->form_validation->run() == true){
                $insert = $this->UserModel->insert($userData);
                if($insert){
                    $this->session->set_userdata('success_msg', 'Register Success!');
                    redirect('user/login');
                }else{
                    $data['error_msg'] = 'Register Failed';
                }
            }
        }
        $data['user'] = $userData;
        $this->load->view('users/register', $data);
    }
    /*
     * User logout
     */
    public function logout(){
        $this->session->unset_userdata('isUserLoggedIn');
        $this->session->unset_userdata('userID');
        $this->session->unset_userdata('permission');
        //$this->session->sess_destroy();
        redirect('user/login');
    }
    /*
     * Existing name check during validation
     */
    public function name_check($str){
        $con['returnType'] = 'count';
        $con['conditions'] = array('name'=>$str);
        $checkName = $this->UserModel->getRows($con);
        if ($checkName > 0){
            $this->form_validation->set_message('name_check', 'This Name already exists!');
            return false;
        }else{
            return true;
        }
    }
    public function email_check($str){
        $con['returnType'] = 'count';
        $con['conditions'] = array('email'=>$str);
        $checkName = $this->UserModel->getRows($con);
        if ($checkName > 0){
            $this->form_validation->set_message('email_check', 'This Email already exists!');
            return false;
        }else{
            return true;
        }
    }
}

?>