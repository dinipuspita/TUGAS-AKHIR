<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class List_FormBantuan extends CI_Model {
	public function insertFormBantuan()
	{
		
	$nik ='nik';		
	$id = $this->input->post('NIK');
	$no = $this->db->query("Select NO_KK from penduduk where NIK=$id")->row();
	$no_kk2 = $no->NO_KK;
	
	$object1 = array(
					'provinsi' => $this->input->post('provinsi'),
					'kabupaten' => $this->input->post('kabupaten'), 
					'kecamatan' => $this->input->post('kecamatan'), 
					'nama_sls' => $this->input->post('nama_sls'),
					'alamat' => $this->input->post('alamat'), 
					'no_urut_rt' => $this->input->post('no_urut_rt'), 
					'nama_krt' => $this->input->post('nama_krt'), 
					'jumlah_ART' => $this->input->post('jumlah_ART'), 
					'jumlah_keluarga' => $this->input->post('jumlah_keluarga')
					// 'no_kk_setiap_ART' => $this->input->post('no_kk_setiap_ART')
					);			
		
		$this->db->insert('pengenalan_tempat', $object1);

	$object2 = array(
					'tanggal_verivali' => $this->input->post('tanggal_verivali'),
					'nama_petugas' => $this->input->post('nama_petugas'),
					'tanggal_pemeriksaan' => $this->input->post('tanggal_pemeriksaan'), 
					'hasil_verivali' => $this->input->post('hasil_verivali')

				);
		$this->db->insert('keterangan_pengesahan', $object2);

	$object3 = array(
					'status_bangunan' => $this->input->post('status_bangunan'),
					'status_lahan' => $this->input->post('status_lahan'), 
					'luas_lantai' => $this->input->post('luas_lantai'), 
					'jenis_lantai_terluas' => $this->input->post('jenis_lantai_terluas'),
					'jenis_dinding_terluas' => $this->input->post('jenis_dinding_terluas'), 
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
		
		$this->db->insert('keterangan_perumahan', $object3);

	$object4 = array(
					'NO_KK' => $no_kk2,
					'jenis_cacat' => $this->input->post('jenis_cacat'),
					'penyakit_kronis' => $this->input->post('penyakit_kronis'), 
					'partisipasi_sekolah' => $this->input->post('partisipasi_sekolah'), 
					'jenjang_pendidikan' => $this->input->post('jenjang_pendidikan'),
					'hub_kepala_keluarga' => $this->input->post('hub_kepala_keluarga'), 
					'ijazah_tertinggi' => $this->input->post('ijazah_tertinggi'),
					'kelas_tertinggi' => $this->input->post('kelas_tertinggi'),
					'lapangan_usaha' => $this->input->post('lapangan_usaha'), 
					'status_kedudukan' => $this->input->post('status_kedudukan'), 
					'KKS' => $this->input->post('KKS'),
					'KIS' => $this->input->post('KIS'), 
					'KIP' => $this->input->post('KIP'),
					'RASKIN' => $this->input->post('RASKIN')
					);			
		
		$this->db->insert('keterangan_sosial_ekonomi', $object4);
		
	$object5 = array(
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
					// 'jml_lahan' => $this->input->post('jml_lahan'),
				    'jml_rumahlain' => $this->input->post('jml_rumahlain'),
					'jml_sapi' => $this->input->post('jml_sapi'),
					'jml_kerbau' => $this->input->post('jml_kerbau'),
					'jml_kuda' => $this->input->post('jml_kuda'),
					'jml_babi' => $this->input->post('jml_babi'),
					'jml_kambing'=> $this->input->post('jml_kambing')
				);			
		
		$this->db->insert('kepemilikan_aset', $object5);

}
	public function updateById($id)
	{

	// 	$nik ='nik';		
	// $id = $this->input->post('NIK');
	// $no = $this->db->query("Select NO_KK from penduduk where NIK=$id")->row();
	// $no_kk2 = $no->NO_KK;
	
	$object1 = array(
					'NIK' => $id,
					'provinsi' => $this->input->post('provinsi'),
					'kabupaten' => $this->input->post('kabupaten'), 
					'kecamatan' => $this->input->post('kecamatan'), 
					'nama_sls' => $this->input->post('nama_sls'),
					'alamat' => $this->input->post('alamat'), 
					'no_urut_rt' => $this->input->post('no_urut_rt'), 
					'nama_krt' => $this->input->post('nama_krt'), 
					'jumlah_ART' => $this->input->post('jumlah_ART'), 
					'jumlah_keluarga' => $this->input->post('jumlah_keluarga')
					// 'no_kk_setiap_ART' => $this->input->post('no_kk_setiap_ART')
					);			
		$this->db->insert('pengenalan_tempat', $object1);
		// $this->db->where('id_pengenalan_tempat', $id);
		// $this->db->update('pengenalan_tempat', $object1);

	$object2 = array(
					'NIK' => $id,
					'tanggal_verivali' => $this->input->post('tanggal_verivali'),
					'nama_petugas' => $this->input->post('nama_petugas'),
					'tanggal_pemeriksaan' => $this->input->post('tanggal_pemeriksaan'), 
					'hasil_verivali' => $this->input->post('hasil_verivali')

				);
		// $this->db->where('id_pengesahan', $id);
		// $this->db->update('keterangan_pengesahan', $object2);
	$this->db->insert('keterangan_pengesahan', $object2);

	$object3 = array(
					'NIK' => $id,
					'status_bangunan' => $this->input->post('status_bangunan'),
					'status_lahan' => $this->input->post('status_lahan'), 
					'luas_lantai' => $this->input->post('luas_lantai'), 
					'jenis_lantai_terluas' => $this->input->post('jenis_lantai_terluas'),
					'jenis_dinding_terluas' => $this->input->post('jenis_dinding_terluas'), 
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
		
		// $this->db->where('id_ket_perumahan', $id);
		// $this->db->update('keterangan_perumahan', $object3);
	$this->db->insert('keterangan_perumahan', $object3);

	$object4 = array(
					// 'NO_KK' => $no_kk2,
					'NIK' => $id,
					'jenis_cacat' => $this->input->post('jenis_cacat'),
					'penyakit_kronis' => $this->input->post('penyakit_kronis'), 
					'partisipasi_sekolah' => $this->input->post('partisipasi_sekolah'), 
					'jenjang_pendidikan' => $this->input->post('jenjang_pendidikan'),
					'hub_kepala_keluarga' => $this->input->post('hub_kepala_keluarga'), 
					'ijazah_tertinggi' => $this->input->post('ijazah_tertinggi'),
					'kelas_tertinggi' => $this->input->post('kelas_tertinggi'),
					'lapangan_usaha' => $this->input->post('lapangan_usaha'), 
					'status_kedudukan' => $this->input->post('status_kedudukan'), 
					'KKS' => $this->input->post('KKS'),
					'KIS' => $this->input->post('KIS'), 
					'KIP' => $this->input->post('KIP'),
					'RASKIN' => $this->input->post('RASKIN')
					);			
		
		// $this->db->where('id_sosial_eko', $id);
		// $this->db->update('keterangan_sosial_ekonomi', $object4);
		$this->db->insert('keterangan_sosial_ekonomi', $object4);

	$object5 = array(
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
					// 'jml_lahan' => $this->input->post('jml_lahan'),
				    'jml_rumahlain' => $this->input->post('jml_rumahlain'),
					'jml_sapi' => $this->input->post('jml_sapi'),
					'jml_kerbau' => $this->input->post('jml_kerbau'),
					'jml_kuda' => $this->input->post('jml_kuda'),
					'jml_babi' => $this->input->post('jml_babi'),
					'jml_kambing'=> $this->input->post('jml_kambing')
				);	

		$this->db->where('NIK', $id);
		$this->db->update('kepemilikan_aset', $object5);
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

	public function getPengTempat($id)
	{
	$this->db->where('id_pengenalan_tempat', $id);
	$query= $this->db->get('pengenalan_tempat');
	return $query->result();
	}

	public function getPengesahan($id)
	{
	$this->db->where('id_pengesahan', $id);
	$query= $this->db->get('keterangan_pengesahan');
	return $query->result();
	}

	public function getKetPerum($id)
	{
	$this->db->where('id_ket_perumahan', $id);
	$query= $this->db->get('keterangan_perumahan');
	return $query->result();
	}

	public function getSosEko($id)
	{
	$this->db->where('id_sosial_eko', $id);
	$query= $this->db->get('keterangan_sosial_ekonomi');
	return $query->result();
	}

	public function getKepAset($id)
	{
	$this->db->where('id_kepemilikan_aset', $id);
	$query= $this->db->get('kepemilikan_aset');
	return $query->result();
	}


	//tampil data
	public function getTampilPengenalanTempat()
	{
		$query = $this->db->query("Select * from pengenalan_tempat");
		return $query->result();
	}

	public function getTampilKeteranganPengesahan()
	{
		$query = $this->db->query("Select * from keterangan_pengesahan");
		return $query->result();
	}

	public function getTampilKeteranganPerumahan()
	{
		$query = $this->db->query("Select * from keterangan_perumahan");
		return $query->result();
	}

	public function getTampilKeteranganSosialEkonomi()
	{
		$query = $this->db->query("Select * from keterangan_sosial_ekonomi");
		return $query->result();
	}

	public function getTampilKepemilikanAset()
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

	//tampil create
	public function getTampilPengenalanTempat1()
	{
		$query = $this->db->query("Select * from pengenalan_tempat");
		return $query->result();
	}

	public function getTampilKeteranganPengesahan2()
	{
		$query = $this->db->query("Select * from keterangan_pengesahan");
		return $query->result();
	}

	public function getTampilKeteranganPerumahan3()
	{
		$query = $this->db->query("Select * from keterangan_perumahan");
		return $query->result();
	}

	public function getTampilKeteranganSosialEkonomi4()
	{
		$query = $this->db->query("Select * from keterangan_sosial_ekonomi");
		return $query->result();
	}

	public function getTampilKepemilikanAset5()
	{
		$query = $this->db->query("Select * from kepemilikan_aset");
		return $query->result();
	}

		public function getTampilPenduduk()
	{
		$query = $this->db->query("Select NO_KK from penduduk");
		return $query->result();
	}



}
