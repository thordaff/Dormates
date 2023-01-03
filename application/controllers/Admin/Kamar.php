<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_model');
        $this->load->model('Kost_model');
        $this->load->model('Kamar_model');
    }

	public function index()
	{
        $data['judul'] = 'Dashboard Dormates - Tambah Kamar';
		$data['user'] = $this->Dashboard_model->sess();
		$this->load->view('admin/addkamar', $data);
	}

    public function AddKamar()
    {
        $id_user = $this->input->post('id_user');
        $no_kamar = $this->input->post('no_kamar');
        $luas_kamar = $this->input->post('luas_kamar');
        $harga_kamar = $this->input->post('harga_kamar');
		$deskripsi = $this->input->post('deskripsi');

        $data  = Array(
            'id_user' => $id_user,
            'no_kamar' => $no_kamar,
            'luas_kamar' => $luas_kamar,
            'harga_kamar' => $harga_kamar,
            'deskripsi' => $deskripsi,
        );
        $this->Kamar_model->addKamar($data );
        Redirect(Base_url('Admin/Dashboard/'));
    }

    public function EditKamar()
    {
        $id_user = $this->input->post('id_user');
        $no_kamar = $this->input->post('no_kamar');
        $luas_kamar = $this->input->post('luas_kamar');
        $harga_kamar = $this->input->post('harga_kamar');
		$deskripsi = $this->input->post('deskripsi');

        $data  = Array(
            'id_user' => $id_user,
            'no_kamar' => $no_kamar,
            'luas_kamar' => $luas_kamar,
            'harga_kamar' => $harga_kamar,
            'deskripsi' => $deskripsi,
        );
        $this->Kamar_model->addKamar($data );
        Redirect(Base_url('Admin/Dashboard/'));
    }
}
