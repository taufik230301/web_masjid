<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_berita');
	}

	public function view_admin()
	{
		$data['berita'] = $this->m_berita->read_all_berita()->result_array();
		$this->load->view('admin/berita', $data);
    }
	
	public function tambah_data_admin()
	{
		$judul_berita = $this->input->post('judul_berita');
		$isi_berita = $this->input->post('isi_berita');
		$num = rand(1, 9999);
		$foto_name = md5($judul_berita.$isi_berita.$num);

		
		$path = './assets/gambar/';

		$this->load->library('upload');
		$config['upload_path'] = './assets/gambar';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '2048';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $foto_name;
		$this->upload->initialize($config);
		$gambar_berita_upload = $this->upload->do_upload('gambar_berita');
		
		if($gambar_berita_upload){
			$gambar_berita = $this->upload->data();
		}else{
			
			$this->session->set_flashdata('error_file_gambar_berita','error_file_gambar_berita');
			redirect('Berita/view_admin');
		}

		$hasil = $this->m_berita->insert_berita($judul_berita, $isi_berita, $gambar_berita['file_name']);

			if($hasil==false){

				$this->session->set_flashdata('eror','eror');
				redirect('Berita/view_admin');

			}else{
                
				$this->session->set_flashdata('input','input');
				redirect('Berita/view_admin');
        
			}




	}
   
	
}