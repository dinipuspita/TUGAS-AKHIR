<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register_akun extends CI_Model {
    
    // public function __construct()
    // {
    //     parent::__construct();
    //     //Do your magic here
    // }

    public function insertUser()

	{
		
		$object = array(
						'username' => $this->input->post('username'),
						'password' => md5($this->input->post('password')),
						'level' => '2',						
						'no_telp' => $this->input->post('no_telp'),
						'email' => $this->input->post('email'),
						'id_desa' => $this->input->post('id_desa')
					);
		$this->db->insert('login', $object);
	}
	// public function insertKecamatan()
	// {

	// $object = array('id_kecamatan' => $this->input->post('id_kecamatan'),
	// 				'nama_kecamatan' => $this->input->post('nama_kecamatan')
	// 			);
					
	// 	$this->db->insert('kecamatan', $object);
	// }

	public function insertDesa()
	{

	$object = array('id_desa' => $this->input->post('id_desa'),
					'nama_desa' => $this->input->post('nama_desa')
				);
					
		$this->db->insert('desa', $object);
	}

	public function getTampil()
	{
	
		$id_desa = $this->input->post('id_desa');
		$query = $this->db->query("Select * from login AS a Join desa AS b ON b.id_desa=a.id_desa WHERE a.id_desa='$id_desa'");
		return $query->result_array();
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
