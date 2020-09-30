<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LiveTableModel
 *
 * @author ice
 */
class LiveTableModel extends CI_Model
{
    //put your code here
    function load_data()
    {
        $this->db->order_by(id,'DESC');
        $query = $this->db->get('sample_data');
        return $query->result_array();
    }
}