<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_model');
        $this->load->model('Kost_model');
        $this->load->model('Kamar_model');
    }

	public function index()
	{
        $data['judul'] = 'Dashboard Dormates - Tempat nyaman memesan tempat tinggal';
		$data['user'] = $this->Dashboard_model->sess();
		$data['show'] = $this->Kost_model->showKostUser();
		$data['showK'] = $this->Kamar_model->showKamar();
		$this->load->view('admin/dashboard', $data);
	}

	public function delete($id)
	{
		$this->Kamar_model->deleteData($id);
		redirect(base_url('Admin/Dashboard/'));
	}
}
