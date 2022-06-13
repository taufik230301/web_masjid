<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iuran extends CI_Controller {

	public function view_admin()
	{
		$this->load->view('admin/iuran');
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
