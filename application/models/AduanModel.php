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
class AduanModel extends CI_Model{
    public function __construct()
        {
                $this->load->database();
        }
        
    public function get_news($perpage,$offset)
        {
                $this->db->order_by('id_berita','DESC');
                $query = $this->db->get_where('pengaduan',array('active' => 'Y'),$perpage,$offset);
                return $query->result_array();        
        }
    public function get_anews($slug)
        {
                $query = $this->db->get_where('pengaduan',array('id_berita' => $slug));
                return $query->row_array();        
        }
    public function get_stats(){
        $query1 = $this->db->query('SELECT COUNT(id_berita) AS totaladuan FROM pengaduan WHERE active="Y" AND MONTH(tanggal)=   MONTH(CURRENT_DATE()-INTERVAL 1 MONTH) AND YEAR(tanggal) = YEAR(CURRENT_DATE()-INTERVAL 1 MONTH);');
        $stats['totalm']=$query1->row()->totaladuan;
        $query1 = $this->db->query('SELECT COUNT(id_berita) AS totaladuan FROM pengaduan WHERE active="Y";');
        $stats['total']=$query1->row()->totaladuan;
        $query1 = $this->db->query('SELECT COUNT(id_berita) AS totaladuan FROM pengaduan WHERE active="Y" AND gender="P";');
        $stats['totalp']=$query1->row()->totaladuan;
        $query1 = $this->db->query('SELECT COUNT(id_berita) AS totaladuan FROM pengaduan WHERE active="Y" AND gender="L";');
        $stats['totall']=$query1->row()->totaladuan;
        $query1 = $this->db->query('SELECT COUNT(id_berita) AS totaladuan FROM pengaduan WHERE active="Y" AND gender="U";');
        $stats['totalu']=$query1->row()->totaladuan;
        $query1 = $this->db->query('SELECT COUNT(id_berita) AS totaladuan FROM pengaduan WHERE active="Y" AND MONTH(tanggal)=   MONTH(CURRENT_DATE()) AND YEAR(tanggal) = YEAR(CURRENT_DATE());');
        $stats['totali']=$query1->row()->totaladuan;
        return $stats;
    }
    function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}
