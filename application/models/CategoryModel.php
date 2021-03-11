<?php
/**
 * Created by PhpStorm.
 * User: GaoComet
 * Date: 12/1/2017
 * Time: 8:53 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class CategoryModel extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->userTable = 'categories';
    }
    /*
     * get rows from the users table
     */
    function getRows(){
        $this->db->select('*');
        $this->db->from($this->userTable);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    function getGroupById($id){
        $this->db->select('*');
        $this->db->from($this->userTable);
        $this->db->where('id', $id);
        $query = $this->db->get();
        $result = $query->row_array();

        return $result;
    }


    public function updateRow($data = array()){

        $this->db->where('id', $data['id']);
        $this->db->update('group', $data);
    }

    public function insertRow($data = array()){
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

    function getCategories(){
        $this->db->select('*');
        $this->db->from($this->userTable);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
}