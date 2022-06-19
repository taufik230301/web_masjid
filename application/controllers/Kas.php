<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kas extends CI_Controller {

	public

	public function view_admin()
	{
		$this->load->view('admin/kas');
	}
	
	public function tambah_data_admin()
	{

		$jenis_kas = $this->input->post('jenis_kas');
		$nominal = $this->input->post('nominal');
		$keterangan_kas = $this->input->post('keterangan_kas');

		$hasil = $this->m_kas->insert_kas($jenis_kas, $nominal, $keterangan_kas);

        if($hasil==false){
                $this->session->set_flashdata('eror_input','eror_input');
                redirect('Iuran/view_admin');
        }else{
          		$this->session->set_flashdata('input','input');
         		 redirect('Iuran/view_admin');
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