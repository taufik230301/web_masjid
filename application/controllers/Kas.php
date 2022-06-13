<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kas extends CI_Controller {

	public function view_admin()
	{
		$this->load->view('admin/kas');
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
