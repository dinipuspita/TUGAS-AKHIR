<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class List_Bantuan extends CI_Model {
	public function insertBantuan()
	{


	$object = array(
					'nama_bantuan' => $this->input->post('nama_bantuan'),
					'keterangan_bantuan' => $this->input->post('keterangan_bantuan'),
					'id_kategori' => $this->input->post('fk_kategori'));
		
	$this->db->insert('temporary', $object);


	}

	public function insertKategori()
	{
		
	$object = array('id_kategori' => $this->input->post('id_kategori'),
					'nama_kategori' => $this->input->post('nama_kategori'));
		
		$this->db->insert('kategori_bantuan', $object);
	}

	
	public function getBantuan($id)
	{
		$this->db->where('id_jenis_bantuan',$id);
		$query= $this->db->get('jenis_bantuan');
		return $query->result();
	}
	public function getKriteria($id)
	{
		$this->db->where('id_jenis_bantuan',$id);
		$query= $this->db->get('kriteria_bantuan');
		return $query->result();
	}
	public function updateById($id)
	{	
		$object = array('nama_bantuan' => $this->input->post('nama_bantuan'),
						'keterangan_bantuan' => $this->input->post('keterangan_bantuan'),
						'id_kategori' => $this->input->post('fk_kategori'));

		$this->db->where('id_jenis_bantuan',$id);
		$this->db->update('jenis_bantuan', $object);

	}

	public function getTampil()
	{
		$query = $this->db->query("Select * from jenis_bantuan AS a Join kategori_bantuan AS b ON b.id_kategori=a.id_kategori");
		return $query->result_array();
	}


	public function delete($id)
	{
		$this->db->where('id_jenis_bantuan', $id);
		$this->db->delete('jenis_bantuan');
	}

	public function getTampilBantuan()
	{
		$query = $this->db->query("Select * from jenis_bantuan");
		return $query->result();
	}

	// 	public function getTampilKriteria()
	// {
	// 	$query = $this->db->query("Select * from kriteria_bantuan");
	// 	return $query->result();
	// }

	// public function getTampilDetail($id)
	// {
	// 	$query = $this->db->query("Select * from jenis_bantuan AS a Join kategori_bantuan AS b ON b.id_kategori=a.id_kategori where id_bantuan = $id");
	// 	return $query->result_array();
	// }

	public function getUser()
	{
		$session_data = $this->session->userdata('logged_in');
		$username = $session_data['username'];
		$query = $this->db->query("SELECT * from login where username='$username'");
		// var_dump($query);die();
		return $query->result_array();
	}
	public function getLastBantuan()
	{
		$query = $this->db->query("SELECT * FROM jenis_bantuan ORDER BY id_jenis_bantuan DESC LIMIT 1");
		return $query->result_array();
	}
	
	// public function insertBantuan2()
	// {
	// 	//kriteria
	// 	$query1 = $this->db->query("SELECT * FROM temporary");
	// 	$a = $query1->result_array();
	// 	//bantuan
	// 	$query2 = $this->db->query("SELECT * FROM temporary limit 1");
	// 	$b = $query2->result();
	// 	//input dat ke jenis bantuan
	// 	$jenis_bantuan = array('nama_bantuan' => $b[0]->nama_bantuan,
	// 					'id_kategori' =>  $b[0]->id_kategori);
	//     	$this->db->insert('jenis_bantuan', $jenis_bantuan);
	//     $insertId = $this->db->insert_id();
	//     //insert kriteria bantuan
	//     foreach ($a as $row) {	
	//     	$kriteria_bantuan = array('isi_kriteria' => $row['isi_kriteria'],
	// 					'id_jenis_bantuan' => $insertId);
	//     	$this->db->insert('kriteria_bantuan', $kriteria_bantuan);
	//     	echo $row['nama_bantuan'];
			
	// 	}

		
	// 	$query3 = $this->db->query("delete from temporary");
	// 	return true;
	
	// }
	public function getHitungNoKK($nokk)
	{
		$nokk = 'Kartu Indonesia Pintar (KIP)';
	    $query = $this->db->query("SELECT * from jenis_bantuan as jumlah where nama_bantuan='$nokk'");
	    return $query->result();
	}


	
}
