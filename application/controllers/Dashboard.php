<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_berita');
	}

	public function view_admin()
	{

		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

			$data['total'] = $this->m_berita->count_all_berita()->row_array();
			
			$this->load->view('admin/dashboard.php', $data);

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}

    }
    
	public function view_bendahara()
	
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {

			$this->load->view('bendahara/dashboard.php');

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}
    }
    
    public function view_anggota()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 3) {
			
			$this->load->view('anggota/dashboard.php');

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}
	}
	
}