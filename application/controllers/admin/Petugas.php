<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('petugas_model');
		// proteksi halaman
		$this->simple_login->cek_login();
	}

	// data petugas
	public function index()
	{ 
		$petugas = $this->petugas_model->listing();

		$data = array('title' 		=> 'List User' ,
					  'petugas'  	=> $petugas,
					  'isi'  	 	=> 'admin/petugas/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}


	// tambah user
	public function tambah()
	{
		// validasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama_petugas','Nama lengkap','required',
			array( 'required' => '%s Harus diisi'));

		$valid->set_rules('username', 'Username','required|min_length[5]|max_length[32]|is_unique[petugas.username]',
			array( 'required'   => '%s Harus diisi',
				   'min_length' => '%s Minimal 5 karakter',
				   'max_length' => '%s Maksimal 32 karakter',
				   'is_unique'  => '%s Sudah Ada, Silahkan Buat Username Baru'
				));

		$valid->set_rules('password','Password','required',
			array( 'required' => '%s Harus diisi'));

		if ($valid->run()===FALSE) {
		// end validasi

		$data = array('title' => 'Add User',
					  'isi'   => 'admin/petugas/tambah'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// masuk database
		}else{
			$i = $this->input;
			$data = array( 'nama_petugas'	=> $i->post('nama_petugas'),
						   'username'   	=> $i->post('username'),
						   'password'   	=> SHA1($i->post('password')),
						   'level'			=> $i->post('level')
						);
			$this->petugas_model->tambah($data);
			$this->session->set_flashdata('suskes','Data telah ditambah');
			redirect(base_url('admin/petugas'),'refresh');
		}
		// end masuk database
	}

// edit kelas
	public function edit($id_petugas)
	{
		$petugas = $this->petugas_model->detail($id_petugas);

		// validasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama_petugas','Nama lengkap','required',
			array( 'required' => '%s Harus diisi'));

		$valid->set_rules('password','Password','required',
			array( 'required' => '%s Harus diisi'));

		if ($valid->run()===FALSE) {
		// end validasi

		$data = array('title' 	=> 'Edit User' ,
					  'petugas' => $petugas,
					  'isi'   	=> 'admin/petugas/edit'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// masuk database
		}else{
			$i = $this->input;
			$data = array( 'id_petugas'    	=> $id_petugas,
						   'nama_petugas'	=> $i->post('nama_petugas'),
						   'username'   	=> $i->post('username'),
						   'password'   	=> SHA1($i->post('password')),
						   'level'			=> $i->post('level')
						);
			$this->petugas_model->edit($data);
			$this->session->set_flashdata('sukses','Data telah diedit');
			redirect(base_url('admin/petugas'),'refresh');
		}
		// end masuk database
	}

	public function delete($id_petugas)
	{
		$data = array('id_petugas' => $id_petugas);
		$this->petugas_model->delete($data);
		$this->session->set_flashdata('Sukses', 'Data telah dihapus');
		redirect(base_url('admin/petugas'),'refresh');
	}
}

/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */