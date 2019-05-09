<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class List_TransaksiBantuan extends CI_Model {

	public function insertTransaksi()
	{
		
	$object = array('id_jenis_bantuan' => $this->input->post('fk_bantuan'),
					'id_pengesahan' => $this->input->post('id_pengesahan'),
					'NIK' => $this->input->post('NIK'));
		
		$this->db->insert('transaksi_bantuan', $object);
	}
	public function insertBantuan()
	{
		
	$object = array('id_jenis_bantuan' => $this->input->post('id_jenis_bantuan'),
					'nama_bantuan' => $this->input->post('nama_bantuan'),
					'fk_kategori' => $this->input->post('fk_kategori'));
		
		$this->db->insert('jenis_bantuan', $object);
	}

	public function getTransaksi($id)
	{
		$this->db->where('id_transaksi',$id);
		$query= $this->db->get('transaksi_bantuan');
		return $query->result();
	}
	// public function updateById($id)
	// {	
	// 	$object = array('isi_kriteria' => $this->input->post('isi_kriteria'),
	// 					'id_jenis_bantuan' => $this->input->post('fk_jenis_bantuan'));

	// 	$this->db->where('id_kriteria',$id);
	// 	$this->db->update('kriteria_bantuan', $object);
	// }
	public function getTampil()
	{
		$query = $this->db->query("Select * from transaksi_bantuan as a join jenis_bantuan as b ON a.id_jenis_bantuan
			=b.id_jenis_bantuan");
		// $query = $this->db->query("Select * from kriteria_bantuan AS a Join jenis_bantuan AS b ON b.id_jenis_bantuan=a.id_jenis_bantuan");
		return $query->result_array();
	}

	public function delete($id)
	{
		$this->db->where('id_transaksi', $id);
		$this->db->delete('transaksi_bantuan');
	}

	// public function getTampilKriteria()
	// {
	// 	$query = $this->db->query("Select * from kriteria_bantuan");
	// 	return $query->result();
	// }

	public function getUser()
	{
		$session_data = $this->session->userdata('logged_in');
		$username = $session_data['username'];
		$query = $this->db->query("SELECT * from login where username='$username'");
		// var_dump($query);die();
		return $query->result_array();
	}

}
