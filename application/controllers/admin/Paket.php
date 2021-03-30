<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('paket_model');
		$this->load->model('outlet_model');

	}

	public function export() {
		$paket = $this->paket_model->get_all();
        $tanggal = date('d-m-Y');

        $pdf = new \TCPDF();
        $pdf->AddPage();
        $pdf->SetFont('', 'B', 20);
		$pdf->Ln(4);
        $pdf->Cell(100, 3, "Laporan Paket Laundry - ".$tanggal, 0, 1, 'L');
        $pdf->SetAutoPageBreak(true, 0);
        // Add Header
        $pdf->Ln(4);
        $pdf->SetFont('', 'B', 12);
        $pdf->Cell(10, 8, "No", 1, 0, 'C');
        // $pdf->Cell(45, 8, "Nama Outlet", 1, 0, 'C');
		$pdf->Cell(45, 8, "Jenis Paket", 1, 0, 'C');
        $pdf->Cell(45, 8, "Nama Paket", 1, 0, 'C');
        $pdf->Cell(45, 8, "Harga", 1, 0, 'C');
        $pdf->SetFont('', '', 12);


        foreach($paket->result_array() as $k => $paket) {
			$pdf->Ln(8);
            $this->addRow($pdf, $k+1, $paket);
        }
        $tanggal = date('d-m-Y');
        $pdf->Output('Laporan Paket - '.$tanggal.'.pdf'); 
		
    }

	private function addRow($pdf, $id_paket, $paket) {
        $pdf->Cell(10, 8, $id_paket, 1, 0, 'C');
        // $pdf->Cell(45, 8, $paket['id_outlet'], 1, 0, 'C');
		$pdf->Cell(45, 8, $paket['jenis_paket'], 1, 0, 'C');
        $pdf->Cell(45, 8, $paket['nama_paket'], 1, 0, 'C');
		$pdf->Cell(45, 8, $paket['harga'], 1, 0, 'C');

    }
	
	// data paket
	public function index()
	{
		
		$paket = $this->paket_model->listing();
		$data = array('title' 	=> 'List paket' ,
					  'paket'  	=> $paket,
					  'isi'  	=> 'admin/paket/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		
	}

	
	public function tambah()
	{
		$outlet = $this->outlet_model->listing();

		// validasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama_paket','Nama lengkap','required',
			array( 'required' => '%s Harus diisi'));
		
		if ($valid->run()===FALSE) {
		// end validasi

		$data = array('title' 		=> 'Add paket',
					  'outlet'		=> $outlet,
					  'isi'   		=> 'admin/paket/tambah'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// masuk database
		}else{
			$i = $this->input;
			$data = array( 'id_outlet'		=> $i->post('id_outlet'),
						   'nama_paket'		=> $i->post('nama_paket'),
						   'jenis_paket'   	=> $i->post('jenis_paket'),
						   'harga'			=> $i->post('harga')
						);
			$this->paket_model->tambah($data);
			$this->session->set_flashdata('suskes','Data telah ditambah');
			redirect(base_url('admin/paket'),'refresh');
		}
		// end masuk database
	}


// edit kelas
	public function edit($id_paket)
	{
		$paket = $this->paket_model->detail($id_paket);
		$outlet = $this->outlet_model->listing();

		// validasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama_paket','Nama lengkap','required',
			array( 'required' => '%s Harus diisi'));
		
		if ($valid->run()===FALSE) {
		// end validasi

		$data = array('title' 		=> 'Edit paket',
					  'outlet'		=> $outlet,
					  'paket'		=> $paket,
					  'isi'   		=> 'admin/paket/edit'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// masuk database
		}else{
			$i = $this->input;
			$data = array( 'id_paket'    	=> $id_paket,
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