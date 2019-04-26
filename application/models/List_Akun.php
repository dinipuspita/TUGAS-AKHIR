<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class List_Akun extends CI_Model {

	public function getTampil()
	{

		$query = $this->db->query("Select * from login");
		return $query->result_array();
	}
	public function delete($id)
	{
		// $object = array('status_akun' => 'Belum Terdaftar');
		// $this->db->where('id_desa', $id);
		$this->db->where('id_user', $id);
		$this->db->delete('login');

		$this->db->query("Update desa join login on desa.id_desa = login.id_desa set status_akun='Belum Terdaftar' where login.id_user='$id'");

	}
	public function UpdateStatus($id)
	{
	   
		

	}

}

