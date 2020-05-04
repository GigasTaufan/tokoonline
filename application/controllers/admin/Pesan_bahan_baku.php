<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesan_bahan_baku extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Toko Online Rak Multifungsi';
		$data['bahan'] = $this->model_bahan_baku->tampil_data()->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/pesan_bahan_baku', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$nama_bahan = $this->input->post('nama_bahan');
		$stok_bahan = $this->input->post('stok_bahan');
		$jum_pesan = $this->input->post('jum_pesan');
		$harga = $this->input->post('harga');
		$data = array(
			'nama_bahan'=> $nama_bahan,
			'stok_bahan' => $stok_bahan,
			'jum_pesan' => $jum_pesan,
			'harga' => $harga
		);

		$this->model_bahan_baku->tambah_bahan($data, 'tb_bahan_baku');
		redirect('admin/pesan_bahan_baku/index');
	}

	public function edit($id)
	{
		$where = array('id' => $id);
		$data['bahan'] = $this->model_bahan_baku->edit_bahan($where, 'tb_bahan_baku')->result();
		$data['title'] = 'ADMIN-Toko Online Rak Multifungsi';
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/edit_bahan_baku', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update()
	{
		$id = $this->input->post('id');
		$nama_bahan = $this->input->post('nama_bahan');
		$stok_bahan = $this->input->post('stok_bahan');
		$jum_pesan = $this->input->post('jum_pesan');
		$harga = $this->input->post('harga');

		$data = array(
			'nama_bahan'=> $nama_bahan,
			'stok_bahan' => $stok_bahan,
			'jum_pesan' => $jum_pesan,
			'harga' => $harga
		);
		$where = array(
			'id' => $id
		);
		$this->model_bahan_baku->update_bahan($where, $data, 'tb_bahan_baku');
		redirect('admin/pesan_bahan_baku/index');
	}

	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->model_bahan_baku->hapus_data($where, 'tb_bahan_baku');
		redirect('admin/pesan_bahan_baku/index');
	}

	public function export()
	{
		$data['title'] = 'ADMIN-Toko Online Rak Multifungsi';
		$data['invoice'] = $this->model_bahan_baku->tampil_data();
		$this->load->view('admin/export_data_pesan_bahan_baku', $data);
	}
}
