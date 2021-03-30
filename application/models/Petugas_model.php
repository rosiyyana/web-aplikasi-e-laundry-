<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing all petugas
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('petugas');
		$this->db->order_by('id_petugas', 'desc');
		$query = $this->db->get();
		return $query->result();
	}
	
	
	// Detail petugas
	public function detail($id_petugas)
	{
		$this->db->select('*');
		$this->db->from('petugas');
		$this->db->where('id_petugas', $id_petugas);
		$this->db->order_by('id_petugas', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// login
	public function login($username,$password)
	{
		$this->db->select('*');
		$this->db->from('petugas');
		$this->db->where(array('username' => $username,
							   'password' => SHA1($password)));
		$this->db->order_by('id_petugas', 'desc');
		$query = $this->db->get();
		return $query->row();
	} 
	
	// tambah
	public function tambah($data)
	{
		$this->db->insert('petugas', $data);

	}

	// edit
	public function edit($data)
	{
		$this->db->where('id_petugas', $data['id_petugas']);
		$this->db->update('petugas', $data);
	}

	// delete
	public function delete($data)
	{
		$this->db->where('id_petugas', $data['id_petugas']);
		$this->db->delete('petugas', $data);
	}
	

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */