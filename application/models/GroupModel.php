<?php
/**
 * Created by PhpStorm.
 * User: GaoComet
 * Date: 12/1/2017
 * Time: 8:53 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class GroupModel extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->userTable = 'group';
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
    public function deleteRow($data = array()){

        $this->db->where('id', $data['id']);
        $this->db->delete('group', $data);
    }

    public function insertRow($data = array()){
        $insert = $this->db->insert($this->userTable, $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
}