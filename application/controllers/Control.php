<?php
/**
 * Created by PhpStorm.
 * User: GaoComet
 * Date: 12/4/2017
 * Time: 8:14 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->database();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
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
        if ($userInfo['permission'] == 'admin' || $userInfo['permission'] == 'dispatcher'){
            $this->load->view('control/control_header', $data);
            $this->load->view('control/control_main');
            $this->load->view('users/footer');
        }else{
            redirect('User/login');
        }
    }
    // Request Management
    function control_request(){
        $userInfo = $this->UserModel->getRows(array('id'=>$this->session->userdata('userID')));
        $data['user'] = $userInfo;
        $data['aircraft'] = $this->ControlModel->getAircraftAll();
        $data['airport'] = $this->ControlModel->getAirportAll();
        if($this->input->post()){
            $id = $this->input->post("search-request-m");
            if($id == "") redirect('control/control_request');
            else{
                $data['request'] = $this->ControlModel->getRequest($id);
                $this->load->view('control/control_header', $data);
                $this->load->view('control/control_request', $data);
                $this->load->view('users/footer');
            }
        }else{
            $data['request'] = $this->ControlModel->getRequestAll();
            if ($userInfo['permission'] == 'admin' || $userInfo['permission'] == 'dispatcher'){
                $this->load->view('control/control_header', $data);
                $this->load->view('control/control_request', $data);
                $this->load->view('users/footer');
            }else{
                redirect('User/login');
            }
        }
    }
    function add_request(){
        $config = array(
            'upload_path' => "./uploads/",
            'allowed_types' => "gif|jpg|png|jpeg|pdf",
            'overwrite' => TRUE,
            'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height' => "768",
            'max_width' => "1024"
        );
        $this->load->library('upload', $config);
        if($this->input->post()){
            if ( ! $this->input->post('add-request-image'))
            {
                $error = array('error' => $this->upload->display_errors());
                var_dump($error);
            }
            else
            {
                $data = array('upload_data' => $this->upload->data());
                var_dump($data);
            }
        }else{
            var_dump("No Post");
        }
    }
    function edit_request(){

    }
    function delete_request(){

    }
    // Mission Management
    function control_mission(){
        $userInfo = $this->UserModel->getRows(array('id'=>$this->session->userdata('userID')));
        $data['user'] = $userInfo;
        if($this->input->post()){
            $id = $this->input->post("search-mission-m");
            if($id == "") redirect('control/control_mission');
            else{
                $data['mission'] = $this->ControlModel->getMission($id);
                $this->load->view('control/control_header', $data);
                $this->load->view('control/control_mission', $data);
                $this->load->view('users/footer');
            }
        }else{
            $data['mission'] = $this->ControlModel->getMissionAll();
            if ($userInfo['permission'] == 'admin' || $userInfo['permission'] == 'dispatcher'){
                $this->load->view('control/control_header', $data);
                $this->load->view('control/control_mission', $data);
                $this->load->view('users/footer');
            }else{
                redirect('User/login');
            }
        }
    }
    function add_mission(){

    }
    function edit_mission(){

    }
    function delete_mission(){

    }
    // Aircraft Management
    function control_aircraft(){
        $userInfo = $this->UserModel->getRows(array('id'=>$this->session->userdata('userID')));
        $data['aircraft'] = $this->ControlModel->getAircraftAll();
        $data['user'] = $userInfo;
        if ($userInfo['permission'] == 'admin' || $userInfo['permission'] == 'dispatcher'){
            $this->load->view('control/control_header', $data);
            $this->load->view('control/control_aircraft', $data);
            $this->load->view('users/footer');
        }else{
            redirect('User/login');
        }
    }
    function add_aircraft(){
        if($this->input->post()){
            $aircraft = array(
                'aircraft_name' => $this->input->post('add-aircraft-name'),
                'aircraft_model' => $this->input->post('add-aircraft-model')
            );
            $this->ControlModel->addAircraft($aircraft);
            redirect('control/control_aircraft');
        }else{
            redirect('control/control_aircraft');
        }
    }
    function edit_aircraft(){
        if($this->input->post()){
            $aircraft = array(
                'aircraft_id' => $this->input->post('edit-aircraft-id'),
                'aircraft_name' => $this->input->post('edit-aircraft-name'),
                'aircraft_model' => $this->input->post('edit-aircraft-model')
            );
            $this->ControlModel->editAircraft($aircraft);
            redirect('control/control_aircraft');
        }else{
            redirect('control/control_aircraft');
        }
    }
    function delete_aircraft(){
        if($this->input->post()){
            $aircraft_id = $this->input->post('delete-aircraft-id');
            $this->ControlModel->deleteAircraft($aircraft_id);
            redirect('control/control_aircraft');
        }else{
            redirect('control/control_aircraft');
        }
    }
    // Airport Management
    function control_airport(){
        $userInfo = $this->UserModel->getRows(array('id'=>$this->session->userdata('userID')));
        $data['airport'] = $this->ControlModel->getAirportAll();
        $data['user'] = $userInfo;
        if ($userInfo['permission'] == 'admin' || $userInfo['permission'] == 'dispatcher'){
            $this->load->view('control/control_header', $data);
            $this->load->view('control/control_airport', $data);
            $this->load->view('users/footer');
        }else{
            redirect('User/login');
        }
    }
    function add_airport(){
        if($this->input->post()){
            $airport = array(
                'airport_icao' => $this->input->post('add-airport-icao'),
                'airport_arabic' => $this->input->post('add-airport-arabic'),
                'airport_city' => $this->input->post('add-airport-city')
            );
            $this->ControlModel->addAirport($airport);
            redirect('control/control_airport');
        }else{
            redirect('control/control_airport');
        }
    }
    function edit_airport(){
        if($this->input->post()){
            $airport = array(
                'airport_id' => $this->input->post('edit-airport-id'),
                'airport_icao' => $this->input->post('edit-airport-icao'),
                'airport_arabic' => $this->input->post('edit-airport-arabic'),
                'airport_city' => $this->input->post('edit-airport-city')
            );
            $this->ControlModel->editAirport($airport);
            redirect('control/control_airport');
        }else{
            redirect('control/control_airport');
        }
    }
    function delete_airport(){
        if($this->input->post()){
            $airport_id = $this->input->post('delete-airport-id');
            $this->ControlModel->deleteAirport($airport_id);
            redirect('control/control_airport');
        }else{
            redirect('control/control_airport');
        }
    }
}