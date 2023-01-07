<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
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

    public function edit()
    {
        $data['judul'] = 'Dashboard Dormates - Edit Kamar';
		$data['user'] = $this->Dashboard_model->sess();
        $data['showK'] = $this->Kamar_model->showKamar();
		$this->load->view('admin/editkamar', $data); 
    }

    public function AddKamar()
    {
        if ($gambar=''){}else{
            $config['upload_path'] = './img-kamar';
            $config['allowed_types'] = 'jpg|png';

            $this->load->library('upload',$config);
            if (!$this->upload->do_upload('gambar')){
                echo "Error uploading"; die();
            }else{
                $id_user = $this->input->post('id_user');
                $no_kamar = $this->input->post('no_kamar');
                $gambar=$this->upload->data('file_name');
                $luas_kamar = $this->input->post('luas_kamar');
                $harga_kamar = $this->input->post('harga_kamar');
                $deskripsi = $this->input->post('deskripsi');
            }
            $data  = Array(
                'id_user' => $id_user,
                'no_kamar' => $no_kamar,
                'gambar' => $gambar,
                'luas_kamar' => $luas_kamar,
                'harga_kamar' => $harga_kamar,
                'deskripsi' => $deskripsi,
            );
            $this->Kamar_model->addKamar($data);
            Redirect(Base_url('Admin/Dashboard/'));
        }
    }

    public function EditKamar()
    {
        $id_kamar = $this->input->post('id_kamar');
        $id_user = $this->input->post('id_user');
        $no_kamar = $this->input->post('no_kamar');
        $luas_kamar = $this->input->post('luas_kamar');
        $harga_kamar = $this->input->post('harga_kamar');
		$deskripsi = $this->input->post('deskripsi');

        $data  = Array(
            'id_kamar' => $id_kamar,
            'id_user' => $id_user,
            'no_kamar' => $no_kamar,
            'luas_kamar' => $luas_kamar,
            'harga_kamar' => $harga_kamar,
            'deskripsi' => $deskripsi,
        );
        $this->Kamar_model->editKamar($data );
        Redirect(Base_url('Admin/Dashboard/'));
    }
}
