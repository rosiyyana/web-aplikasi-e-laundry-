<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outlet extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('outlet_model');
	}

	// data outlet
	public function index()
	{
		$outlet = $this->outlet_model->listing();

		$data = array('title' 		=> 'List Outlet' ,
					  'outlet'  	=> $outlet,
					  'isi'  	 	=> 'admin/outlet/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// public function googlemaps()
	// {
	// $this->load->library('googlemaps');
		 
	// $config['center'] = '-6.13952, 106.92075';//Coordinate tengah peta
	// $config['zoom'] = 'auto';
	// $this->googlemaps->initialize($config);
		 
	// $marker = array();
	// $marker['position'] = '-6.13952, 106.92075';
	// $this->googlemaps->add_marker($marker);
		 
	// $data['map'] = $this->googlemaps->create_map();
		 
	// $this->load->view('admin/outlet/list', $data);
	// }

	public function tambah()
	{
		// validasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama_outlet','Nama lengkap','required',
			array( 'required' => '%s Harus diisi'));
		
		if ($valid->run()===FALSE) {
		// end validasi

		$data = array('title' => 'Add outlet',
					  'isi'   => 'admin/outlet/tambah'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// masuk database
		}else{
			$i = $this->input;
			$data = array( 'nama_outlet'	=> $i->post('nama_outlet'),
						   'alamat'   		=> $i->post('alamat'),
						   'telp'			=> $i->post('telp')
						);
			$this->outlet_model->tambah($data);
			$this->session->set_flashdata('suskes','Data telah ditambah');
			redirect(base_url('admin/outlet'),'refresh');
		}
		// end masuk database
	}



	public function export() {
		$outlet = $this->outlet_model->get_all();
        $tanggal = date('d-m-Y');

        $pdf = new \TCPDF();
        $pdf->AddPage();
        $pdf->SetFont('', 'B', 20);
		$pdf->Ln(4);
        $pdf->Cell(100, 3, "Laporan Outlet Laundry - ".$tanggal, 0, 1, 'L');
        $pdf->SetAutoPageBreak(true, 0);
        // Add Header
        $pdf->Ln(4);
        $pdf->SetFont('', 'B', 12);
        $pdf->Cell(10, 8, "No", 1, 0, 'C');
        $pdf->Cell(45, 8, "Nama Outlet", 1, 0, 'C');
        $pdf->Cell(45, 8, "Alamat", 1, 0, 'C');
        $pdf->Cell(45, 8, "No. Telp", 1, 0, 'C');
        $pdf->SetFont('', '', 12);


        foreach($outlet->result_array() as $k => $outlet) {
			$pdf->Ln(8);
            $this->addRow($pdf, $k+1, $outlet);
        }
        $tanggal = date('d-m-Y');
        $pdf->Output('Laporan Outlet - '.$tanggal.'.pdf'); 
    }

	private function addRow($pdf, $id_outlet, $outlet) {
        $pdf->Cell(10, 8, $id_outlet, 1, 0, 'C');
        $pdf->Cell(45, 8, $outlet['nama_outlet'], 1, 0, 'C');
		$pdf->Cell(45, 8, $outlet['alamat'], 1, 0, 'C');
        $pdf->Cell(45, 8, $outlet['telp'], 1, 0, 'C');
    }

// edit kelas
	public function edit($id_outlet)
	{
		$outlet = $this->outlet_model->detail($id_outlet);

		$paket = $this->outlet_model->listing();

		// validasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama_outlet','Nama lengkap','required',
			array( 'required' => '%s Harus diisi'));
		
		if ($valid->run()===FALSE) {
		// end validasi

		$data = array('title' 	=> 'Edit paket',
					  'outlet'	=> $outlet,
					  'isi'   	=> 'admin/outlet/edit'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// masuk database
		}else{
			$i = $this->input;
			$data = array( 'id_outlet'    	=> $id_outlet,
						   'nama_outlet'	=> $i->post('nama_outlet'),
						   'alamat'   		=> $i->post('alamat'),
						   'telp'			=> $i->post('telp')
						);
			$this->outlet_model->edit($data);
			$this->session->set_flashdata('sukses','Data telah diedit');
			redirect(base_url('admin/paket'),'refresh');
		}
		// end masuk database
	}

	public function delete($id_outlet)
	{
		$data = array('id_outlet' => $id_outlet);
		$this->outlet_model->delete($data);
		$this->session->set_flashdata('Sukses', 'Data telah dihapus');
		redirect(base_url('admin/outlet'),'refresh');
	}
}

/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */