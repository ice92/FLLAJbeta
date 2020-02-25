<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of News
 *
 * @author ice
 */
class News extends CI_Controller{
    public function __construct()
        {
                parent::__construct();
                $this->load->model('NewsModel');
                $this->load->helper('url_helper');
                $this->load->helper('text'); // memanggil helper text
        }

        public function index($offset=0)
        {
                $databerita=$this->db->get('berita');
                $config['total_rows']=$databerita->num_rows();
                $config['base_url']= base_url(). 'news/index';
                $config['per_page']=5;
                $config['full_tag_open']="<nav aria-label='Page navigation example'>
                  <ul class='pagination pg-blue pagination-lg justify-content-center'>";
                $config['full_tag_close']="</ul> </nav>";
                $config['num_tag_open']="<li class='page-item'>";
                $config['num_tag_close']="</li>";
                $config['cur_tag_open']="<li class='page-item disabled'>
                      <a class='page-link' tabindex='-1'>";
                $config['cur_tag_close']="</a>
                    </li>";
                $config['next_tag_open']="<li class='page-item'>";
                $config['next_tag_close']="</li>";
                $config['prev_tag_open']="<li class='page-item'>";
                $config['prev_tag_close']="</li>";
                $config['first_tag_open']="<li class='page-item'>";
                $config['first_tag_close']="</li>";
                $config['last_tag_open']="<li class='page-item '>";
                $config['last_tag_close']="</li>";
                $config['attributes'] = array('class' => 'page-link');
                $this->pagination->initialize($config);
                
                $data['halaman']=$this->pagination->create_links();
                $data['offset']=$offset;
                
                
                $data['news'] = $this->NewsModel->get_news($config['per_page'],$offset);
                $data['title'] = 'Berita';

                $this->load->view('templates/header', $data);
                $this->load->view('templates/headerpage', $data);
//                $this->load->view('news/index', $data);
                $this->load->view('pages/Berita', $data);
                $this->load->view('templates/footer');
        }

        public function view($slug = NULL)
        {
                $data['news_item'] = $this->NewsModel->get_anews($slug);
                if (empty($data['news_item']))
                {
                    show_404();
                }

                $data['title'] = "ISI BERITA";

                $this->load->view('templates/header', $data);
                $this->load->view('templates/headerpage', $data);
                $this->load->view('news/view', $data);
                $this->load->view('templates/footer');
        }
}
