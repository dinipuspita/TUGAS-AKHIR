<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class List_Profil extends CI_Model {

	public function getProfil($id)
	{
		$this->db->where('id_user', $id);
		$query= $this->db->get('login');
		return $query->result();
	}
	public function updateById($id)
	{	
		$object = array('username' => $this->input->post('username'),
						'email' => $this->input->post('email')
						);

		$this->db->where('id_user', $id);
		$this->db->update('login', $object);
	}
	public function getUser(){
		$session_data = $this->session->userdata('logged_in');
		$username = $session_data['username'];
		$query = $this->db->query("SELECT * FROM login where username='$username'");
		return $query->result_array();
	}
	public function getTampilProfil()
	{
		$session_data = $this->session->userdata('logged_in');
		$id_user = $session_data['id_user'];
		$query = $this->db->query("Select * from login where id_user=$id_user ");
		return $query->result_array();
	}
	public function update($username,$password,$login)
    {
    	$object = array('id_user' => $this->input->post('id_user'),
    					'password' => $this->input->post('password')
						);

         //id apa yang mau di update, lalu DATA apa yang mau dikirim ke tabel di database
        $this->db->where('id_user',$id);
        $this->db->update('login',$data);
    }
}
