<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboardmod extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public function getPenduduk(){
	    $query = $this->db->query("SELECT COUNT(NIK) FROM penduduk");
	    return $query->row();
	}
	public function getPendudukByDesa(){
		$session_data = $this->session->userdata('logged_in');
		$id_desa = $session_data['id_desa'];
	    $query = $this->db->query("SELECT COUNT(NIK) FROM penduduk AS a Join desa AS b ON b.id_desa=a.id_desa where a.id_desa = $id_desa");
	    return $query->row();
	}
	public function getDesa(){
	    $query = $this->db->query("SELECT COUNT(id_desa) FROM desa");
	    return $query->row();
	}
	public function getBantuan(){
	    $query = $this->db->query("SELECT COUNT(id_jenis_bantuan) FROM jenis_bantuan");
	    return $query->row();
	}
	public function getSurat(){
		$session_data = $this->session->userdata('logged_in');
		$id_desa = $session_data['id_desa'];
	    $query = $this->db->query("SELECT COUNT(id_surat) FROM surat AS a Join penduduk AS b ON b.NIK=a.NIK join desa as c on c.id_desa=b.id_desa WHERE b.id_desa='$id_desa'");
	    return $query->row();
	}
	public function getAkun(){
	    $query = $this->db->query("SELECT COUNT(id_user) FROM login");
	    return $query->row();
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

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */