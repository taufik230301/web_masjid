<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_berita');
		$this->load->model('m_inventory');
		$this->load->model('m_user');
		$this->load->model('m_kematian');
	}

	public function view_admin()
	{

		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

			$data['total_berita'] = $this->m_berita->count_all_berita()->row_array();
			$data['total_inventory'] = $this->m_inventory->count_all_inventory()->row_array();
			$data['total_pengurus'] = $this->m_user->count_all_pengurus()->row_array();
			$data['total_anggota'] = $this->m_user->count_all_anggota()->row_array();
			$data['total_anggota_kematian']  =  $this->m_kematian->count_anggota_kematian()->row_array();
			
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