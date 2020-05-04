<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesan_bahan_baku extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'CEO-Toko Online Rak Multifungsi';
		$data['bahan'] = $this->model_bahan_baku->tampil_data()->result();
		$this->load->view('templates_ceo/header', $data);
		$this->load->view('templates_ceo/sidebar', $data);
		$this->load->view('ceo/pesan_bahan_baku', $data);
		$this->load->view('templates_ceo/footer');
	}

	public function export()
	{
		$data['title'] = 'CEO-Toko Online Rak Multifungsi';
		$data['invoice'] = $this->model_bahan_baku->tampil_data();
		$this->load->view('ceo/export_data_pesan_bahan_baku', $data);
	}
}
