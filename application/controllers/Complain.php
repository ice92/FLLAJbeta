<?php 

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Complain
 *
 * @author ice
 */
class Complain extends CI_Controller{
    public function __construct()
        {
                parent::__construct();
                $this->load->model('AduanModel');
                $this->load->helper('url_helper');
                $this->load->helper('text');
        }

        public function index($offset=0)
        {
                $databerita=$this->db->get('pengaduan');
                $config['total_rows']=$databerita->num_rows();
                $config['base_url']= base_url(). 'complain/index';
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
                
                
                $data['news'] = $this->AduanModel->get_news($config['per_page'],$offset);
                $data['title'] = 'Pengaduan';
                $data['stats'] = $this->AduanModel->get_stats();
                $this->load->view('templates/header', $data);
                $this->load->view('templates/headerpage');
//                $this->load->view('news/index', $data);
                $this->load->view('pages/Pengaduan');                
                $this->load->view('templates/footer');
        }

        public function view($slug = NULL)
        {
                $data['news_item'] = $this->AduanModel->get_anews($slug);
//                if (empty($data['news_item']))
//                {
//                    show_404();
//                }

                $data['title'] = "ISI ADUAN";

                $this->load->view('templates/header', $data);
                $this->load->view('templates/headerpage', $data);
                $this->load->view('news/view2', $data);
                $this->load->view('templates/footer');
        }
        public function add(){
                $nama = $this->input->post('nama');
		$kontak = $this->input->post('kontak');
		$aduan = $this->input->post('aduan');
                $judul = $this->input->post('judul');
                $tanggal = date('Y-m-d');
                $jam = date("H:i:s");
                $seo = strtolower($aduan);
                $seo = str_replace(' ', '-', $seo);
                $sex = $this->input->post('gender');
		$data = array(
			'username' => $nama,
			'kontak' => $kontak,
			'isi_berita' => $aduan,
			'judul' => $judul,
                        'tanggal' => $tanggal,
                        'jam' => $jam,
                        'judul_seo' => $seo,
                        'gender' => $sex);
		$this->AduanModel->input_data($data,'pengaduan');
                redirect('complain/index');
		print "<script type=\"text/javascript\">alert('Terima kasih atas pengaduan anda, Aduan akan segera diverifikasi !');</script>";
                
        }
}
