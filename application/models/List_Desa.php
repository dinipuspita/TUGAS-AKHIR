<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class List_Desa extends CI_Model {

	public function insertDesa()
	{

		$data = array('nama_desa' => $this->input->post('nama_desa'), 
					  'kode_pos' => $this->input->post('kode_pos'), 
					  'no_telepon' => $this->input->post('no_telepon'), 
					  'alamat' => $this->input->post('alamat'), 
					  );				
		
		$this->db->insert('desa', $data);
	}
 //    public function insertKepdes()
	// {
		
	// $object = array('id_kepala_desa' => $this->input->post('id_kepala_desa'),
	// 				'nama_kepala_desa' => $this->input->post('nama_kepala_desa'));
		
	// 	$this->db->insert('kepala_desa', $object);
	// }

	public function getDesa($id)
	{
		$this->db->where('id_desa', $id);
		$query= $this->db->get('desa');
		return $query->result();
	}
	public function updateById($id)
	{	
		$object = array('nama_desa' => $this->input->post('nama_desa'),
						'kode_pos' => $this->input->post('kode_pos'), 
					  	'no_telepon' => $this->input->post('no_telepon'), 
					  	'alamat' => $this->input->post('alamat'), 
						);

		$this->db->where('id_desa', $id);
		$this->db->update('desa', $object);
	}
	public function getTampil()
	{
		$query = $this->db->query("Select * from desa");
		return $query->result_array();
	}
	public function delete($id)
	{
		$this->db->where('id_desa', $id);
		$this->db->delete('desa');
	}

		public function getTampilDesa()
	{
		$query = $this->db->query("Select * from desa where status_akun = 'Belum Terdaftar'");
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

