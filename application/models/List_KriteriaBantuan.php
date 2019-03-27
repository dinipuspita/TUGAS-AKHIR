<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class List_KriteriaBantuan extends CI_Model {

	public function insertKriteria()
	{
		
	$object = array('isi_kriteria' => $this->input->post('isi_kriteria'),
					'id_jenis_bantuan' => $this->input->post('fk_bantuan'));
		
		$this->db->insert('kriteria_bantuan', $object);
	}

	public function getKriteria($id)
	{
		$this->db->where('id_kriteria',$id);
		$query= $this->db->get('kriteria_bantuan');
		return $query->result();
	}
	public function updateById($id)
	{	
		$object = array('isi_kriteria' => $this->input->post('isi_kriteria'),
						'id_bantuan' => $this->input->post('fk_bantuan'));

		$this->db->where('id_jenis_bantuan',$id);
		$this->db->update('jenis_bantuan', $object);
	}
	public function getTampil()
	{
		$query = $this->db->query("Select * from kriteria_bantuan AS a Join jenis_bantuan AS b ON b.id_jenis_bantuan=a.id_jenis_bantuan");
		return $query->result_array();
	}

	public function delete($id)
	{
		$this->db->where('id_kriteria', $id);
		$this->db->delete('kriteria_bantuan');
	}

	public function getTampilKriteria()
	{
		$query = $this->db->query("Select * from kriteria_bantuan");
		return $query->result();
	}

	public function getUser()
	{
		$session_data = $this->session->userdata('logged_in');
		$username = $session_data['username'];
		$query = $this->db->query("SELECT * from login where username='$username'");
		// var_dump($query);die();
		return $query->result_array();
	}

}
