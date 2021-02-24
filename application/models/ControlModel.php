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
}