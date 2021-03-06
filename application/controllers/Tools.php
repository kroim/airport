<?php
/**
 * Created by PhpStorm.
 * User: GaoComet
 * Date: 12/20/2017
 * Time: 8:11 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Tools extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->database();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('MainModel');
        $this->load->model('UserModel');
        $this->load->model('ControlModel');

        if(!$this->session->userdata('isUserLoggedIn')){
            redirect('User/login');
        }
    }
    function index(){
        $userInfo = $this->UserModel->getRows(array('id'=>$this->session->userdata('userID')));
        $data['user'] = $userInfo;
        $data['title'] = "Control Panel";
        if ($userInfo['permission'] == 'admin' || $userInfo['permission'] == 'dispatcher'){
            $this->load->view('control/control_header', $data);
            $this->load->view('control/calc');
            $this->load->view('users/footer');
        }else{
            redirect('User/login');
        }
    }
}