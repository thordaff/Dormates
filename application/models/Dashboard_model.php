<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    function sess(){
        return $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    }
}