<?php
/**
 * Created by PhpStorm.
 * User: GaoComet
 * Date: 12/1/2017
 * Time: 12:46 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';

class Main extends BaseController{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->load->model('UserModel');
        $this->load->model('MainModel');
    }
    public function index(){

        $data = array();
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->UserModel->getRows(array('id'=>$this->session->userdata('userID')));
            //load the view
            $this->load->view('users/header', $data);
            $this->load->view('main_view', $data);
            $this->load->view('users/footer');
        }else{
            redirect('user/login');
        }
    }
    // Category Names
    public function addCategoryName(){
        if($this->session->userdata('isUserLoggedIn')){
            if($this->input->post('m_category_submit')){
                $category = array(
                    'name' => $this->input->post('m_category_name'),
                    'critical' => $this->input->post('m_critical'),
                    'enabled' => $this->input->post('m_enabled'),
                    'ref_num_name' => $this->input->post('m_ref_num_name'),
                    'desc_name' => $this->input->post('m_desc_name'),
                    'due_on_name' => $this->input->post('m_due_on_name')
                );
                $this->MainModel->addCategory($category);
                redirect('main');
            }else{
                redirect('main');
            }
        }else{
            redirect('user/login');
        }
    }
    // View Categories
    public function viewAllCategory(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->UserModel->getRows(array('id'=>$this->session->userdata('userID')));
            if ($data['user']['permission'] == 'admin'){
                $data['all_categories'] = $this->MainModel->getAllCategories();
                //load the view
                $this->load->view('users/header', $data);
                $this->load->view('admin/categories', $data);
                $this->load->view('users/footer');
            }
        }else{
            redirect('main');
        }
    }
    // Edit Category
    public function editCategoryName(){
        if($this->input->post()){
            $category = array(
                'id' => $this->input->post('m_category_id'),
                'name' => $this->input->post('m_category_name'),
                'critical' => $this->input->post('m_critical'),
                'enabled' => $this->input->post('m_enabled'),
                'ref_num_name' => $this->input->post('m_ref_num_name'),
                'desc_name' => $this->input->post('m_desc_name'),
                'due_on_name' => $this->input->post('m_due_on_name')
            );
            $this->MainModel->editCategory($category);
            redirect('main/viewAllCategory');
        }else{
            redirect('main');
        }
    }
    // Delete Category
    public function deleteCategoryName(){
        if($this->input->post()){
            $id =  $this->input->post('dm_category_id');
            var_dump($id);
            $this->MainModel->deleteCategory($id);
            redirect('main/viewAllCategory');
        }else{
            redirect('main');
        }
    }

    // My Account
    public function myAccount(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->UserModel->getRows(array('id'=>$this->session->userdata('userID')));
            if ($data['user']['permission'] == 'admin'){
                //load the view
                $this->load->view('users/header', $data);
                $this->load->view('admin/myaccount', $data);
                $this->load->view('users/footer');
            }
        }else{
            redirect('main');
        }
    }
    // My Account
    public function saveMyProfile(){

        $data = array();
        if($this->session->userdata('isUserLoggedIn')){
            $accountType = $this->input->post('accountType');
            if($accountType == '1'){
                $accountName = $this->input->post('name');
                $contact = $this->input->post('contact');
                $selCountry = $this->input->post('countrySelection');
                $isPasswordChange = $this->input->post('changePasswordCheck');
                $data['name'] = $accountName;
                $data['contact'] = $contact;
                $data['country'] = intval($selCountry);
                $data['address'] = $this->input->post('address');
                $data['id'] = $this->session->userdata('userID');
                $this->UserModel->updateRow($data);
                redirect('main/myAccount');
            } else {
                $data['header'] = $this->input->post('customHeaderText');
                $data['footer'] = $this->input->post('customFooterText');
                $data['notifyat'] = $this->input->post('notifyAt');
                $data['timezone'] = $this->input->post('timezoneSelection');
                $data['notifygroup'] = $this->input->post('alertDocGroupBySelection');
                $data['id'] = $this->session->userdata('userID');
                $this->UserModel->updateRow($data);
                redirect('main/myAccount');
            }

        }else{
            redirect('main');
        }
    }
}