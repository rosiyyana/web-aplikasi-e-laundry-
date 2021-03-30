<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->library('pdf');
		$this->load->model('kontak_model');
	}
	public function indexx()
	{
		$kontak = $this->kontak_model->listing();

		$data = array('title' 	    => 'List Feedback' ,
					  'kontak'  	=> $kontak,
					  'isi'  	    => 'admin/kontak/list'
					);
        $this->load->view('admin/layout/wrapper', $data, FALSE);

	}

	public function delete($id_kontak)
	{
		$data = array('id_kontak' => $id_kontak);
		$this->kontak_model->delete($data);
		$this->session->set_flashdata('Sukses', 'Data telah dihapus');
		redirect(base_url('admin/kontak'),'refresh');

	}


	// Halaman utama website - homepage
	public function index()
	{
		$site = $this->konfigurasi_model->listing();

		$data = array('title' 		=> 'Contact',
					  'keywords'	=> $site->keywords,
					  'deskripsi'	=> $site->deskripsi,
					  'site'		=> $site,
					  'isi'	  		=> 'kontak/list'
					);

		$this->load->view('layout/wrapper', $data, FALSE);
		// $pdf = new FPDF('P', 'mm','Letter');

	}
	// tambah user

	public function tambah()
	{
		// validasi input
		$valid = $this->form_validation;

		$valid->set_rules('name','Nama lengkap','required',
			array( 'required' => '%s Harus diisi'));

		if ($valid->run()===FALSE) {
		// end validasi

		$data = array('title' 		=> 'Contact',
					  'keywords'	=> $site->keywords,
					  'deskripsi'	=> $site->deskripsi,
					  'site'		=> $site,
					  'isi'	  		=> 'kontakk/list'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
		// masuk database
		}else{
			$i = $this->input;
			$data = array( 'name'	 => $i->post('name'),
						   'no_tlp'  => $i->post('no_tlp'),
						   'message' => $i->post('message')
						);
			$this->kontak_model->tambah($data);
			$this->session->set_flashdata('suskes','Data telah ditambah');
			redirect(base_url('kontak'),'refresh');
		}
		// end masuk database
	}
	

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */		