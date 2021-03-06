<?php 
class Model_invoice extends CI_Model{
	public function index(){
		date_default_timezone_set('Asia/Jakarta');
		$akun_pemesan = $this->input->post('akun_pemesan');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$pilihan_bank = $this->input->post('bank');
		$pilihan_jasa = $this->input->post('jasa');

		$invoice = array(
			'akun_pemesan' => $akun_pemesan,
			'nama' => $nama,
			'alamat' => $alamat,
			'tgl_pesan' => date('Y-m-d H:i:s'),
			'batas_bayar' => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') +1, date('Y'))),
			'status' => 'BELUM DIKIRIM',
			'pilihan_bank' => $pilihan_bank,
			'pilihan_jasa' => $pilihan_jasa
		);
		$this->db->insert('tb_invoice', $invoice);
		$id_invoice =  $this->db->insert_id();

		foreach ($this->cart->contents() as $item) {
			$data = array(
				'id_invoice' 	=>  $id_invoice,
				'id_brg' 		=>	$item['id'],
				'nama_brg'		=> 	$item['name'],
				'jumlah'		=>	$item['qty'],
				'harga'			=>  $item['price']
			);
			$this->db->insert('tb_pesanan', $data);
		}
		return TRUE;
	}

	public function hapus_data($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function tampil_data()
	{
		$result = $this->db->get('tb_invoice');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}

	public function ambil_id_invoice($id_invoice)
	{
		$result = $this->db->where('id', $id_invoice)->limit(1)->get('tb_invoice');
		if ($result->num_rows() > 0){
			return $result->row();
		}else{
			return false;
		}
	}

	public function ambil_id_pesanan($id_invoice)
	{
		$result = $this->db->where('id_invoice', $id_invoice)->get('tb_pesanan');
		if ($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}

	public function edit_invoice($where, $table){
		return $this->db->get_where($table, $where);
	}

	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function tampil_data2()
	{
		$result = $this->db->where('akun_pemesan', $this->session->userdata('username'))->get('tb_invoice');

		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}
	
}
