<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kost_model extends CI_Model
{
    function showKostUser(){
        $id = $this->session->userdata('email');
        $this->db->select('kost.nama_kost, kost.alamat, kost.no_telp ,user.id_user');
        $this->db->from('kost');
        $this->db->join('user', 'kost.id_user = user.id_user');
        $this->db->where('email', $id);
        return $this->db->get()->result_array();
     }

    function addKost($data)
    { 
        $this->db->insert('kost', $data);
    }
}