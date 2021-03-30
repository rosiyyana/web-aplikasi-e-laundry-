<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {

	//load model 
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pelanggan_model');
		// halaman ini proteksi dengan simple_pelanggan => check login
		$this->simple_pelanggan->cek_login();
	}

	public function index()
	{
		// ambil data login id_pelanggan dari SESSION
		$id_pelanggan = $this->session->userdata('id_pelanggan');
		$data = array(	'title'			=> 'Halaman Dashboard pelanggan',
						'isi'			=> 'dasbor/list'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Dasbor.php */
/* Location: ./application/controllers/Dasbor.php */