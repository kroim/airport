<?php
/**
 * Created by PhpStorm.
 * User: GaoComet
 * Date: 12/4/2017
 * Time: 8:18 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlModel extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('MainModel');
    }

    // Aircraft Database Management
    function getAircraftAll(){
        $this->db->select('*');
        $this->db->from('aircraft');
        $query = $this->db->get();
        return $query->result();
    }
    function addAircraft($data){
        $this->db->insert('aircraft', $data);
        $this->db->insert_id();
    }
    function editAircraft($data){
        $this->db->where('aircraft_id', $data['aircraft_id']);
        $this->db->update('aircraft', $data);
    }
    function deleteAircraft($id){
        $this->db->where('aircraft_id', $id);
        $this->db->delete('aircraft');
    }

    // Airport Database Management
    function getAirportAll(){
        $this->db->select('*');
        $this->db->from('airport');
        $query = $this->db->get();
        return $query->result();
    }
    function addAirport($data){
        $this->db->insert('airport', $data);
        $this->db->insert_id();
    }
    function editAirport($data){
        $this->db->where('airport_id', $data['airport_id']);
        $this->db->update('airport', $data);
    }
    function deleteAirport($id){
        $this->db->where('airport_id', $id);
        $this->db->delete('airport');
    }
    // Request Database Management
    function getRequestAll(){
        $this->db->select('*');
        $this->db->from('request');
        $query = $this->db->get();
        return $query->result();
    }
    function getRequest($id){
        $this->db->select('*');
        $this->db->from('request');
        $this->db->where('request_id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    // Mission Database Management
    function getMissionAll(){
        $this->db->select('*');
        $this->db->from('mission');
        $query = $this->db->get();
        return $query->result();
    }
    function getMission($id){
        $this->db->select('*');
        $this->db->from('mission');
        $this->db->where('mission_request_no', $id);
        $query = $this->db->get();
        return $query->result();
    }
}