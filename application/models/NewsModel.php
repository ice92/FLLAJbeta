<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewsModel
 * Model untuk akses database tabel berita
 * @author ice
 */
class NewsModel extends CI_Model{
    public function __construct()
        {
                $this->load->database();
        }
        
    public function get_news($perpage,$offset)
        {
        
                $this->db->order_by('id_berita','DESC');
                $query = $this->db->get('berita',$perpage,$offset);
                return $query->result_array();        
        }
        public function get_anews($slug)
        {
                $query = $this->db->get_where('berita',array('id_berita' => $slug));
                return $query->row_array();        
        }
}
