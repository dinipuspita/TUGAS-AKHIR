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
		$this->db->where('id_user', $id);
		$this->db->delete('login');
	}

}

