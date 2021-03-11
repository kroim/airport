<?php
/**
 * Created by PhpStorm.
 * User: GaoComet
 * Date: 3/9/2018
 * Time: 8:53 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');
Class Upload extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->library('docxclass');
        $this->load->helper(array('form', 'url'));
        $this->load->model('UserModel');
        $this->load->model('MainModel');
        $this->load->model('CustomModel');
        $this->load->model('GroupModel');
        $this->load->model('CategoryModel');
    }
    public function getFiles(){
        $task_id = $this->input->post('task_id');
        $files = unserialize($this->MainModel->getTaskById($task_id)[0]->files);
        if ($files == false){
            echo false;
        }else{
            echo json_encode($files);
        }
    }
    public function saveFile($file, $id){
        $file_data = array();
        $files = unserialize($this->MainModel->getTaskById($id)[0]->files);
        if ($files == false){
            array_push($file_data, $file);
        }else if(in_array($file, $files)){
            $file_data = $files;
        }else{
            array_push($files, $file);
            $file_data = $files;
        }
        $data = array(
            'id' => $id,
            'files' => serialize($file_data)
        );
        $this->MainModel->editTasks($data);
    }
    public function delete_files(){
        if ($this->input->post('files')){
            $data = $this->input->post('files');
            $total = json_decode($data);
            $task_id = $total[0]->id;
            $files = unserialize($this->MainModel->getTaskById($task_id)[0]->files);
            $new_arr = array();
            $final_arr = array();
            foreach ($total as $index=>$item){
                $file = "upload/".$item->name;
                array_push($new_arr, $file);
            }
            foreach ($files as $file){
                if(!in_array($file, $new_arr)) array_push($final_arr, $file);
            }
            $updateData = array(
                'id'=>$task_id,
                'files'=>serialize($final_arr)
            );
            $this->MainModel->editTasks($updateData);
        }
    }
    public function index(){
        if ( 0 < $_FILES['file']['error'] ) {
            echo 'Error: ' . $_FILES['file']['error'] . '<br>';
        }
        else {
            $file_path = 'upload/' . $_FILES['file']['name'];
            $full_path = realpath($file_path);
            move_uploaded_file($_FILES['file']['tmp_name'], $file_path);
            $task_id = $this->input->post('task_id');
            $this->saveFile($file_path, $task_id);
            $extension_array = explode(".",$_FILES['file']['name']);
            $extension = end($extension_array);
            echo $_FILES['file']['name'];
        }
    }
    public function load_file(){
        if(isset($_FILES["attach_file"]["name"]))
        {
            $config['upload_path'] = './upload/';
            $config['allowed_types'] = 'docx|doc|txt|jpg|jpeg|png|gif|pdf';
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('attach_file'))
            {
                echo $this->upload->display_errors();
            }
            else
            {
                $data = $this->upload->data();
                rename($data['full_path'], $data['file_path'].$data['orig_name']);
                echo "upload/".$data['orig_name'];
            }
        }
    }
}