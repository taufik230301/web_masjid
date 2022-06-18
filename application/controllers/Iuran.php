<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iuran extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
		$this->load->model('m_kematian');
	}

	public function view_admin()
	{
		$data['anggota'] = $this->m_user->read_all_anggota()->result_array();
		$this->load->view('admin/iuran', $data);
	}
	
	public function tambah_data_admin()
	{
		$id_user = $this->input->post('id_user');
		echo var_dump($id_user);
		die();

	}
    
    public function view_bendahara()
	{
		$this->load->view('bendahara/iuran');
    }
    
    public function view_anggota()
	{
		$this->load->view('anggota/iuran');
	}
	
}