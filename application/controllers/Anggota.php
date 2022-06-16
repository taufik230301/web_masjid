<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
	}

	public function view_admin()
	{

		$data['anggota'] = $this->m_user->read_all_anggota()->result_array();

		// echo var_dump($data);
		// die();
		
		$this->load->view('admin/anggota', $data);

    }
    
	
}
