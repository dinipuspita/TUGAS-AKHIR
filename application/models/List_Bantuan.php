<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class List_Bantuan extends CI_Model {
	public function insertBantuan()
	{

	$id='id_jenis_bantuan';

	$object = array('id_jenis_bantuan' => $this->input->post('id_jenis_bantuan'),
					'nama_bantuan' => $this->input->post('nama_bantuan'),
					'id_kategori' => $this->input->post('fk_kategori'));
		
		$this->db->insert('jenis_bantuan', $object);


	$object2 = array('isi_kriteria' => $this->input->post('isi_kriteria'),
					 'id_jenis_bantuan' => $this->input->post('id_jenis_bantuan')
					);
		
		$this->db->insert('kriteria_bantuan', $object2);
	
	}

	public function insertKategori()
	{
		
	$object = array('id_kategori' => $this->input->post('id_kategori'),
					'nama_kategori' => $this->input->post('nama_kategori'));
		
		$this->db->insert('kategori_bantuan', $object);
	}

	public function getBantuan($id)
	{
		$this->db->where('id_jenis_bantuan',$id);
		$query= $this->db->get('jenis_bantuan');
		return $query->result();
	}
	public function getKriteria($id)
	{
		$this->db->where('id_jenis_bantuan',$id);
		$query= $this->db->get('kriteria_bantuan');
		return $query->result();
	}
	public function updateById($id)
	{	
		$object = array('nama_bantuan' => $this->input->post('nama_bantuan'),
						'id_kategori' => $this->input->post('fk_kategori'));

		$this->db->where('id_jenis_bantuan',$id);
		$this->db->update('jenis_bantuan', $object);



		$object2 = array('isi_kriteria' => $this->input->post('isi_kriteria')
					);

		$this->db->where('id_jenis_bantuan',$id);
		$this->db->update('kriteria_bantuan', $object2);
	}

	public function getTampil()
	{
		$query = $this->db->query("Select * from jenis_bantuan AS a Join kategori_bantuan AS b ON b.id_kategori=a.id_kategori Join kriteria_bantuan AS c ON c.id_jenis_bantuan=a.id_jenis_bantuan");
		return $query->result_array();
	}

	public function getTampil2()
	{
		$query = $this->db->query("Select * from kriteria_bantuan AS a Join jenis_bantuan AS b ON b.id_jenis_bantuan=a.id_jenis_bantuan");
		return $query->result_array();
	}

	public function delete($id)
	{
		$this->db->where('id_jenis_bantuan', $id);
		$this->db->delete('jenis_bantuan');
	}

	public function getTampilBantuan()
	{
		$query = $this->db->query("Select * from jenis_bantuan");
		return $query->result();
	}

		public function getTampilKriteria()
	{
		$query = $this->db->query("Select * from kriteria_bantuan");
		return $query->result();
	}

	public function getTampilDetail($id)
	{
		$query = $this->db->query("Select * from jenis_bantuan AS a Join kategori_bantuan AS b ON b.id_kategori=a.id_kategori where id_bantuan = $id");
		return $query->result_array();
	}

	public function getTampilBantuanRaskin()
	{
		$query = $this->db->query("Select * from bantuan");
		return $query->result_array();
	}

	public function getUser()
	{
		$session_data = $this->session->userdata('logged_in');
		$username = $session_data['username'];
		$query = $this->db->query("SELECT * from login where username='$username'");
		// var_dump($query);die();
		return $query->result_array();
	}
	public function getLastBantuan()
	{
		$query = $this->db->query("SELECT * FROM jenis_bantuan ORDER BY id_jenis_bantuan DESC LIMIT 1");
		return $query->result_array();
	}

}
