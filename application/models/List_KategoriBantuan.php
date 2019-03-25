<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class List_KategoriBantuan extends CI_Model {
	public function insertKategori()
	{
		
	$object = array('nama_kategori' => $this->input->post('nama_kategori'));
		
		$this->db->insert('kategori_bantuan', $object);
	}

	public function getKategoriBantuan($id)
	{
		$this->db->where('id_kategori', $id);
		$query= $this->db->get('kategori_bantuan');
		return $query->result();
	}
	public function updateById($id)
	{	
		$object = array('nama_kategori' => $this->input->post('nama_kategori'));

		$this->db->where('id_kategori', $id);
		$this->db->update('kategori_bantuan', $object);
	}
	public function getTampil()
	{
		$query = $this->db->query("Select * from kategori_bantuan");
		return $query->result_array();
	}
	public function delete($id)
	{
		$this->db->where('id_kategori', $id);
		$this->db->delete('kategori_bantuan');
	}
	public function getTampilKategori()
	{
		$query = $this->db->query("Select * from kategori_bantuan");
		return $query->result();
	}
}
