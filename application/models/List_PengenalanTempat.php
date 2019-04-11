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

	// public function insertPengenalanTempat()
	// {
		
	// 	$object = array('id_pengenalan_tempat' => $this->input->post('id_pengenalan_tempat'),
	// 					'NIK' => $this->input->post('NIK'), 
	// 					'provinsi' => $this->input->post('provinsi'), 
	// 					'kabupaten' => $this->input->post('kabupaten'), 
	// 					'kecamatan' => $this->input->post('kecamatan'),
	// 					'nama_sls' => $this->input->post('nama_sls'),
	// 					'alamat' => $this->input->post('alamat'),
	// 					'no_urut_rt' => $this->input->post('no_urut_rt'),
	// 					'nama_krt' => $this->input->post('nama_krt'), 
	// 					'jumlah_ART' => $this->input->post('jumlah_ART'), 
	// 					'jumlah_keluarga' => $this->input->post('jumlah_keluarga'),
	// 					'no_kk_setiap_ART' => $this->input->post('no_kk_setiap_ART'));
					
		
	// 	$this->db->insert('pengenalan_tempat', $object);
	// }



	public function getKetPerum($id)
	{
	$this->db->where('id_pengenalan_tempat', $id);
	$query= $this->db->get('pengenalan_tempat');
	return $query->result();
	}
	public function updateById($id)
	{	
	$object = array('NIK' => $this->input->post('NIK'),
					'provinsi' => $this->input->post('provinsi'),
					'kecamatan' => $this->input->post('kecamatan'), 
					'nama_sls' => $this->input->post('nama_sls'), 
					'alamat' => $this->input->post('alamat'),
					'no_urut_rt' => $this->input->post('no_urut_rt'), 
					'nama_krt' => $this->input->post('nama_krt'),
					'jumlah_ART' => $this->input->post('jumlah_ART'),
					'jumlah_keluarga' => $this->input->post('jumlah_keluarga'), 
					'no_kk_setiap_ART'=> $this->input->post('no_kk_setiap_ART'));	

		$this->db->where('id_pengenalan_tempat', $id);
		$this->db->update('pengenalan_tempat', $object);
	}
	public function getTampil()
	{
		$query = $this->db->query("Select * from pengenalan_tempat AS Join penduduk AS B ON b.NIK=a.NIK where c.NO_KK = $ NO_KK");
		$query = $this->db->query("Select * from surat AS a Join penduduk AS b ON b.NIK=a.NIK join desa as c on c.id_desa=b.id_desa where c.id_desa = $id_desa");
		return $query->result_array();
	}
	public function delete($id)
	{
		$this->db->where('id_pengenalan_tempat', $id);
		$this->db->delete('pengenalan_tempat');
	}
	public function getTampilPendudukPerum()
	{
		$query = $this->db->query("Select * from pengenalan_tempat");
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
