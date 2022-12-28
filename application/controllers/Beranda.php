<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{
        $data['judul'] = 'Dormates - Tempat nyaman memesan tempat tinggal';
		$this->load->view('beranda', $data);
	}
}
