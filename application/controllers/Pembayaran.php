<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pembayaran extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('transaksi_model');
		

		// load halper Random string
		$this->load->helper('string');
	}

	
	// halaman pembayaran
	public function index()
	{
		// validasi input
		$valid = $this->form_validation;

		$valid->set_rules('jumlah','Jumlah Laundry','required',
			array( 'required' => '%s Harus diisi'));

		if ($valid->run()===FALSE) {
		// end validasi

		$data 	= array(	'title'	=> 'Pembayaran Pelanggan',
							'isi'	=> 'pembayaran/list'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
		// masuk database
		}else{
			$i = $this->input;
			$data = array( 'id_pelanggan'		=> $this->session->userdata('id_pelanggan'),
						   'id_outlet'			=> $this->session->userdata('id_outlet'),
						   'id_paket'			=> $this->session->userdata('id_paket'),
						   'kode_transaksi'		=> date('Ymd').strtoupper(random_string('alnum',5)),
						   'jumlah'				=> $i->post('jumlah'),
						   'status_bayar'		=> 'Belum',
						   'tanggal_transaksi'	=> date('Y-m-d H:i:s')
						);
			$this->transaksi_model->tambah($data);
			// End create session
			$this->session->set_flashdata('sukses','Pembayaran berhasil');
			redirect(base_url('pembayaran/sukses'),'refresh');
		}
		// end masuk database
	}

	// Pembayaran sukses
	public function sukses()
	{
		$data = array( 'title' 		=> 'Pembayaran berhasil',
					   'isi'		=> 'pembayaran/sukses'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}
}

/* End of file Pembayaran.php */
/* Location: ./application/controllers/Pembayaran.php */