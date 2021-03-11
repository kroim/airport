<?php
/**
 * Created by PhpStorm.
 * User: GaoComet
 * Date: 12/1/2017
 * Time: 8:53 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class CustomModel extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->userTable = 'custom';
    }
    /*
     * get rows from the users table
     */
    function getRows($userId){
        $this->db->select('*');
        $this->db->from($this->userTable);

        $this->db->where('user_id', $userId);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            $result = $query->row_array();
        } else {
            $data['user_id'] = $userId;
            $this->db->insert($this->userTable, $data);
            $this->db->from($this->userTable);
            $this->db->where('user_id', $userId);
            $query = $this->db->get();
            $result = $query->row_array();
        }
        return $result;
    }
    public function updateRow($data = array()){

        $this->db->where('user_id', $data['user_id']);
        $this->db->update('custom', $data);
    }

    public function insert($data = array()){
        //add created and modified data if not included
        //insert user data to users table
        $insert = $this->db->insert($this->userTable, $data);

        //return the status
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
}