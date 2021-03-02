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
        $data['title'] = "Request Management";
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
            'allowed_types' => "*",
            'overwrite' => TRUE,
            'file_name' => time()
        );
        $this->load->library('upload', $config);
        if($this->upload->do_upload('add-request-image')){
            $filename = 'uploads/'.$this->upload->data()['file_name'];
            $request = array(
                'aircraft' => $this->input->post('add-request-aircraft-line-m'),
                'from' => $this->input->post('add-request-from-m'),
                'to' => $this->input->post('add-request-to-m'),
                'airport' => $this->input->post('add-request-airport-line-m-en'),
                'airport_ar' => $this->input->post('add-request-airport-line-m-ar'),
                'purpose' => $this->input->post('add-request-purpose-m-en'),
                'purpose_ar' => $this->input->post('add-request-purpose-m-ar'),
                'image' => $filename
            );
//            var_dump($request);
            $this->ControlModel->addRequest($request);
        }else{
            $request = array(
                'aircraft' => $this->input->post('add-request-aircraft-line-m'),
                'from' => $this->input->post('add-request-from-m'),
                'to' => $this->input->post('add-request-to-m'),
                'airport' => $this->input->post('add-request-airport-line-m-en'),
                'airport_ar' => $this->input->post('add-request-airport-line-m-ar'),
                'purpose' => $this->input->post('add-request-purpose-m-en'),
                'purpose_ar' => $this->input->post('add-request-purpose-m-ar')
            );
//            var_dump($this->upload->display_errors());
//            var_dump($request);
            $this->ControlModel->addRequest($request);
        }
        redirect('control/control_request');
    }
    function edit_request(){
        $config = array(
            'upload_path' => "./uploads/",
            'allowed_types' => "*",
            'overwrite' => TRUE,
            'file_name' => time()
        );
        $this->load->library('upload', $config);
        $id = $this->input->post('origin-request-id');
        if($this->upload->do_upload('edit-request-image')){
            $filename = 'uploads/'.$this->upload->data()['file_name'];
            $request = array(
                'request_id' => $this->input->post('edit-request-id-m'),
                'aircraft' => $this->input->post('edit-request-aircraft-line-m'),
                'from' => $this->input->post('edit-request-from-m'),
                'to' => $this->input->post('edit-request-to-m'),
                'airport' => $this->input->post('edit-request-airport-line-m-en'),
                'airport_ar' => $this->input->post('edit-request-airport-line-m-ar'),
                'purpose' => $this->input->post('edit-request-purpose-m-en'),
                'purpose_ar' => $this->input->post('edit-request-purpose-m-ar'),
                'image' => $filename
            );
//            var_dump($request);
            $edit_res = $this->ControlModel->editRequest($id, $request);
            var_dump($edit_res);
        }else{
            $request = array(
                'request_id' => $this->input->post('edit-request-id-m'),
                'aircraft' => $this->input->post('edit-request-aircraft-line-m'),
                'from' => $this->input->post('edit-request-from-m'),
                'to' => $this->input->post('edit-request-to-m'),
                'airport' => $this->input->post('edit-request-airport-line-m-en'),
                'airport_ar' => $this->input->post('edit-request-airport-line-m-ar'),
                'purpose' => $this->input->post('edit-request-purpose-m-en'),
                'purpose_ar' => $this->input->post('edit-request-purpose-m-ar')
            );
//            var_dump($this->upload->display_errors());
//            var_dump($request);
            $edit_res = $this->ControlModel->editRequest($id, $request);
            var_dump($edit_res);
        }
        redirect('control/control_request');
    }
    function delete_request(){
        if($this->input->post()){
            $id = $this->input->post('delete-request-id');
            $this->ControlModel->deleteRequest($id);
            redirect('control/control_request');
        }else{
            redirect('control/control_request');
        }
    }

    // Mission Management
    function control_mission(){
        $userInfo = $this->UserModel->getRows(array('id'=>$this->session->userdata('userID')));
        $data['user'] = $userInfo;
        $data['title'] = "Mission Management";
        $data['request'] = $this->ControlModel->getRequestAll();
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
        if($this->input->post()){
            $mission =  array(
                'mission_request_no' => $this->input->post('add-mission-request-no'),
                'aircraft_name' => $this->input->post('add-mission-aircraft-name'),
                'airport_name' => $this->input->post('add-mission-airport-en-name'),
                'airport_ar_name' => $this->input->post('add-mission-airport-ar-name'),
                'date' => $this->input->post('add-mission-date'),
                'hours' => $this->input->post('add-mission-hours'),
                'cycles' => $this->input->post('add-mission-cycles'),
                'purpose_en' => $this->input->post('add-mission-purpose-en'),
                'purpose_ar' => $this->input->post('add-mission-purpose-ar'),
                'notes' => $this->input->post('add-mission-notes'),
            );
            $this->ControlModel->addMission($mission);
            redirect('control/control_mission');
        }else{
            redirect('control/control_mission');
        }
    }
    function edit_mission(){
        if($this->input->post()){
            $mission =  array(
                'mission_id' => $this->input->post('edit-mission-id'),
                'mission_request_no' => $this->input->post('edit-mission-request-no'),
                'aircraft_name' => $this->input->post('edit-mission-aircraft-name'),
                'airport_name' => $this->input->post('edit-mission-airport-en-name'),
                'airport_ar_name' => $this->input->post('edit-mission-airport-ar-name'),
                'date' => $this->input->post('edit-mission-date'),
                'hours' => $this->input->post('edit-mission-hours'),
                'cycles' => $this->input->post('edit-mission-cycles'),
                'purpose_en' => $this->input->post('edit-mission-purpose-en'),
                'purpose_ar' => $this->input->post('edit-mission-purpose-ar'),
                'notes' => $this->input->post('edit-mission-notes')
            );
            $this->ControlModel->editMission($mission);
            redirect('control/control_mission');
        }else{
            redirect('control/control_mission');
        }
    }
    function delete_mission(){
        if($this->input->post()){
            $id = $this->input->post('delete-mission-id');
            $this->ControlModel->deleteMission($id);
            redirect('control/control_mission');
        }else{
            redirect('control/control_mission');
        }
    }
    // Aircraft Management
    function control_aircraft(){
        $userInfo = $this->UserModel->getRows(array('id'=>$this->session->userdata('userID')));
        $data['aircraft'] = $this->ControlModel->getAircraftAll();
        $data['user'] = $userInfo;
        $data['title'] = "Aircraft Management";
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
        $data['title'] = "Airport Management";
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