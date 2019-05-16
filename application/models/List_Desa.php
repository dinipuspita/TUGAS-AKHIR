<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class List_Desa extends CI_Model {

	public function insertDesa()
	{

		$data = array('nama_desa' => $this->input->post('nama_desa'), 
					  'kode_pos' => $this->input->post('kode_pos'), 
					  'no_telepon' => $this->input->post('no_telepon'), 
					  'alamat' => $this->input->post('alamat'), 
					  'status_akun' => 'Belum Terdaftar', 
					  );				
		
		$this->db->insert('desa', $data);
	}
 //    public function insertKepdes()
	// {
		
	// $object = array('id_kepala_desa' => $this->input->post('id_kepala_desa'),
	// 				'nama_kepala_desa' => $this->input->post('nama_kepala_desa'));
		
	// 	$this->db->insert('kepala_desa', $object);
	// }

	public function getDesa($id) //menampilkan desa berdasarkan parameter
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
	public function getTampil() // tampil data di desa pada index di C listdesa
	{
		$query = $this->db->query("Select * from desa"); 
		return $query->result_array(); // mengembalikan data yang berulang-ulang dan data nya muncul secara array
	}
	public function delete($id) // delete desa berdasarkan parameter
	{
		$this->db->where('id_desa', $id);
		$this->db->delete('desa');
	}

		public function getTampilDesa()  //menampilkan desa
	{
		$query = $this->db->query("Select * from desa where status_akun = 'Belum Terdaftar'");
		return $query->result();
	}
		public function getTampilDesa2() //menampilkan desa
	{
		$query = $this->db->query("Select * from desa");
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

