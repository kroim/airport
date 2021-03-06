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
        $this->load->model('ControlModel');
    }
    public function index(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->UserModel->getRows(array('id'=>$this->session->userdata('userID')));
            //load the view
            redirect('main/request');
        }else{
            redirect('user/login');
        }
    }
    public function request(){
        $data = array();
        if($this->input->post()){
            $searchData = $this->input->post();
            $id = $searchData['request-no'];
            $aircraft = array();
            if(isset($searchData['request-aircraft'])){
                $aircraft = $searchData['request-aircraft'];
            }
            $from = $searchData['request-from'];
            $to = $searchData['request-to'];
            $data['searchData'] = $this->MainModel->getRequest($id, $aircraft, $from, $to);
        }else{
            $data['searchData'] = $this->MainModel->getRequestAll();
        }
        $data['aircraftData'] = $this->MainModel->getAircraftAll();
        $data['title'] = "Request List";
        $data['airportData'] = $this->ControlModel->getAirportAll();
        $data['missionData'] = $this->MainModel->getMissionAll();
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->UserModel->getRows(array('id'=>$this->session->userdata('userID')));
            //load the view
            $this->load->view('users/header', $data);
            $this->load->view('request_view', $data);
            $this->load->view('users/footer');
        }else{
            redirect('User/login');
        }
    }
    public function mission(){
        $data = array();
        if($this->input->post()){
            $searchData = $this->input->post();
            $id = $searchData['mission-no'];
            $aircraft = array();
            if(isset($searchData['mission-aircraft'])){
                $aircraft = $searchData['mission-aircraft'];
            }
            $from = $searchData['mission-from'];
            $to = $searchData['mission-to'];
            $data['searchData'] = $this->MainModel->getMission($id, $aircraft, $from, $to);
        }else{
            $data['searchData'] = $this->MainModel->getMissionAll();
        }
        $data['aircraftData'] = $this->MainModel->getAircraftAll();
        $data['title'] = "Mission List";
        $data['airportData'] = $this->ControlModel->getAirportAll();
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->UserModel->getRows(array('id'=>$this->session->userdata('userID')));
            //load the view
            $this->load->view('users/header', $data);
            $this->load->view('mission_view', $data);
            $this->load->view('users/footer');
        }else{
            redirect('User/login');
        }
    }

    public function download_image(){
        $this->load->helper('download'); //load helper
        if($this->input->post('request_image_data') != ""){
            $filepath = $this->input->post('request_image_data');
            $filename = $this->input->post('request_image_filename');
            $file_data = file_get_contents($filepath);
            force_download($filename.".png", $file_data);
        }else{
            redirect('main/request');
        }
    }

    public function getReport(){
        if($this->input->post('get-report') == 'request'){
            $data['category'] = $this->input->post('report-category');
            $data['title'] = $this->input->post('report-title');
            $data['t_size'] = $this->input->post('report-title-size');
            $data['th_size'] = $this->input->post('report-table-header-size');
            $data['tb_size'] = $this->input->post('report-table-body-size');
            $data['switching'] = "request";
            $data['search_data'] = json_decode($this->input->post('search-data'));
            $data['airport_data'] = json_decode($this->input->post('airport-data'));
            $data['aircraft_data'] = json_decode($this->input->post('aircraft-data'));
            $data['mission_data'] = json_decode($this->input->post('mission-data'));
            $this->load->view('get_report', $data);
        }elseif ($this->input->post('get-report') == 'mission'){
            $data['category'] = $this->input->post('report-category');
            $data['title'] = $this->input->post('report-title');
            $data['t_size'] = $this->input->post('report-title-size');
            $data['th_size'] = $this->input->post('report-table-header-size');
            $data['tb_size'] = $this->input->post('report-table-body-size');
            $data['switching'] = "mission";
            $data['search_data'] = json_decode($this->input->post('search-data'));
            $data['airport_data'] = json_decode($this->input->post('airport-data'));
            $data['aircraft_data'] = json_decode($this->input->post('aircraft-data'));
            $this->load->view('get_report', $data);
        }else{
            redirect('user/login');
        }
    }
}