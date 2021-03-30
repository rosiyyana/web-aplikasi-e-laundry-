<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('konfigurasi_model');
	}

	// Halaman utama website - homepage
	public function index()
	{
		$site 		= $this->konfigurasi_model->listing();

		$data = array('title' 		=> $site->namaweb.' | '.$site->tagline,
					  'keywords'	=> $site->keywords,
					  'deskripsi'	=> $site->deskripsi,
					  'site'		=> $site,
					  'isi'	  		=> 'home/slider'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */