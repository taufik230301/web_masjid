<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function view_admin()
	{
		$this->load->view('admin/dashboard.php');
    }
    
    public function view_bendahara()
	{
		$this->load->view('bendahara/dashboard.php');
    }
    
    public function view_anggota()
	{
		$this->load->view('anggota/dashboard.php');
	}
	
}
