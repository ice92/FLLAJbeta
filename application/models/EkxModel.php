<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EkxModel
 *
 * @author ice
 */
class EkxModel extends CI_Model{
    public function __construct()
        {
                $this->load->database();
        }
        
    public function get_news($perpage,$offset)
        {
        
                $this->db->order_by('id','DESC');
                $query = $this->db->get('eksternal',$perpage,$offset);
                return $query->result_array();        
        }
        
}