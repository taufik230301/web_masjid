<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function proses_login()
	{
		$username = $this->input->post('username');

		echo var_dump($username);
		die();
	}
	
}
