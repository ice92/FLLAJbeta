<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pages
 * Controller Pages berisi fungsi2 dalam mengakses page dalam website
 * @author ice
 */
class Pages extends CI_Controller{
     public function __construct()
        {
                parent::__construct();
                $this->load->model('NewsModel');
                $this->load->model('EkxModel');
                $this->load->model('AduanModel');
                $this->load->helper('url_helper');
                $this->load->helper('text'); // memanggil helper text
        }
    public function view($page='home'){
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        $data['news'] = $this->NewsModel->get_news(7,0);
        $data['eks']=$this->EkxModel->get_news(7,0);
        $data['aduan']=$this->AduanModel->get_news(8,0);
        $data['stats'] = $this->AduanModel->get_stats();
//        print "<script type=\"text/javascript\">alert('Website FLLAJ Dalam Tahap Maintenance, Silahkan email ke aduan@fllajlombokbaratkab.or.id untuk pengaduan');</script>";
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
}
