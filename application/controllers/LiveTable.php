<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LiveTable
 *
 * @author ice
 */
class LiveTable extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('LiveTableModel');
    }
    public function index(){
        $this->load->view('LiveTable');
    }
    public function load_data(){
        $data = $this->LiveTableModel->load_data();
        echo json_encode($data);
    }
}
