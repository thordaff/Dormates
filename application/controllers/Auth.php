<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
        $data['judul'] = 'Dormates - Login';
		$this->load->view('auth/login', $data);
	}

	public function register()
	{
        $data['judul'] = 'Dormates - Register';
		$this->load->view('auth/register', $data);
	}
}
