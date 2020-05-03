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

	public function edit($id)
	{
		$where = array('id' => $id);
		$data['invoice'] = $this->model_invoice->edit_invoice($where, 'tb_invoice')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/edit_invoice', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update()
	{
		$id = $this->input->post('id');
		$status = $this->input->post('status');

		$data = array(
			'status'=> $status
		);
		$where = array(
			'id' => $id
		);
		$this->model_invoice->update_data($where, $data, 'tb_invoice');
		redirect('admin/invoice/index');
	}

	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->model_invoice->hapus_data($where, 'tb_invoice');
		redirect('admin/invoice/index');
	}

	public function export()
	{
		$data['title'] = 'Toko Online Rak Multifungsi';
		$data['invoice'] = $this->model_invoice->tampil_data();
		$this->load->view('admin/export_data_invoice', $data);
	}
}
