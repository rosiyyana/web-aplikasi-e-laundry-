<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pelanggan_model');
		$this->load->model('paket_model');
		$this->load->model('outlet_model');
	}
	// data paket
	
	public function index()
	{
		// ambil data login id_pelanggan dari SESSION
		$id_pelanggan = $this->session->userdata('id_pelanggan');
		$data = array(	'title'		=> 'Halaman Dashboard pelanggan',
						'isi'		=> 'dasbor/pesan'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	public function tambah()
	{
		$pelanggan 	= $this->pelanggan_model->listing();
		$outlet 	= $this->outlet_model->listing();
		$paket 		= $this->paket_model->listing(); 

		$valid->set_rules('nama_paket','Nama lengkap','required',
			array( 'required' => '%s Harus diisi'));
		
		if ($valid->run()===FALSE) {

		$data = array('title' 	 	=> 'Add paket',
					  'pelanggan'	=> $pelanggan,
					  'outlet'	 	=> $outlet,
					  'paket'	 	=> $paket,
					  'isi'   	 	=> 'dasbor/pesan'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// masuk database
		}else{
			$i = $this->input;
			$data = array( 'id_pelanggan'	=> $this->session->userdata('id_pelanggan'),
						   'id_outlet'		=> $i->post('id_outlet'),
						   'jenis_paket'   	=> $i->post('jenis_paket'),
						   'harga'			=> $i->post('harga')
						);
			$this->paket_model->tambah($data);
			$this->session->set_flashdata('suskes','Data telah ditambah');
			redirect(base_url('dasbor/list'),'refresh');
		}
		// end masuk database
	}

	// edit kelas
	public function edit($id_paket)
	{
		$paket = $this->paket_model->detail($id_paket);
		$pelanggan = $this->pelanggan_model->listing();
		$outlet = $this->outlet_model->listing();

		// validasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama_paket','Nama lengkap','required',
			array( 'required' => '%s Harus diisi'));
		
		if ($valid->run()===FALSE) {
		// end validasi

		$data = array('title' 	 	=> 'Edit paket',
					  'outlet'	 	=> $outlet,
					  'paket'	 	=> $paket,
					  'pelanggan'	=> $pelanggan,
					  'isi'   	 	=> 'admin/paket/edit'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// masuk database
		}else{
			$i = $this->input;
			$data = array( 'id_paket'    	=> $id_paket,
						   'pelanggan'		=> $i->post('id_pelanggan'),
						   'id_outlet'		=> $i->post('id_outlet'),
						   'nama_paket'		=> $i->post('nama_paket'),
						   'jenis_paket'   	=> $i->post('jenis_paket'),
						   'harga'			=> $i->post('harga')
						);
			$this->paket_model->edit($data);
			$this->session->set_flashdata('sukses','Data telah diedit');
			redirect(base_url('admin/paket'),'refresh');
		}
		// end masuk database
	}

	public function delete($id_paket)
	{
		$data = array('id_paket' => $id_paket);
		$this->paket_model->delete($data);
		$this->session->set_flashdata('Sukses', 'Data telah dihapus');
		redirect(base_url('admin/paket'),'refresh');
	}
}

/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */