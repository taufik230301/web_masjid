<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller {

	public function view_admin()
	{
		$this->load->view('admin/inventory');
    }

    public function view_anggota()
	{
		$this->load->view('anggota/inventory');
    }
	
}
