<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class List_Surat extends CI_Model {

	public function insertSurat()
	{
		$tanggal_surat = date("Y-m-d H:i:s");

		$data = array('id_surat' => $this->input->post('id_surat'),
					  'NIK' => $this->input->post('NIK'), 
					  // 'id_desa' => $this->input->post('id_desa'), 
					  'id_kepala_desa' => $this->input->post('id_kepala_desa'), 
					  'keterangan' => $this->input->post('keterangan'),
					  'tanggal_surat' => $tanggal_surat);				
		
		$this->db->insert('surat', $data);
	}
	public function insertDesa()
	{

		$data = array('nama_desa' => $this->input->post('nama_desa'), 
					  'kode_pos' => $this->input->post('kode_pos'), 
					  'no_telepon' => $this->input->post('no_telepon'), 
					  'alamat' => $this->input->post('alamat'), 
					  );				
		
		$this->db->insert('desa', $data);
	}

	public function insertKepdes()
	{
		
	$object = array('nama_kepala_desa' => $this->input->post('nama_kepala_desa'),
					'id_desa' => $this->input->post('id_desa'));
		
		$this->db->insert('kepala_desa', $object);
	}

    public function insertPenduduk()
	{
		$tgl=$this->input->post('tanggal_lahir');
		$tglraw=explode('-', $tgl);
		$tglfix=$tglraw[2].'-'.$tglraw[1].'-'.$tglraw[0];

		$object = array('NIK' => $this->input->post('NIK'), 
						'NO_KK' => $this->input->post('NO_KK'), 
						'nama_penduduk' => $this->input->post('nama_penduduk'), 
						'tempat_lahir' => $this->input->post('tempat_lahir'),
						'tanggal_lahir' => ($tglfix),
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

	public function getSurat($id)
	{
		$this->db->where('id_surat', $id);
		$query= $this->db->get('surat');
		return $query->result();
	}
	public function updateById($id)
	{	
		$data = array('NIK' => $this->input->post('NIK'), 
					  'tanggal_surat' => $this->input->post('tanggal_surat'));

		$this->db->where('id_surat', $id);
		$this->db->update('surat', $object);
	}
	public function getTampil()
	{
		$query = $this->db->query("Select * from surat AS a Join penduduk AS b ON b.NIK=a.NIK");
		return $query->result_array();
	}
	public function getTampilSurat()
	{
		$query = $this->db->query("Select * from surat AS a Join penduduk AS b ON b.NIK=a.NIK join desa as c on c.id_desa=b.id_desa join kepala_desa as d on d.id_kepala_desa=a.id_kepala_desa");
		return $query->result_array();
	}

	public function delete($id)
	{
		$this->db->where('id_surat', $id);
		$this->db->delete('surat');
	}
	public function getLastSurat()
	{
		$query = $this->db->query("SELECT * FROM surat ORDER BY id_surat DESC LIMIT 1");
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
	public function getReportSurat()
	{
	
		$id_desa = $this->input->post('id_desa');
		$query = $this->db->query("Select * from surat AS a Join penduduk AS b ON b.NIK=a.NIK join desa as c on c.id_desa=b.id_desa WHERE b.id_desa='$id_desa ORDER BY id_surat DESC LIMIT 1'");
		return $query->result_array();
	}
	// public function getReport()
	// {
	
	// 	$id_desa = $this->input->post('id_desa');
	// 	$query = $this->db->query("Select * from laporan AS a Join login AS b ON a.id_user=b.id_user join kecamatan as e on e.id_kecamatan=b.id_kecamatan join desa AS f ON f.id_desa=b.id_desa WHERE b.id_desa='$id_desa ORDER BY id_laporan DESC LIMIT 1'");
	// 	return $query->result_array();
	// }


}

