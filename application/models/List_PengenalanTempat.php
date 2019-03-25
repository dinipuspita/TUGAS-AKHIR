<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class List_PengenalanTempat extends CI_Model {
	public function insertPengTempat()
	{
		
	$object = array('NIK' => $this->input->post('NIK'),
					'provinsi' => $this->input->post('provinsi'),
					'kabupaten' => $this->input->post('kabupaten'), 
					'kecamatan' => $this->input->post('kecamatan'), 
					'nama_sls' => $this->input->post('nama_sls'),
					'alamat' => $this->input->post('alamat'), 
					'no_urut_rt' => $this->input->post('no_urut_rt'), 
					'nama_krt' => $this->input->post('nama_krt'), 
					'jumlah_ART' => $this->input->post('jumlah_ART'), 
					'jumlah_keluarga' => $this->input->post('jumlah_keluarga'), 
					'no_kk_setiap_ART' => $this->input->post('no_kk_setiap_ART')
					);			
		
		$this->db->insert('pengenalan_tempat', $object);
	}
	// public function insertPenduduk()
	// {
		
	// 	$object = array('id_penduduk' => $this->input->post('id_penduduk'),
	// 					'NIK' => $this->input->post('NIK'), 
	// 					'NO_KK' => $this->input->post('NO_KK'), 
	// 					'nama_penduduk' => $this->input->post('nama_penduduk'), 
	// 					'tempat_lahir' => $this->input->post('tempat_lahir'),
	// 					'tanggal_lahir' => $this->input->post('tanggal_lahir'),
	// 					'jenis_kelamin' => $this->input->post('jenis_kelamin'),
	// 					'agama' => $this->input->post('agama'),
	// 					'status' => $this->input->post('status'), 
	// 					'kewarganegaraan' => $this->input->post('kewarganegaraan'), 
	// 					'RT' => $this->input->post('RT'),
	// 					'RW' => $this->input->post('RW'),
	// 					'pekerjaan' => $this->input->post('pekerjaan'),
	// 					'usia' => $this->input->post('usia'),
	// 					'id_desa' => $this->input->post('fk_desa'),
	// 					'pendapatan' => $this->input->post('pendapatan'));
		
	// 	$this->db->insert('penduduk', $object);
	// }

	// public function getKetPerum($id)
	// {
	// 	$this->db->where('id_ket_perumahan', $id);
	// 	$query= $this->db->get('keterangan_perumahan');
	// 	return $query->result();
	// }
	// public function updateById($id)
	// {	
	// $object = array('status_bangunan' => $this->input->post('status_bangunan'),
	// 				'status_lahan' => $this->input->post('status_lahan'), 
	// 				'luas_lantai' => $this->input->post('luas_lantai'), 
	// 				'jenis_lantai_terluas' => $this->input->post('jenis_lantai_terluas'),
	// 				'jenis_dinding_terluas' => ($tglfix),
	// 				'kondisi_dinding' => $this->input->post('kondisi_dinding'),
	// 				'jenis_atap' => $this->input->post('jenis_atap'),
	// 				'kondisi_atap' => $this->input->post('kondisi_atap'), 
	// 				'jumlah_kamar' => $this->input->post('jumlah_kamar'), 
	// 				'sumber_air_minum' => $this->input->post('sumber_air_minum'),
	// 				'kode_pelanggan_air' => $this->input->post('kode_pelanggan_air'),
	// 				'cara_memperoleh_air' => $this->input->post('cara_memperoleh_air'),
	// 				'sumber_penerangan' => $this->input->post('sumber_penerangan'),
	// 				'daya_terpasang' => $this->input->post('daya_terpasang'),
	// 				'id_pln' => $this->input->post('id_pln'),
	// 			    'bahan_bakar_memasak' => $this->input->post('bahan_bakar_memasak'),
	// 				'id_pelanggan_gas' => $this->input->post('id_pelanggan_gas'),
	// 				'fasilitas_bab' => $this->input->post('fasilitas_bab'),
	// 				'jenis_kloset' => $this->input->post('jenis_kloset'),
	// 				'tempat_PAT' => $this->input->post('tempat_PAT'));

	// 	$this->db->where('id_ket_perumahan', $id);
	// 	$this->db->update('keterangan_perumahan', $object);
	// }
	// public function getTampil()
	// {
	// 	$query = $this->db->query("Select * from keterangan_perumahan");
	// 	return $query->result_array();
	// }
	// public function delete($id)
	// {
	// 	$this->db->where('id_ket_perumahan', $id);
	// 	$this->db->delete('keterangan_perumahan');
	// }
	// public function getTampilKetPerum()
	// {
	// 	$query = $this->db->query("Select * from keterangan_perumahan");
	// 	return $query->result();
	// }
	public function getUser()
	{
		$session_data = $this->session->userdata('logged_in');
		$username = $session_data['username'];
		$query = $this->db->query("SELECT * from login where username='$username'");
		// var_dump($query);die();
		return $query->result_array();
	}
}
