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
        $this->load->model('CustomModel');
        $this->load->model('GroupModel');
        $this->load->model('CategoryModel');
    }
    public function index(){

        $data = array();
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->UserModel->getRows(array('id'=>$this->session->userdata('userID')));
            if ($data['user']['permission'] == 'manager'){
                $group_category = $this->GroupModel->getGroupById($data['user']['group_id']);
                $category_ids = array();
                if($group_category['category_ids'] != -1){
                    $category_ids = unserialize($group_category['category_ids']);
                }
                $data['user_categories'] = $this->MainModel->getCategories($category_ids);
                $data['user_tasks'] = $this->MainModel->getUserTasks($data['user']['id']);
            }elseif ($data['user']['permission'] == 'admin'){
                $data['user_tasks'] = $this->MainModel->getTasksAll();
            }
            foreach ($data['user_tasks'] as $index => $user_task){
                $due = date('Y-m-d', strtotime($user_task->due_on));
                $c_date = date('Y-m-d');
                $diff = date_diff(date_create($c_date), date_create($due));
                $diff_days = intval($diff->format("%R%a"));
                $c_id = array();
                array_push($c_id, $user_task->category_id);
                $c_category = $this->MainModel->getCategories($c_id);
                $c_critical = intval($c_category[0]->critical);
                if ($diff_days < 0) $data['user_tasks'][$index]->severity = "Overdue";
                elseif ($diff_days < $c_critical) $data['user_tasks'][$index]->severity = "Critical";
                elseif ($diff_days > $c_critical) $data['user_tasks'][$index]->severity = "Due";
                $data['user_tasks'][$index]->categoryName = $c_category[0]->name;
            }

            $dashboardText = $this->MainModel->getDashboardText($data['user']['id']);
            if (sizeof($dashboardText) == 0){
                $text = (object)[
                'referencenumbertext' => "Reference Number",
                'descriptiontext' => "Description",
                'dueontext' => "Due On"
                ];
                array_push($dashboardText, $text);
            }
            $data['dashboardText'] = $dashboardText;
            // User Tasks
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
            redirect('user/login');
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
            if ($data['user']['permission'] == 'manager'){
                $data['user_categories'] = $this->MainModel->getCategories([2,3,4]);
                //load the view
            }
            $this->load->view('users/header', $data);
            $this->load->view('admin/myaccount', $data);
            $this->load->view('users/footer');
        }else{
            redirect('user/login');
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
            }

        }else{
            redirect('user/login');
        }
    }
    // General
    public function general(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->UserModel->getRows(array('id'=>$this->session->userdata('userID')));
            $data['users'] = $this->UserModel->getUsers();
            $data['categories'] = $this->CategoryModel->getCategories();

            $data['custom'] = $this->CustomModel->getRows($this->session->userdata('userID'));
            $data['group'] = $this->GroupModel->getRows();
            $data['selectedGroup'] = count($data['group'])? $data['group'][0]->id:-1;
            $data['selectedGroup1'] = count($data['group'])? $data['group'][0]->id:-1;

            $data['indexOfTab'] = $this->input->get('tab');
            if($this->input->get('group'))  $data['selectedGroup1'] = $this->input->get('group');

            $data['indexOfTab'] = $data['indexOfTab']? $data['indexOfTab']:"1";
            if ($data['user']['permission'] == 'admin'){
                //load the view
                $this->load->view('users/header', $data);
                $this->load->view('admin/general', $data);
                $this->load->view('users/footer');
            }else{
                redirect('main');
            }
        }else{
            redirect('user/login');
        }
    }
    public function ajaxGroup()
    {
        $users = array();
        $data = array();
        $type = $this->input->post('type');
        if($type == 'add'){
            $data['name'] = $this->input->post('groupName');
            $data['user_ids'] = serialize($users);
            echo $this->GroupModel->insertRow($data);
        } elseif ($type == 'get'){
            $id = $this->input->post('id');
            $result = $this->GroupModel->getGroupById($id);
            if($result['user_ids']){
                $result['user_ids'] = unserialize($result['user_ids']);
            }
            if($result['category_ids']){
                $result['category_ids'] = unserialize($result['category_ids']);
            }
            echo (json_encode($result));
        } elseif ($type == 'update'){

            $data['id'] = $this->input->post('selGroup');
            $cat_ids = $this->input->post('catIds');
            $user_ids = $this->input->post('userIds');
            $this->UserModel->updateUsers($data['id'], $user_ids);
            $data['user_ids'] = serialize(($user_ids));
            $data['category_ids'] = serialize(($cat_ids));
            echo $this->GroupModel->updateRow($data);

        } elseif ($type == 'delete'){
            $data['id'] = $this->input->post('selGroup');
            $this->UserModel->deleteUserGroup($data['id']);
            echo $this->GroupModel->deleteRow($data);
        }
    }
    public function saveGeneral()
    {

        $data = array();
        if ($this->session->userdata('isUserLoggedIn')) {
            $generalType = $this->input->post('generalType');
            if ($generalType == '1') {
                $data['header'] = $this->input->post('customHeaderText');
                $data['footer'] = $this->input->post('customFooterText');
                $data['notifyat'] = $this->input->post('notifyAt');
                $data['timezone'] = $this->input->post('timezoneSelection');
                $data['id'] = $this->input->post('alertDocGroupBySelection');

                $this->GroupModel->updateRow($data);

                redirect('main/general?tab=1&group=' .  $data['id'] );
            } elseif ($generalType == '2') {

                $data['groupName'] = $this->input->post('groupName');
                $data['user_id'] = $this->session->userdata('userID');

                //$this->CustomModel->updateRow($data);
                redirect('main/general?tab=2');
            } elseif ($generalType == '3') {
                $data['referencenumbertext'] = $this->input->post('referenceNumberText');
                $data['descriptiontext'] = $this->input->post('descriptionText');
                $data['dueontext'] = $this->input->post('dueonText');
                $data['user_id'] = $this->session->userdata('userID');
                $this->CustomModel->updateRow($data);
                redirect('main/general?tab=3');
            }

        } else {
            redirect('user/login');
        }
    }
    // Audit Log
    public function auditLog(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->UserModel->getRows(array('id'=>$this->session->userdata('userID')));
            if ($data['user']['permission'] == 'admin') {

                $data['logs'] = $this->MainModel->getLogs();
                //load the view
                $this->load->view('users/header', $data);
                $this->load->view('admin/audit', $data);
                $this->load->view('users/footer');
            }else{
                redirect('main');
            }
        }else{
            redirect('user/login');
        }
    }
    // Tasks (view, add, edit, renew, delete)
    public function category($id){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->UserModel->getRows(array('id'=>$this->session->userdata('userID')));
            if ($data['user']['permission'] != 'admin') {
                $data['user_categories'] = $this->MainModel->getCategories([2,3,4]);
                $userId = $data['user']['id'];
                $categoryId = $id;
                $data['tasks'] = $this->MainModel->getTasks($userId, $categoryId);
                $category_array = array();
                array_push($category_array, $id);
                $data['category_names'] = $this->MainModel->getCategories($category_array);
                // load the view
                $this->load->view('users/header', $data);
                $this->load->view('admin/tasks', $data);
                $this->load->view('users/footer');
            }
        }else{
            redirect('user/login');
        }
    }
    public function addTask(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')) {
            $data['user'] = $this->UserModel->getRows(array('id' => $this->session->userdata('userID')));
            if ($this->input->post()){
                $task = array(
                    'user_id' => $data['user']['id'],
                    'category_id' => $this->input->post('am_task_category_id'),
                    'ref_num' => $this->input->post('am_task_ref_num'),
                    'desc' => $this->input->post('am_description'),
                    'due_on' => $this->input->post('am_due_on'),
                    'notes' => $this->input->post('am_notes'),
                );
                $this->MainModel->addTasks($task);
                // Add Log
                $category_id = array();
                array_push($category_id, $this->input->post('am_task_category_id'));
                $category = $this->MainModel->getCategories($category_id);
                $current_date = date("Y-m-d h:i:sa");
                $log = array(
                    'log_category' => $category[0]->name,
                    'log_ref_num' => $this->input->post('am_task_ref_num'),
                    'log_user_n' => $data['user']['name'],
                    'log_user_e' => $data['user']['email'],
                    'action' => 'Create',
                    'date' => $current_date
                );
                $this->MainModel->addLogs($log);
                redirect('main/category/'.$this->input->post('am_task_category_id'));
            }else{
                redirect('main');
            }
        }
        else{
            redirect('user/login');
        }
    }
    public function editTask(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')) {
            $data['user'] = $this->UserModel->getRows(array('id' => $this->session->userdata('userID')));
            if ($this->input->post()){
                $task = array(
                    'id' => $this->input->post('em_task_id'),
                    'user_id' => $data['user']['id'],
                    'category_id' => $this->input->post('em_task_category_id'),
                    'ref_num' => $this->input->post('em_task_ref_num'),
                    'desc' => $this->input->post('em_description'),
                    'due_on' => $this->input->post('em_due_on'),
                    'notes' => $this->input->post('em_notes'),
                );
                $this->MainModel->editTasks($task);
                // Edit Log
                $category_id = array();
                array_push($category_id, $this->input->post('em_task_category_id'));
                $category = $this->MainModel->getCategories($category_id);
                $current_date = date("Y-m-d h:i:sa");
                $log = array(
                    'log_category' => $category[0]['name'],
                    'log_ref_num' => $this->input->post('em_task_ref_num'),
                    'log_user_n' => $data['user']['name'],
                    'log_user_e' => $data['user']['email'],
                    'action' => 'Modify',
                    'date' => $current_date
                );
                $this->MainModel->addLogs($log);
                redirect('main/category/'.$this->input->post('em_task_category_id'));
            }else{
                redirect('main');
            }
        }
        else{
            redirect('user/login');
        }
    }
    public function renewTask(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')) {
            $data['user'] = $this->UserModel->getRows(array('id' => $this->session->userdata('userID')));
            if ($this->input->post()){
                $oldTask = array(
                    'id' => $this->input->post('rm_task_id'),
                    'type' => "renew"
                );
                $this->MainModel->editTasks($oldTask);
                $task = array(
                    'user_id' => $data['user']['id'],
                    'category_id' => $this->input->post('rm_task_category_id'),
                    'ref_num' => $this->input->post('rm_task_ref_num'),
                    'desc' => $this->input->post('rm_description'),
                    'due_on' => $this->input->post('rm_due_on'),
                    'notes' => $this->input->post('rm_notes'),
                );
                $this->MainModel->addTasks($task);
                // Renew Log
                $category_id = array();
                array_push($category_id, $this->input->post('rm_task_category_id'));
                $category = $this->MainModel->getCategories($category_id);
                $current_date = date("Y-m-d h:i:sa");
                $log = array(
                    'log_category' => $category[0]['name'],
                    'log_ref_num' => $this->input->post('rm_task_ref_num'),
                    'log_user_n' => $data['user']['name'],
                    'log_user_e' => $data['user']['email'],
                    'action' => 'Renew',
                    'date' => $current_date
                );
                $this->MainModel->addLogs($log);
                redirect('main/category/'.$this->input->post('rm_task_category_id'));
            }else{
                redirect('main');
            }
        }
        else{
            redirect('user/login');
        }
    }
    public function deleteTask(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')) {
            $data['user'] = $this->UserModel->getRows(array('id' => $this->session->userdata('userID')));
            if ($this->input->post()){
                $task_id = $this->input->post('dm_task_id');
                $this->MainModel->deleteTasks($task_id);
                // Renew Log
                $category_id = array();
                array_push($category_id, $this->input->post('dm_task_category_id'));
                $category = $this->MainModel->getCategories($category_id);
                $current_date = date("Y-m-d h:i:sa");
                $log = array(
                    'log_category' => $category[0]['name'],
                    'log_ref_num' => $this->input->post('dm_task_ref_num'),
                    'log_user_n' => $data['user']['name'],
                    'log_user_e' => $data['user']['email'],
                    'action' => 'Delete',
                    'date' => $current_date
                );
                $this->MainModel->addLogs($log);
                redirect('main/category/'.$this->input->post('dm_task_category_id'));
            }else{
                redirect('main');
            }
        }
        else{
            redirect('user/login');
        }
    }

    // Cron Job
    public function cronJob(){
        date_default_timezone_set("HongKong");
        $tasks = $this->MainModel->getTasksAll();
        foreach ($tasks as $task_index => $task){
            if ($task->type != "renew"){
                $category_id = array();
                array_push($category_id, $task -> category_id);
                $category = $this->MainModel->getCategories($category_id);
                $critial = intval($category[0]->critical);
                $due_on = $task->due_on;
                $current_date = date("Y-m-d");
                $diff = date_diff(date_create($current_date), date_create($due_on));
                $diff_days = intval($diff->format("%R%a"));
                if ($diff_days > 0 && $diff_days <= $critial){
                    $user = $this->UserModel->getUserById($task->user_id);
                    $group = $this->GroupModel->getGroupById($user["group_id"]);
                    $header = $group['header'];
                    $footer = $group['footer'];
                    $body = $task->ref_num." task will be expired after ".(string)$diff_days." days.";
                    $current_time = strtotime(date("h:i:sa"));
                    $notify = strtotime($group["notifyat"]);
                    $diff_time = $current_time - $notify;
                    if ($diff_time > 0 || $diff_time < 600){
                        mail($user->email, "Critical", $body."\r\n".$footer, $header);
                    }
                }
            }

        }

    }
}