<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class List_FilterSurat extends CI_Model {

	public function insertFilterSurat()
	{
		$id_surat=$this->input->post('id_surat');
		$status_surat=$this->input->post('status_surat');
		$NIK = $this->input->post('NIK');
		$jumlah_tanggungan=$this->input->post('tanggungan_keluarga');
		$dokumen=$this->input->post('kelengkapan_dokumen');
		$lahan=$this->input->post('jml_lahan');
		$statusBangunan=$this->input->post('status_bangunan');
		$pendapatan=$this->input->post('pendapatan');
		$keterangan=$this->input->post('keterangan');

		//tidak mampu tapi lengkap
		if((int)$pendapatan / (int)$jumlah_tanggungan <= 600000 && $dokumen == "Lengkap" && (int)$lahan <= 8){

			$data = array('NIK' => $NIK, 
			  'pendapatan' => $pendapatan, 
			  'tanggungan_keluarga' => $jumlah_tanggungan, 
			  'kelengkapan_dokumen' => $dokumen, 
			  'jml_lahan' => $lahan
			);	

			$this->db->insert('kepemilikan_aset', $data);


			$tanggal_surat = date("Y-m-d H:i:s"); //tgl otomatis waktu buat surat

			$status = 'Diterima';
			
			$data_surat = array(
						  'id_surat' => $id_surat,
						  'NIK' => $NIK, 
						  'keterangan' => $keterangan,
						  'status_surat' => $status,
						  'tanggal_surat' => $tanggal_surat,
						  'persetujuan' => 'Belum Disetujui'
						);				
			
			$this->db->insert('surat', $data_surat);



			echo "<script> alert('Data Penduduk Penerima Surat Berhasil Di tambahkan, Anda Dapat langsung Membuat Surat SKTM'); 	window.location.href='../create/'; </script>";
		
		}
		//tidak mampu tidak lengkap
		else if((int)$pendapatan / (int)$jumlah_tanggungan <= 600000 && $dokumen != "Lengkap" && (int)$lahan <= 8){

			$data = array('NIK' => $NIK, 
			  'pendapatan' => $pendapatan, 
			  'tanggungan_keluarga' => $jumlah_tanggungan, 
			  'kelengkapan_dokumen' => $dokumen, 
			  'jml_lahan' => $lahan
			);	

			$this->db->insert('kepemilikan_aset', $data);

			$tanggal_surat = date("Y-m-d H:i:s"); //tgl otomatis waktu buat surat

			$status = 'Menunggu';
			
			$data_surat = array(
						  'id_surat' => $id_surat,
						  'NIK' => $NIK, 
						  'keterangan' => $keterangan,
						  'status_surat' => $status,
						  'tanggal_surat' => $tanggal_surat,
						  'persetujuan' => 'Belum Disetujui'
						);				
			
			$this->db->insert('surat', $data_surat);

			
			echo "<script> alert('Data Penduduk Penerima Surat Dipending, Anda Dapat Mencetak Surat SKTM Namun Lengkapi Persyaratan Terlebih Dahulu '); window.location.href='../create/'; </script>";

		}
		else{
		//mampu
			echo "<script> alert('Maaf Penduduk Tersebut belum termasuk Penerima Surat'); window.location.href='../'; </script>";
		}



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
	public function insertBantuan()
	{


	$object = array(
					'nama_bantuan' => $this->input->post('nama_bantuan'),
					'isi_kriteria' => $this->input->post('isi_kriteria'),
					'id_kategori' => $this->input->post('fk_kategori'));
		
		$this->db->insert('temporary', $object);


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
		$object = array('keterangan' => $this->input->post('keterangan'), 
					  'tanggal_surat' => $this->input->post('tanggal_surat'),
					);

		$this->db->where('id_surat', $id);
		$this->db->update('surat',$object);
	}
	public function getTampil() //tampil surat perdesa
	{
		$session_data = $this->session->userdata('logged_in');
		$id_desa = $session_data['id_desa'];

		$query = $this->db->query("Select * from surat AS a Join penduduk AS b ON b.NIK=a.NIK join desa as c on c.id_desa=b.id_desa where c.id_desa = $id_desa");
		return $query->result_array();
	}
	public function getTampilSuratDinsos() //tampil surat perdesa
	{

		$query = $this->db->query("Select * from surat AS a Join penduduk AS b ON b.NIK=a.NIK join desa as c on c.id_desa=b.id_desa Join kepemilikan_aset AS d ON d.NIK=a.NIK where status_surat = 'Diterima'");
		return $query->result_array();
	}
	public function getTampilSurat($id)
	{
		$id_desa = $this->input->post('id_desa'); //tampil cetak surat ben wong
	
		$query = $this->db->query("Select * from surat AS a Join penduduk AS b ON b.NIK=a.NIK join desa as c on c.id_desa=b.id_desa join kepala_desa as d on d.id_desa=c.id_desa join pekerjaan as e on e.id_pekerjaan=b.id_pekerjaan WHERE jabatan_selesai between 2014 and 2020 and id_surat = $id");
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
	
	//laporan surat perdesa
	public function getReportSurat()
	{
		$session_data = $this->session->userdata('logged_in');
		$id_desa = $session_data['id_desa'];

		$query = $this->db->query("Select * from surat AS a Join penduduk AS b ON b.NIK=a.NIK join desa as c on c.id_desa=b.id_desa WHERE b.id_desa='$id_desa'");
		return $query->result_array();
	}
	public function konfirmasiStatus($id)
	{
	   
		$object = array('status_surat' => 'Diterima');
		$this->db->where('id_surat', $id);
		$this->db->update('surat', $object);

	}
	public function persetujuanStatus($id)
	{
	   
		$object = array('persetujuan' => 'Disetujui');
		$this->db->where('id_surat', $id);
		$this->db->update('surat', $object);
	}
	public function getHitungNoKK($nokk)
	{
	    $query = $this->db->query("SELECT NIK as nikk, COUNT(NIK) as jumlah FROM penduduk where NO_KK='$nokk'");
	    return $query->result();
	}
	public function getTableIsi($isi_table)
	{
	    $query = $this->db->query("Select (NIK, nama_penduduk, tanggal_surat, keterangan, status_surat, nama_desa, usia, pendidikan, pendapatan, tanggungan_keluarga, luas_lahan) as table from penduduk  where NIK='$nokk'");
	    return $query->result();
	// Select * from surat AS a Join penduduk AS b ON b.NIK=a.NIK join desa as c on c.id_desa=b.id_desa Join kepemilikan_aset AS d ON d.NIK=a.NIK where status_surat = 'Diterima' and b.usia BETWEEN 45 and 74
	}
	public function getTampilBantuan()
	{
		$query = $this->db->query("Select * from jenis_bantuan");
		return $query->result();
	}
	
	public function getKriteriaSelected($kriteria_bantuan)
	{
	    $query = $this->db->query("Select (keterangan_bantuan) as A from jenis_bantuan where id_jenis_bantuan='$kriteria_bantuan'"); 
	    return $query->result();	   

	}
	public function getDataKKS($kriteria_bantuan)
	{
	    $query = $this->db->query("Select * from surat AS A Join penduduk AS b ON b.NIK=A.NIK join desa as c on c.id_desa=b.id_desa Join kepemilikan_aset AS d ON d.NIK=A.NIK where status_surat = 'Diterima' and b.usia BETWEEN 45 and 74"); 
	    return $query->result();	   

	}
	public function getDataKIS($kriteria_bantuan)
	{
	    $query = $this->db->query("Select * from surat AS A Join penduduk AS b ON b.NIK=A.NIK join desa as c on c.id_desa=b.id_desa Join kepemilikan_aset AS d ON d.NIK=A.NIK where status_surat = 'Diterima'"); 
	    return $query->result_array();	   

	}
	public function getDataRASKIN($kriteria_bantuan)
	{
	    $query = $this->db->query("Select * from surat AS A Join penduduk AS b ON b.NIK=A.NIK join desa as c on c.id_desa=b.id_desa Join kepemilikan_aset AS d ON d.NIK=A.NIK where a.status_surat = 'Diterima' and b.usia BETWEEN 75 and 90"); 
	    return $query->result();	   

	}
	public function getDataKIP($kriteria_bantuan)
	{
	    $query = $this->db->query("Select * from surat AS A Join penduduk AS b ON b.NIK=A.NIK join desa as c on c.id_desa=b.id_desa Join kepemilikan_aset AS d ON d.NIK=A.NIK where status_surat = 'Diterima' and b.usia BETWEEN 7 and 18 "); 
	    return $query->result();	   

	}



}

