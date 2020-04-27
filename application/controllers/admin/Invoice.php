<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('role_id') != '1') {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Anda Belum Login</div>');
			redirect('auth/login');
		}
	}
	public function index()
	{
		$data['invoice'] = $this->model_invoice->tampil_data();
		$data['title'] = 'ADMIN-Toko Online Rak Multifungsi';
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/invoice', $data);
		$this->load->view('templates_admin/footer');
	}

	public function detail($id_invoice)
	{
		$data['invoice']  = $this->model_invoice->ambil_id_invoice($id_invoice);
		$data['pesanan']  = $this->model_invoice->ambil_id_pesanan($id_invoice);
		$data['title'] = 'ADMIN-Toko Online Rak Multifungsi';
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_invoice', $data);
		$this->load->view('templates_admin/footer');
	}
	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->model_invoice->hapus_data($where, 'tb_invoice');
		redirect('admin/invoice/index');
	}
}
