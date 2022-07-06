<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
	}

    public function view_admin()
    {
        $this->load->view('admin/settings');
    }

    public function view_bendahara()
    {
        $this->load->view('bendahara/settings');
    }

    public function view_anggota()
    {
        $this->load->view('anggota/settings');
    }

}