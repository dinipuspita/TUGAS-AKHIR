<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class List_KeteranganPengesahan extends CI_Model {
	public function insertKetPengesahan()
	{
		
	$object = array('tanggal_verivali' => $this->input->post('tanggal_verivali'),
					'nama_petugas' => $this->input->post('nama_petugas'),
					'tanggal_pemeriksaan' => $this->input->post('tanggal_pemeriksaan'), 
					'hasil_verivali' => $this->input->post('hasil_verivali')

				);
		$this->db->insert('keterangan_pengesahan', $object);
	}

	// public function getKetPerum($id)
	// {
	// 	$this->db->where('id_ket_perumahan', $id);
	// 	$query= $this->db->get('keterangan_perumahan');
	// 	return $query->result();
	// }
	public function insertPenduduk()
	{
		
		$object = array('id_penduduk' => $this->input->post('id_penduduk'),
						'NIK' => $this->input->post('NIK'), 
						'NO_KK' => $this->input->post('NO_KK'), 
						'nama_penduduk' => $this->input->post('nama_penduduk'), 
						'tempat_lahir' => $this->input->post('tempat_lahir'),
						'tanggal_lahir' => $this->input->post('tanggal_lahir'),
						'jenis_kelamin' => $this->input->post('jenis_kelamin'),
						'agama' => $this->input->post('agama'),
						'status' => $this->input->post('status'), 
						'kewarganegaraan' => $this->input->post('kewarganegaraan'), 
						'RT' => $this->input->post('RT'),
						'RW' => $this->input->post('RW'),
						'pekerjaan' => $this->input->post('pekerjaan'),
						'usia' => $this->input->post('usia'),
						'id_desa' => $this->input->post('fk_desa'),
						'pendapatan' => $this->input->post('pendapatan'));
		
		$this->db->insert('penduduk', $object);
	}
	public function getKetPengesahan($id)
	{
		$this->db->where('id_pengesahan', $id);
		$query= $this->db->get('keterangan_pengesahan');
		return $query->result();
	}

	public function updateById($id)
	{	
	$object = array('NIK' => $this->input->post('NIK'),
					'tanggal_verivali' => $this->input->post('tanggal_verivali'),
					'nama_petugas' => $this->input->post('nama_petugas'), 
					'tanggal_pemeriksaan' => $this->input->post('tanggal_pemeriksaan'), 
					'hasil_verivali'=> $this->input->post('hasil_verivali'));	

		$this->db->where('id_pengesahan', $id);
		$this->db->update('keterangan_pengesahan', $object);
	}
	public function getTampil()
	{
		$query = $this->db->query("Select * from keterangan_pengesahan");
		return $query->result_array();
	}
	public function delete($id)
	{
		$this->db->where('id_pengesahan', $id);
		$this->db->delete('keterangan_pengesahan');
	}
	public function getTampilKetPengesahan()
	{
		$query = $this->db->query("Select * from keterangan_pengesahan");
		return $query->result();
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