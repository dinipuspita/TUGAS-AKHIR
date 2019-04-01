<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class List_FilterSurat extends CI_Model {

	public function insertFilterSurat()
	{


		$data = array('NIK' => $this->input->post('NIK'), 
					  'pendapatan' => $this->input->post('pendapatan'), 
					  'tanggungan_keluarga' => $this->input->post('tanggungan_keluarga'), 
					  'kelengkapan_dokumen' => $this->input->post('kelengkapan_dokumen'), 
					  'status_bangunan' => $this->input->post('status_bangunan'), 
					  'jml_lahan' => $this->input->post('jml_lahan'), 
					 );				
		
		// $this->db->insert('desa', $data);

		$jumlah_tanggungan=$this->input->post('tanggungan_keluarga');
		$dokumen=$this->input->post('kelengkapan_dokumen');
		$lahan=$this->input->post('jml_lahan');
		$statusBangunan=$this->input->post('status_bangunan');
		$pendapatan=$this->input->post('pendapatan');

		if((int)$pendapatan / (int)$jumlah_tanggungan <= 600000 && $dokumen == "Lengkap" && (int)$lahan < 8){
		// if ($this->input->post('tanggungan_keluarga')!= 'Lengkap') {	

			echo "<script> alert('Data Penduduk Penerima Surat Berhasil Di tambahkan, Anda Dapat langsung Membuat Surat SKTM'); 	window.location.href='../ListSurat/create'; </script>";
		
		}else{
			echo "<script> alert('Maaf Penduduk Tersebut belum termasuk Penerima Surat'); window.location.href='../ListSurat'; </script>";
		}

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
	// public function updateById($id)
	// {	
	// 	$data = array('NIK' => $this->input->post('NIK'), 
	// 				  'tanggal_surat' => $this->input->post('tanggal_surat'));

	// 	$this->db->where('id_surat', $id);
	// 	$this->db->update('surat', $object);
	// }
	public function getTampil()
	{
		$query = $this->db->query("Select * from surat AS a Join penduduk AS b ON b.NIK=a.NIK join keterangan_sosial_ekonomi as c on c.NIK=a.NIK join keterangan_perumahan as d on d.NIK=b.NIK");
		return $query->result_array();
	}

	// $query = $this->db->query("Select * from peminjaman AS p JOIN peminjaman_detail AS pd ON p.id_peminjaman = pd.id_peminjaman join barang as b on b.id_barang=pd.id_barang join staff as c on c.id_staff=p.id_staff");
	// 	return $query->result_array();

	public function delete($id)
	{
		$this->db->where('id_surat', $id);
		$this->db->delete('surat');
	}
	// public function getLastSurat()
	// {
	// 	$query = $this->db->query("SELECT * FROM surat ORDER BY id_surat DESC LIMIT 1");
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

}

