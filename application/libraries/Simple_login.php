<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login
{
	protected $CI;

	public function __construct()
	{
        $this->CI =& get_instance();
        // load data model user
        $this->CI->load->model('petugas_model');
	}

	// fungsi login
	public function login($username,$password)
	{
		$check = $this->CI->petugas_model->login($username,$password);
		// jika ada data user, maka create session login
		if($check) {
			$id_petugas	    = $check->id_petugas;
			$nama_petugas	= $check->nama_petugas;
			$level			= $check->level;
			// create session
			$this->CI->session->set_userdata('id_petugas',$id_petugas);
			$this->CI->session->set_userdata('nama_petugas',$nama_petugas);
			$this->CI->session->set_userdata('username',$username);
			$this->CI->session->set_userdata('level',$level);
			// rederect ke halaman yang diproteksi
			redirect(base_url('admin/dasbor'),'refresh');
		}else{
			// kalau tidak ada,maka suruh login ulang
			$this->CI->session->set_flashdata('warning', 'Username atau password salah');
			redirect(base_url('login'),'refresh');
		}
	}

	// fungsi cek login
	public function cek_login()
	{
		// memeriksa session sudah ada atau belum, jika belum akan dialihkan ke halaman login 
		if ($this->CI->session->userdata('username') == ""){
			$this->CI->session->set_flashdata('warning', 'Anda belum login');
			redirect(base_url('login'),'refresh');
		}
	}

	// fungsi logout
	public function logout()
	{
		// membuang semua session yang telah diset pada saat login
		$this->CI->session->unset_userdata('id_petugas');
		$this->CI->session->unset_userdata('nama_petugas');
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('level');
		// setelah session dibuang, maka redirect ke login
		$this->CI->session->set_flashdata('sukses', 'Anda berhasil logout');
			redirect(base_url('login'),'refresh');
	}
}

/* End of file Simple_login.php */
/* Location: ./application/libraries/Simple_login.php */
