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
		$id_desa = $this->db->query("Select * from login WHERE id_user='$id'")->row()->id_desa;
		$this->db->query("Update desa SET status_akun='Belum Terdaftar' WHERE id_desa='$id_desa'");
		$this->db->where('id_user', $id);
		$delete = $this->db->delete('login');
		return $delete;
	}


}

