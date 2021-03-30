<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket_model extends CI_Model {

	public function __construct()
	{ 
		parent::__construct();
		$this->load->database();
	}

	// Listing all paket
	public function listing()
	{
		$this->db->select('paket.*,
						   outlet.nama_outlet');
		$this->db->from('paket');
		// Join
		$this->db->join('outlet', 'outlet.id_outlet = paket.id_outlet', 'left');
		// end Join
		$this->db->group_by('paket.id_paket');
        $this->db->order_by('id_paket', 'desc');
		$query = $this->db->get();
		return $query->result();
        
	}
	public function get_all()
    {
        return $this->db->get("paket");
    }

	// Detail paket
	public function detail($id_paket)
	{
		$this->db->select('*');
		$this->db->from('paket');
		$this->db->where('id_paket', $id_paket);
		$this->db->order_by('id_paket', 'desc');
		$query = $this->db->get();
		return $query->row();
	}
	
	// tambah
	public function tambah($data)
	{
		$this->db->insert('paket', $data);
	}

	// edit
	public function edit($data)
	{
		$this->db->where('id_paket', $data['id_paket']);
		$this->db->update('paket', $data);
	}

	// delete
	public function delete($data)
	{
		$this->db->where('id_paket', $data['id_paket']);
		$this->db->delete('paket', $data);
	}
}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */