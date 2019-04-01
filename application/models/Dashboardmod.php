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
	public function getDesa(){
	    $query = $this->db->query("SELECT COUNT(id_desa) FROM desa");
	    return $query->row();
	}
	public function getBantuan(){
	    $query = $this->db->query("SELECT COUNT(id_jenis_bantuan) FROM jenis_bantuan");
	    return $query->row();
	}
	public function getSurat(){
	    $query = $this->db->query("SELECT COUNT(id_surat) FROM surat");
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