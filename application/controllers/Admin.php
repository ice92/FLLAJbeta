<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cost
 *
 * @author ice
 */
class Admin extends CI_Controller{
    public function __construct()
        {
                parent::__construct();
                $this->load->model('NewsModel');
                $this->load->model('AduanModel');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['title'] = 'Admin';
                $data['stats'] = $this->AduanModel->get_stats();
                $this->load->view('templates/header', $data);
                $this->load->view('templates/headerpage');
//                $this->load->view('news/index', $data);
                $this->load->view('pages/Admin');
                $this->load->view('templates/footer');
        }
        
}
