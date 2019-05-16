<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class User extends CI_Model{
	
	public function login($username,$password) //parameter username dan password
	{
		$this->db->select('id_user,id_desa,username,password,level'); //select field
		$this->db->from('login'); // tabel login
		$this->db->where('username', $username); // dimana username dari data variabel $username
		$this->db->where('password', MD5($password)); // dimana password dari data variabel password yang di MD5 (Message Digest 5) merupakan fungsi hash kriptografi yang mengenkripsi tulisan menjadi digit hex. Dengan menggunakan fitur ini bisa meningkatkan keamanan file / akun / tulisan dari hacker karena apa yang mereka baca adalah kumpulan digit hex bukan string asli tulisan tersebut)
		$query = $this->db->get();
		
		if($query->num_rows()==1){
			return $query->result();
		}else{
			return false;
		}
	}
	public function getTampil()
	{
		$query = $this->db->query("Select * from login AS a Join desa AS b ON b.id_desa=a.id_desa");
		return $query->result_array(); // mengembalikan data yang berulang-ulang dan data nya muncul secara array
	}

	public function getUser()
	{
		$session_data = $this->session->userdata('logged_in'); // mengecek session data berdasarkan login
		$username = $session_data['username']; // dengan variabel username dan dicek session berdasarkan username
		$query = $this->db->query("SELECT * from login where username='$username'");
		// var_dump($query);die();
		return $query->result_array();
	}
	
}