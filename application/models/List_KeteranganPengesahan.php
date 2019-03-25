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
		$this->db->insert('keterangan_perumahan', $object);
	}

	public function getKetPerum($id)
	{
		$this->db->where('id_ket_perumahan', $id);
		$query= $this->db->get('keterangan_perumahan');
		return $query->result();
	}
	public function updateById($id)
	{	
	$object = array('status_bangunan' => $this->input->post('status_bangunan'),
					'status_lahan' => $this->input->post('status_lahan'), 
					'luas_lantai' => $this->input->post('luas_lantai'), 
					'jenis_lantai_terluas' => $this->input->post('jenis_lantai_terluas'),
					'jenis_dinding_terluas' => ($tglfix),
					'kondisi_dinding' => $this->input->post('kondisi_dinding'),
					'jenis_atap' => $this->input->post('jenis_atap'),
					'kondisi_atap' => $this->input->post('kondisi_atap'), 
					'jumlah_kamar' => $this->input->post('jumlah_kamar'), 
					'sumber_air_minum' => $this->input->post('sumber_air_minum'),
					'kode_pelanggan_air' => $this->input->post('kode_pelanggan_air'),
					'cara_memperoleh_air' => $this->input->post('cara_memperoleh_air'),
					'sumber_penerangan' => $this->input->post('sumber_penerangan'),
					'daya_terpasang' => $this->input->post('daya_terpasang'),
					'id_pln' => $this->input->post('id_pln'),
				    'bahan_bakar_memasak' => $this->input->post('bahan_bakar_memasak'),
					'id_pelanggan_gas' => $this->input->post('id_pelanggan_gas'),
					'fasilitas_bab' => $this->input->post('fasilitas_bab'),
					'jenis_kloset' => $this->input->post('jenis_kloset'),
					'tempat_PAT' => $this->input->post('tempat_PAT'));

		$this->db->where('id_ket_perumahan', $id);
		$this->db->update('keterangan_perumahan', $object);
	}
	public function getTampil()
	{
		$query = $this->db->query("Select * from keterangan_pengesahan");
		return $query->result_array();
	}
	public function delete($id)
	{
		$this->db->where('id_ket_perumahan', $id);
		$this->db->delete('keterangan_perumahan');
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
