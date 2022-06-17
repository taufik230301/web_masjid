<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kematian extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
	}

	public function view_admin()
	{

		$data['anggota_not_kematian'] = $this->m_user->read_all_anggota_not_kematian()->result_array();

		$data['anggota_kematian'] = $this->m_user->read_all_anggota_kematian()->result_array();
		
		// echo var_dump($data);
		// die();
		$this->load->view('admin/kematian', $data);

	} 
	
	public function tambah_data_admin()
	{
		$id_user = $this->input->post('id_user');
		$tanggal_kematian = $this->input->post('tanggal_kematian');
		echo var_dump($id_user);
		echo var_dump($tanggal_kematian);
		die();
	}
	
}