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
    // Get Logs
    function getLogs(){
        $this->db->select('*');
        $this->db->from('log');
        $query = $this->db->get();
        return $query->result();
    }
    // Add Logs
    function addLogs($data){
        $this->db->insert('log', $data);
        $this->db->insert_id();
    }
    // Tasks
    function getTasksAll(){
        $this->db->select('*');
        $this->db->from('tasks');
        $query = $this->db->get();
        return $query->result();
    }
    function getUserTasks($user_id){
        $this->db->select('*');
        $this->db->from('tasks');
        $this->db->where('user_id', $user_id);
        $this->db->where("type !=", "renew");
        $query = $this->db->get();
        return $query->result();
    }
    function getTasks($userId, $categoryId){
        $this->db->select('*');
        $this->db->from('tasks');
        $this->db->where('user_id', $userId);
        $this->db->where('category_id', $categoryId);
        $query = $this->db->get();
        return $query->result();
    }
    function addTasks($data){
        $this->db->insert('tasks', $data);
        $this->db->insert_id();
    }
    function editTasks($data){
        $this->db->where('id', $data['id']);
        $this->db->update('tasks', $data);
    }
    function deleteTasks($id){
        $this->db->where('id', $id);
        $this->db->delete('tasks');
    }

    // Dashboard Table Text
    function getDashboardText($user_id){
        $this->db->select('*');
        $this->db->from('custom');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get();
        return $query->result();
    }
}