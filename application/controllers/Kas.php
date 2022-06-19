<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kas');
	}

	public function view_admin()
	{
		$data['kas'] = $this->m_kas->read_all_kas()->result_array();
		$data['kas_kredit'] = $this->m_kas->read_all_kas_kredit()->row_array();
		$data['kas_debit'] = $this->m_kas->read_all_kas_debit()->row_array();
		
		$this->load->view('admin/kas', $data);
	}
	
	public function tambah_data_admin()
	{

		$jenis_kas = $this->input->post('jenis_kas');
		$nominal = $this->input->post('nominal');
		$keterangan_kas = $this->input->post('keterangan_kas');

		$hasil = $this->m_kas->insert_kas($jenis_kas, $nominal, $keterangan_kas);

        if($hasil==false){
                $this->session->set_flashdata('eror_input','eror_input');
                redirect('Kas/view_admin');
        }else{
          		$this->session->set_flashdata('input','input');
         		 redirect('Kas/view_admin');
        }


	}
    
    public function view_bendahara()
	{
		$this->load->view('bendahara/kas');
    }
    
    public function view_anggota()
	{
		$this->load->view('anggota/kas');
	}
	
}