<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class List_KepemilikanAset extends CI_Model {
	public function insertKetAset()
	{
		
	$object = array('NIK' => $this->input->post('NIK'),
					'jml_tabung_gas' => $this->input->post('jml_tabung_gas'),
					'jml_AC' => $this->input->post('jml_AC'), 
					'jml_pemanas_air' => $this->input->post('jml_pemanas_air'), 
					'jml_telepon_rumah' => $this->input->post('jml_telepon_rumah'),
					'jml_televisi' => $this->input->post('jml_televisi'), 
					'jml_emas' => $this->input->post('jml_emas'),
					'jml_komputer' => $this->input->post('jml_komputer'),
					'jml_sepeda' => $this->input->post('jml_sepeda'), 
					'jml_spdmotor' => $this->input->post('jml_spdmotor'), 
					'jml_mobil' => $this->input->post('jml_mobil'),
					'jml_perahu' => $this->input->post('jml_perahu'),
					'jml_motor_tempel' => $this->input->post('jml_motor_tempel'),
					'jml_perahumotor' => $this->input->post('jml_perahumotor'),
					'jml_kapal' => $this->input->post('jml_kapal'),
					'jml_lahan' => $this->input->post('jml_lahan'),
				    'jml_rumahlain' => $this->input->post('jml_rumahlain'),
					'jml_sapi' => $this->input->post('jml_sapi'),
					'jml_kerbau' => $this->input->post('jml_kerbau'),
					'jml_kuda' => $this->input->post('jml_kuda'),
					'jml_babi' => $this->input->post('jml_babi'),
					'jml_kambing'=> $this->input->post('jml_kambing'));			
		
		$this->db->insert('kepemilikan_aset', $object);
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

	public function getKetAset($id)
	{
		$this->db->where('id_kepemilikan_aset', $id);
		$query= $this->db->get('kepemilikan_aset');
		return $query->result();
	}
	public function updateById($id)
	{	
	$object = array('NIK' => $this->input->post('NIK'),
					'jml_tabung_gas' => $this->input->post('jml_tabung_gas'),
					'jml_AC' => $this->input->post('jml_AC'), 
					'jml_pemanas_air' => $this->input->post('jml_pemanas_air'), 
					'jml_telepon_rumah' => $this->input->post('jml_telepon_rumah'),
					'jml_televisi' => $this->input->post('jml_televisi'), 
					'jml_emas' => $this->input->post('jml_emas'),
					'jml_komputer' => $this->input->post('jml_komputer'),
					'jml_sepeda' => $this->input->post('jml_sepeda'), 
					'jml_spdmotor' => $this->input->post('jml_spdmotor'), 
					'jml_mobil' => $this->input->post('jml_mobil'),
					'jml_perahu' => $this->input->post('jml_perahu'),
					'jml_motor_tempel' => $this->input->post('jml_motor_tempel'),
					'jml_perahumotor' => $this->input->post('jml_perahumotor'),
					'jml_kapal' => $this->input->post('jml_kapal'),
					'jml_lahan' => $this->input->post('jml_lahan'),
				    'jml_rumahlain' => $this->input->post('jml_rumahlain'),
					'jml_sapi' => $this->input->post('jml_sapi'),
					'jml_kerbau' => $this->input->post('jml_kerbau'),
					'jml_kuda' => $this->input->post('jml_kuda'),
					'jml_babi' => $this->input->post('jml_babi'),
					'jml_kambing'=> $this->input->post('jml_kambing'));	

		$this->db->where('id_kepemilikan_aset', $id);
		$this->db->update('kepemilikan_aset', $object);
	}
	public function getTampil()
	{
		$query = $this->db->query("Select * from kepemilikan_aset");
		return $query->result_array();
	}
	public function delete($id)
	{
		$this->db->where('id_kepemilikan_aset', $id);
		$this->db->delete('kepemilikan_aset');
	}
	public function getTampilKetAset()
	{
		$query = $this->db->query("Select * from kepemilikan_aset");
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
