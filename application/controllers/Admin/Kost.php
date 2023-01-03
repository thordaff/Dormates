<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kost extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_model');
        $this->load->model('Kost_model');
    }

	public function index()
	{
        $data['judul'] = 'Dashboard Dormates - Tambah Kost';
		$data['user'] = $this->Dashboard_model->sess();
		$this->load->view('admin/addkost', $data);
	}

    public function AddKost()
    {
        $id_user = $this->input->post('id_user');
        $nama_kost = $this->input->post('nama_kost');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');

        $data  = Array(
            'id_user' => $id_user,
            'nama_kost' => $nama_kost,
            'alamat' => $alamat,
            'no_telp' => $no_telp,
        );
        $this->Kost_model->addKost($data );
        Redirect(Base_url('Admin/Dashboard/'));
    }
}
