<?php
/**
 * Created by PhpStorm.
 * User: GaoComet
 * Date: 12/1/2017
 * Time: 8:53 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class UserModel extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->userTable = 'users';
    }
    /*
     * get rows from the users table
     */
    function getRows($param){
        $this->db->select('*');
        $this->db->from($this->userTable);

        // fetch data by conditions

        if(array_key_exists("conditions", $param)){

            foreach ($param['conditions'] as $key => $value){
                $this->db->where($key, $value);
            }
        }
        if (array_key_exists("id", $param)){
            $this->db->where('id', $param['id']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            // set start and limit
            if(array_key_exists("start", $param) && array_key_exists("limit", $param)){
                $this->db->limit($param['limit'], $param['start']);
            }elseif (!array_key_exists("start", $param) && array_key_exists("limit", $param)){
                $this->db->limit($param['limit']);
            }
            $query = $this->db->get();
            if(array_key_exists("returnType", $param) && $param['returnType'] == 'count'){
                $result = $query->num_rows();
            }elseif (array_key_exists("returnType", $param) && $param['returnType'] == 'single'){
                $result = ($query->num_rows() > 0)?$query->row_array():false;
            }else{
                $result = ($query->num_rows() > 0)?$query->result_array():false;
            }
        }
        // return fetched data
        return $result;
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
    public function updateRow($data = array()){
        $this->db->where('id', $data['id']);
        $this->db->update('users', $data);
    }
    function getUsers(){
        $this->db->select('*');
        $this->db->from($this->userTable);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    function updateUsers($group_id, $user_ids){
        $this->db->where('group_id', $group_id);
        $this->db->update('users', ['group_id' => -1]);
        if (sizeof($user_ids) != 0){
            $this->db->where_in('id', $user_ids);
            $this->db->update('users', ['group_id' => $group_id]);
        }
    }
    function deleteUserGroup($group_id){
        $this->db->where('group_id', $group_id);
        $this->db->update('users', ['group_id' => -1]);
    }

    function getUserById($id){
        $this->db->select('*');
        $this->db->from($this->userTable);
        $this->db->where('id', $id);
        $query = $this->db->get();
        $result = $query->row_array();
        return $result;
    }

}