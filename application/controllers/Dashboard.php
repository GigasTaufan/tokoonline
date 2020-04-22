<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '2'){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Anda Belum Login</div>');
			redirect('auth/login');
		}
	}	

	public function index()
	{
		$data['title'] = 'Toko Online';
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_ke_keranjang($id)
	{
		$barang = $this->model_barang->find($id);

		$data = array(
			'id' =>$barang->id_brg,
			'qty'  => 1,
			'price' => $barang->harga,
			'name' => $barang->nama_brg
		);
		$this->cart->insert($data);
		redirect('welcome');
	}
	
	public function detail_keranjang()
	{
		$data['title'] = 'Toko Online';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('keranjang');
		$this->load->view('templates/footer');
	}

	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect('welcome');
	}

	public function pembayaran()
	{
		$data['title'] = 'Toko Online';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('pembayaran');
		$this->load->view('templates/footer');
	}

	public function proses_pemesanan()
	{
		$data['title'] = 'Toko Online';
		$is_processed = $this->model_invoice->index();
		if ($is_processed){
			$this->cart->destroy();
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('proses_pemesanan');
			$this->load->view('templates/footer');
		}else{
			echo "Maaf, Pesanan Anda Gagal di proses";
		}
	}

	public function detail($id_brg)
	{
		$data['title'] = 'Toko Online';
		$data['barang'] = $this->model_barang->detail_brg($id_brg);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('detail_barang', $data);
		$this->load->view('templates/footer');
	}
}
