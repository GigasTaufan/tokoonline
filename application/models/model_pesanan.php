<?php 
class Model_pesanan extends CI_Model{
	public function tampil_data(){
		return $this->db->get('tb_pesanan');
	}
}
