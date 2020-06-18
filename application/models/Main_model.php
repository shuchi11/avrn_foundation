<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main_model extends CI_Model{
    public function get_news()
    {
        $querry=$this->db->get('services');
        if($querry->num_rows()>0)
        {
            return $querry->result();
        }
    }
}