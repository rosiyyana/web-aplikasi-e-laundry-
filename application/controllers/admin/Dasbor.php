<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		// proteksi halaman
		$this->simple_login->cek_login();
	}

	// Halaman utama dasbor
	public function index()
	{
		$data = array('title' => 'Dashboard',
					  'isi'   => 'admin/dasbor/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function Googlemaps(){
		$this->load->library('googlemaps');
         
        $config['center'] = '-6.13952, 106.92075';//Coordinate tengah peta
        $config['zoom'] = 'auto';
        $this->googlemaps->initialize($config);
         
        $marker = array();
        $marker['position'] = '-6.13952, 106.92075';//Posisi marker (itu tuh yang merah2 lancip itu loh :-p)
        $this->googlemaps->add_marker($marker);
         
        $data['map'] = $this->googlemaps->create_map();
         
        $this->load->view('admin/dasbor/', $data);
		

	}
}

/* End of file Dasbor.php */
/* Location: ./application/controllers/admin/Dasbor.php */