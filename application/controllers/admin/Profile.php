<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('petugas_model');
		// proteksi halaman
		$this->simple_login->cek_login();
	}

	// Halaman utama dasbor
	public function index()
	{
		$petugas = $this->petugas_model->listing();

		$data = array('title' => 'Profile',
					  'petugas'  => $petugas,
					  'isi'   => 'admin/profile/list'
					);
		$this->load->view('admin/layout/wrapper_profile', $data, FALSE);
	}

	// Halaman utama dasbor
	public function profile($id_petugas)
	{
		$petugas = $this->petugas_model->detail($id_petugas);

		$data = array('title' => 'Profile',
					  'petugas'  => $petugas,
					  'isi'   => 'admin/profile/list'
					);
		$this->load->view('admin/layout/wrapper_profile', $data, FALSE);
	}
}

/* End of file Profile.php */
/* Location: ./application/controllers/admin/Profile.php */