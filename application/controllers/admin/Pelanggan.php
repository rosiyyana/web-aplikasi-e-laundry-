<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pelanggan_model');
		// proteksi halaman
		$this->simple_login->cek_login();
	}

	// data pelanggan
	public function index()
	{
		$pelanggan = $this->pelanggan_model->listing();

		$data = array('title' 		=> 'List pelanggan' ,
					  'pelanggan'  	=> $pelanggan,
					  'isi'  	 	=> 'admin/pelanggan/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	
	// tambah user
	public function tambah()
	{
		// validasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama_pelanggan','Nama lengkap','required',
			array( 'required' => '%s Harus diisi'));

		$valid->set_rules('email', 'Email','required|min_length[5]|max_length[32]|is_unique[pelanggan.email]',
			array( 'required'   => '%s Harus diisi',
				   'min_length' => '%s Minimal 5 karakter',
				   'max_length' => '%s Maksimal 32 karakter',
				   'is_unique'  => '%s Sudah Ada, Silahkan Buat email Baru'
				));

		$valid->set_rules('password','Password','required',
			array( 'required' => '%s Harus diisi'));

		if ($valid->run()===FALSE) {
		// end validasi

		$data = array('title' => 'Add pelanggan',
					  'isi'   => 'admin/pelanggan/tambah'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// masuk database
		}else{
			$i = $this->input;
			$data = array( 'nama_pelanggan'	=> $i->post('nama_pelanggan'),
						   'email'   		=> $i->post('email'),
						   'password'   	=> SHA1($i->post('password')),
						   'telepon'		=> $i->post('telepon'),
						   'alamat'			=> $i->post('alamat'),
						   'level'			=> $i->post('level')
						);
			$this->pelanggan_model->tambah($data);
			$this->session->set_flashdata('suskes','Data telah ditambah');
			redirect(base_url('admin/pelanggan'),'refresh');
		}
		// end masuk database
	}

// edit kelas
	public function edit($id_pelanggan)
	{
		$pelanggan = $this->pelanggan_model->detail($id_pelanggan);

		// validasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama_pelanggan','Nama lengkap','required',
			array( 'required' => '%s Harus diisi'));

		$valid->set_rules('password','Password','required',
			array( 'required' => '%s Harus diisi'));

		if ($valid->run()===FALSE) {
		// end validasi

		$data = array('title' 	=> 'Edit pelanggan' ,
					  'pelanggan' => $pelanggan,
					  'isi'   	=> 'admin/pelanggan/edit'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// masuk database
		}else{
			$i = $this->input;
			$data = array( 'id_pelanggan'    	=> $id_pelanggan,
						   'nama_pelanggan'		=> $i->post('nama_pelanggan'),
						   'email'   			=> $i->post('email'),
						   'password'   		=> SHA1($i->post('password')),
						   'telepon'			=> $i->post('telepon'),
						   'alamat'				=> $i->post('alamat'),
						   'level'				=> $i->post('level')
						);
			$this->pelanggan_model->edit($data);
			$this->session->set_flashdata('sukses','Data telah diedit');
			redirect(base_url('admin/pelanggan'),'refresh');
		}
		// end masuk database
	}

	public function delete($id_pelanggan)
	{
		$data = array('id_pelanggan' => $id_pelanggan);
		$this->pelanggan_model->delete($data);
		$this->session->set_flashdata('Sukses', 'Data telah dihapus');
		redirect(base_url('admin/pelanggan'),'refresh');
	}
}

/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */