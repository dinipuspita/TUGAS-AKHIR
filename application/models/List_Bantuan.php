<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class List_Bantuan extends CI_Model {
	public function insertBantuan()
	{
		
	$object = array('nama_bantuan' => $this->input->post('nama_bantuan'),
					'syarat' => $this->input->post('syarat'),
					'id_kategori' => $this->input->post('fk_kategori'));
		
		$this->db->insert('bantuan', $object);
	}

	public function insertKategori()
	{
		
	$object = array('id_kategori' => $this->input->post('id_kategori'),
					'nama_kategori' => $this->input->post('nama_kategori'));
		
		$this->db->insert('kategori_bantuan', $object);
	}

	public function getBantuan($id)
	{
		$this->db->where('id_bantuan', $id);
		$query= $this->db->get('bantuan');
		return $query->result();
	}
	public function updateById($id)
	{	
		$object = array('nama_bantuan' => $this->input->post('nama_bantuan'),
						'syarat' => $this->input->post('syarat'),
						'id_kategori' => $this->input->post('id_kategori'));

		$this->db->where('id_bantuan', $id);
		$this->db->update('bantuan', $object);
	}
	public function getTampil()
	{
		$query = $this->db->query("Select * from bantuan AS a Join kategori_bantuan AS b ON b.id_kategori=a.id_kategori");
		return $query->result_array();
	}

	public function delete($id)
	{
		$this->db->where('id_bantuan', $id);
		$this->db->delete('bantuan');
	}

	public function getTampilBantuan()
	{
		$query = $this->db->query("Select * from bantuan");
		return $query->result();
	}

	public function getTampilDetail($id)
	{
		$query = $this->db->query("Select * from bantuan AS a Join kategori_bantuan AS b ON b.id_kategori=a.id_kategori where id_bantuan = $id");
		return $query->result_array();
	}
	public function getTampilBantuanRaskin()
	{
		$query = $this->db->query("Select * from bantuan");
		return $query->result_array();
	}

}
