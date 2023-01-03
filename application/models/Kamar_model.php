<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kamar_model extends CI_Model
{
    function showKamar(){
        $id = $this->session->userdata('email');
        $this->db->select('kamar.id_kamar , kamar.id_user, kamar.no_kamar, kamar.luas_kamar ,kamar.harga_kamar, kamar.deskripsi, kamar.status');
        $this->db->from('kamar');
        $this->db->join('user', 'user.id_user = kamar.id_user');
        $this->db->where('email', $id);
        return $this->db->get()->result_array();
     }

    function addKamar($data)
    { 
        $this->db->insert('kamar', $data);
    }

	function deleteData($id){
        return $this->db->delete('kamar', array('id_kamar' => $id));
    }

}