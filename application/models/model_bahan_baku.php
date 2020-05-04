<?php 
class Model_bahan_baku extends CI_Model{
	public function tampil_data(){
		return $this->db->get('tb_bahan_baku');
	}

	public function tambah_bahan($data,$table){
		$this->db->insert($table, $data);
	}

	public function edit_bahan($where, $table){
		return $this->db->get_where($table, $where);
	}

	public function update_bahan($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function hapus_data($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
