<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_ceo extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('role_id') != '3') {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Anda Belum Login</div>');
			redirect('auth/login');
		}
	}

	public function index()
	{
		$data['title'] = 'CEO-Toko Online Rak Multifungsi';
		$data['pesanan'] = $this->model_pesanan->tampil_data()->result();
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('templates_ceo/header', $data);
		$this->load->view('templates_ceo/sidebar');
		$this->load->view('ceo/dashboard', $data);
		$this->load->view('templates_ceo/footer');
	}
}
