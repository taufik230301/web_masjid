<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kas');
		$this->load->model('m_user');
	}

	public function kartu_anggota()
	{

		$data['anggota'] = $this->m_user->read_all_anggota_by_id_user($this->session->userdata('id_user'))->result_array();
		$this->load->library('pdf');
		$this->pdf->setPaper('A5', 'landscape');
		$this->pdf->filename = "laporan-kas.pdf";
		$this->pdf->load_view('kartu_anggota', $data);
	}

	public function laporan_kas()
	{
		$data['kas'] = $this->m_kas->read_all_kas()->result_array();
	
		$this->load->library('pdf');
	
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "laporan-kas.pdf";
		$this->pdf->load_view('laporan_kas', $data);
	}
	
	public function slip_iuran_anggota($id_iuran)
	{

		$data['anggota_iuran'] = $this->m_user->read_all_anggota_iuran_by_id($id_iuran)->result_array();

	
		$this->load->library('pdf');
	
		$this->pdf->setPaper('A5', 'landscape');
		$this->pdf->filename = "laporan-kas.pdf";
		$this->pdf->load_view('slip_iuran', $data);
    }
    
	
}