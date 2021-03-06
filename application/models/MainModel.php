<?php
/**
 * Created by PhpStorm.
 * User: GaoComet
 * Date: 3/2/2018
 * Time: 1:12 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class MainModel extends CI_Model{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // categories from ids
    function getCategories($ids){
        $this->db->select('*');
        $this->db->from('categories');
        $this->db->where_in('id', $ids);
        $query = $this->db->get();
        return $query->result();
    }
    // add category
    function addCategory($data){
        $this->db->insert('categories', $data);
        $this->db->insert_id();
    }
    // Get Categories
    function getAllCategories(){
        $this->db->select('*');
        $this->db->from('categories');
        $query = $this->db->get();
        return $query->result();
    }
    // edit category
    function editCategory($data){
        $this->db->where('id', $data['id']);
        $this->db->update('categories', $data);
    }
    function deleteCategory($id){
        $this->db->where('id', $id);
        $this->db->delete('categories');
    }
}