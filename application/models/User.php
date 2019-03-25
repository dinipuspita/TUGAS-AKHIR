<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class User extends CI_Model{
	
	public function login($username,$password)
	{
		$this->db->select('id_user,username,password,level');
		$this->db->from('login');
		$this->db->where('username', $username);
		$this->db->where('password', MD5($password));
		
		$query = $this->db->get();
		
		if($query->num_rows()==1){
			return $query->result();
		}else{
			return false;
		}
	}
	public function getTampil()
	{
		$query = $this->db->query("Select * from login");
		return $query->result_array();
	}
}