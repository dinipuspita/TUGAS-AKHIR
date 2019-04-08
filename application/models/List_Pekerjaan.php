<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class List_Pekerjaan extends CI_Model {
	public function insertPekerjaan()
	{
		
	$object = array('nama_pekerjaan' => $this->input->post('nama_pekerjaan')
				   );
		
		$this->db->insert('pekerjaan', $object);
	}

	public function getPekerjaan($id)
	{
		$this->db->where('id_pekerjaan',$id);
		$query= $this->db->get('pekerjaan');
		return $query->result();
	}
	
	public function updateById($id)
	{	
		$object = array('nama_pekerjaan' => $this->input->post('nama_pekerjaan'),
						);

		$this->db->where('id_pekerjaan',$id);
		$this->db->update('pekerjaan', $object);
	}
	public function getTampil()
	{
		$query = $this->db->query("Select * from pekerjaan");
		return $query->result_array();
	}

	public function delete($id)
	{
		$this->db->where('id_pekerjaan', $id);
		$this->db->delete('pekerjaan');
	}
	public function getTampilPekerjaan()
	{
		$query = $this->db->query("Select * from pekerjaan");
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

}
