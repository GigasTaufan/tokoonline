<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {
	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '3'){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Anda Belum Login</div>');
			redirect('auth/login');
		}
	}	
	public function index()
	{
		$data['invoice'] = $this->model_invoice->tampil_data();
		$data['title'] = 'CEO-Toko Online';
		$this->load->view('templates_ceo/header', $data);
		$this->load->view('templates_ceo/sidebar');
		$this->load->view('ceo/invoice', $data);
		$this->load->view('templates_ceo/footer');
	}

	public function detail($id_invoice)
	{
		$data['invoice']  = $this->model_invoice->ambil_id_invoice($id_invoice);
		$data['pesanan']  = $this->model_invoice->ambil_id_pesanan($id_invoice);
		$data['title'] = 'CEO-Toko Online';
		$this->load->view('templates_ceo/header', $data);
		$this->load->view('templates_ceo/sidebar');
		$this->load->view('ceo/detail_invoice', $data);
		$this->load->view('templates_ceo/footer');

	}
}
