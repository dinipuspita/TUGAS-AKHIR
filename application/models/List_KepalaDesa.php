<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class List_KepalaDesa extends CI_Model {
	public function insertKepdes()
	{
		
	$object = array('nama_kepala_desa' => $this->input->post('nama_kepala_desa'),
					'id_desa' => $this->input->post('id_desa'),
				    'jabatan_mulai' => $this->input->post('jabatan_mulai'),
				    'jabatan_selesai' => $this->input->post('jabatan_selesai'));
		
		$this->db->insert('kepala_desa', $object);
	}

	public function insertDesa()
	{

		$data = array('nama_desa' => $this->input->post('nama_desa'), 
					  // 'kode_pos' => $this->input->post('kode_pos'), 
					  // 'no_telepon' => $this->input->post('no_telepon'), 
					  // 'alamat' => $this->input->post('alamat'), 
					  );				
		
		$this->db->insert('desa', $data);
	}

	public function getKepalaDesa($id) //menampilkan kepala desa berdasarkan id
	{
		$this->db->where('id_kepala_desa', $id); //dari db diama id_kepala_desa
		$query= $this->db->get('kepala_desa'); //menampilkan nama kepala desa
		return $query->result();
	}
	public function updateById($id)
	{	
		$object = array('nama_kepala_desa' => $this->input->post('nama_kepala_desa'),
						'id_desa' => $this->input->post('id_desa'),
				    	'jabatan_mulai' => $this->input->post('jabatan_mulai'),
				    	'jabatan_selesai' => $this->input->post('jabatan_selesai'));

		$this->db->where('id_kepala_desa', $id);
		$this->db->update('kepala_desa', $object);
	}
	public function getTampil()
	{
		$query = $this->db->query("Select * from kepala_desa  AS a Join desa AS b ON b.id_desa=a.id_desa");
		return $query->result_array();
	}
	public function delete($id)
	{
		$this->db->where('id_kepala_desa', $id);
		$this->db->delete('kepala_desa');
	}
	public function getTampilKepala() //menampilkan kepala desa
	{
		$query = $this->db->query("Select * from kepala_desa");
		return $query->result();
	}
	public function getUser()
	{
		$session_data = $this->session->userdata('logged_in'); // mengecek session data berdasarkan login
		$username = $session_data['username'];
		$query = $this->db->query("SELECT * from login where username='$username'");
		// var_dump($query);die();
		return $query->result_array();
	}
}
