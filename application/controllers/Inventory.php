<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_inventory');
	}

	public function view_admin()
	{
		$data['inventory'] = $this->m_inventory->read_all_inventory()->result_array();

		$this->load->view('admin/inventory');

    }

    public function view_anggota()
	{
		$data['inventory'] = $this->m_inventory->read_all_inventory()->result_array();

		$this->load->view('anggota/inventory');
    }
	
}
