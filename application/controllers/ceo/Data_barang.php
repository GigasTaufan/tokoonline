<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_barang extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '3'){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Anda Belum Login</div>');
			redirect('auth/login');
		}
	}	

	public function index()
	{
		$data['title'] = 'CEO-Toko Online';
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('templates_ceo/header', $data);
		$this->load->view('templates_ceo/sidebar');
		$this->load->view('ceo/data_barang', $data);
		$this->load->view('templates_ceo/footer');
	}

	public function detail($id_brg)
	{
		$data['title'] = 'Toko Online';
		$data['barang'] = $this->model_barang->detail_brg($id_brg);
		$this->load->view('templates_ceo/header', $data);
		$this->load->view('templates_ceo/sidebar', $data);
		$this->load->view('ceo/detail_barang', $data);
		$this->load->view('templates_ceo/footer');
	}
}
