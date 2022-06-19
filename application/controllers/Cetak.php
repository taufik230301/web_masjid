<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kas');
	}

	public function kartu_anggota()
	{
		$data['kas'] = $this->m_kas->read_all_kas()->result_array();
	
		$this->load->library('pdf');
	
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "laporan-kas.pdf";
		$this->pdf->load_view('laporan_kas', $data);
    }
    
	
}