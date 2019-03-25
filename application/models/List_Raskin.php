<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class List_Raskin extends CI_Model {
	public function insertRaskin()
	{
		
	$object = array('tanggungan_keluarga' => $this->input->post('tanggungan_keluarga'),
					'id_penduduk' => $this->input->post('fk_penduduk'),
					'id_bantuan' => ('1'));

		$jumlah_tanggungan=$this->input->post('tanggungan_keluarga');

		if($jumlah_tanggungan >2 ){
	
		$this->db->insert('raskin', $object);
		
		}else{
			echo "<script> alert('Maaf Penduduk Tersebut belum termasuk Penerima Bantuan'); window.location.href='../Raskin'; </script>";
		}

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
	public function insertBantuan()
	{
		
	$object = array('id_bantuan' => $this->input->post('id_bantuan'),
					'nama_bantuan' => $this->input->post('nama_bantuan'),
					'syarat' => $this->input->post('syarat'),
					'id_kategori' => $this->input->post('id_kategori'));
		
		$this->db->insert('bantuan', $object);
	}

	public function getRaskin($id)
	{
		$this->db->where('id_raskin', $id);
		$query= $this->db->get('raskin');
		return $query->result();
	}
	public function updateById($id)
	{	
		$object = array('tanggungan_keluarga' => $this->input->post('tanggungan_keluarga'),
						'id_penduduk' => $this->input->post('fk_penduduk'),
						'id_bantuan' => $this->input->post('fk_bantuan'));

		$this->db->where('id_raskin', $id);
		$this->db->update('raskin', $object);
	}
	public function getTampil()
	{
		$query = $this->db->query("Select * from raskin AS a Join penduduk AS b ON b.id_penduduk=a.id_penduduk join bantuan as c on c.id_bantuan=a.id_bantuan join desa as e on e.id_desa=b.id_desa");
		
		return $query->result_array();
	}

	public function delete($id)
	{
		$this->db->where('id_raskin', $id);
		$this->db->delete('raskin');
	}
	public function getReport()
	{
	
		$id_desa = $this->input->post('id_desa');
		$query = $this->db->query("Select * from raskin AS a Join penduduk AS b ON a.id_penduduk=b.id_penduduk join bantuan as c on c.id_bantuan=a.id_bantuan join desa as e on e.id_desa=b.id_desa WHERE b.id_desa='$id_desa'");
		return $query->result_array();
	}
		// $query = $this->db->query("Select * from raskin AS c join bantuan as b on c.id_bantuan=b.id_bantuan join desa as e on e.id_desa=c.id_desa WHERE id_desa='$nama_desa'");

}
