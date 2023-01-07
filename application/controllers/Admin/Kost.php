<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kost extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
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
        if ($gambar=''){}else{
            $config['upload_path'] = './img-kost';
            $config['allowed_types'] = 'jpg|png';

            $this->load->library('upload',$config);
            if (!$this->upload->do_upload('gambar')){
                echo "Error uploading"; die();
            }else{
                $id_user = $this->input->post('id_user');
                $nama_kost = $this->input->post('nama_kost');
                $gambar=$this->upload->data('file_name');
                $alamat = $this->input->post('alamat');
                $no_telp = $this->input->post('no_telp');
            }
            $data  = Array( 
                'id_user' => $id_user,
                'nama_kost' => $nama_kost,
                'gambar' => $gambar,
                'alamat' => $alamat,
                'no_telp' => $no_telp,
            );
            $this->Kost_model->addKost($data );
            Redirect(Base_url('Admin/Dashboard/'));
        }
    }
}
