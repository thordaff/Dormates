<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kost extends CI_Controller {

	public function index()
	{
        $this->load->model('Kost_model');
        $data['show'] = $this->Kost_model->showAllKost();
        $data['judul']='Dormates - Cari Kost ';
        $this->load->view('kost', $data);
	}
}
