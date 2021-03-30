<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outlet_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing all outlet
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('outlet');
		$this->db->order_by('id_outlet', 'desc');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_all()
    {
        return $this->db->get("outlet");
    }

	// Detail outlet
	public function detail($id_outlet)
	{
		$this->db->select('*');
		$this->db->from('outlet');
		$this->db->where('id_outlet', $id_outlet);
		$this->db->order_by('id_outlet', 'desc');
		$query = $this->db->get();
		return $query->row();
	}
	
	// tambah
	public function tambah($data)
	{
		$this->db->insert('outlet', $data);
	}

	// edit
	public function edit($data)
	{
		$this->db->where('id_outlet', $data['id_outlet']);
		$this->db->update('outlet', $data);
	}

	// delete
	public function delete($data)
	{
		$this->db->where('id_outlet', $data['id_outlet']);
		$this->db->delete('outlet', $data);
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */