<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing all transaksi
	public function listing()
	{
		$this->db->select('transaksi_.*,
						   pelanggan.nama_pelanggan',
						);
						
		$this->db->from('transaksi_');
		// join
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan = transaksi_.id_pelanggan', 'left');
		$this->db->join('paket', 'paket.id_paket = transaksi_.id_paket', 'left');
		$this->db->join('outlet', 'outlet.id_outlet = transaksi_.id_outlet', 'left');
		// end Join
		$this->db->group_by('transaksi_.id_transaksi');
		$this->db->order_by('id_transaksi', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	// Listing all header_transaksi
	public function pelanggan($id_pelanggan)
	{
		$this->db->select('transaksi_.*');
		$this->db->from('transaksi_');
		$this->db->where('transaksi_.id_pelanggan', $id_pelanggan);
		$this->db->group_by('transaksi_.id_transaksi');
		$this->db->order_by('id_transaksi', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	// Detail header_transaksi
	public function kode_transaksi($kode_transaksi)
	{
		$this->db->select('transaksi_.*,
						   pelanggan.nama_pelanggan'
						);
		$this->db->from('transaksi_');
		// join
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan = transaksi_.id_pelanggan', 'left');
		$this->db->join('paket', 'paket.id_paket = transaksi_.id_paket', 'left');
		$this->db->join('outlet', 'outlet.id_outlet = transaksi_.id_outlet', 'left');

		// end Join
		$this->db->where('kode_transaksi', $kode_transaksi);
		$this->db->order_by('id_transaksi', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// Detail header_transaksi
	public function detail($id_transaksi)
	{
		$this->db->select('transaksi_.*,
						   pelanggan.nama_pelanggan'
						);
		$this->db->from('transaksi_');
		// join
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan = transaksi_.id_pelanggan', 'left');
		$this->db->join('paket', 'paket.id_paket = transaksi_.id_paket', 'left');
		$this->db->join('outlet', 'outlet.id_outlet = transaksi_.id_outlet', 'left');

		// end Join
		$this->db->where('kode_transaksi', $kode_transaksi);
		$this->db->order_by('id_transaksi', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// tambah
	public function tambah($data)
	{
		$this->db->insert('transaksi_', $data);
	}

	// edit
	public function edit($data)
	{
		$this->db->where('id_transaksi', $data['id_transaksi']);
		$this->db->update('transaksi_', $data);
	}

	// delete
	public function delete($data)
	{
		$this->db->where('id_transaksi', $data['id_transaksi']);
		$this->db->delete('transaksi_', $data);
	}

}

/* End of file transaksi_model.php */
/* Location: ./application/models/transaksi_model.php */