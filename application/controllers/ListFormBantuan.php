<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class listFormBantuan extends CI_Controller {
	// public function __construct()
	
	// {
	// 	parent::__construct();
	// 	if($this->session->userdata('logged_in')){
	// 		$session_data = $this->session->userdata('logged_in');
	// 		$data['username'] = $session_data['username'];
	// 		$data['level'] = $session_data['level'];
	// 		$current_controller = $this->router->fetch_class();
	// 		$this->load->library('acl');
	// 		if (! $this->acl->is_public($current_controller))
	// 		{
	// 			if (! $this->acl->is_allowed($current_controller, $data['level']))
	// 			{
	// 				redirect('admin','refresh');
	// 			}
	// 		}
	// 		$this->load->model('Dashboardmod');
	// 	}
	// 	else{
	// 		redirect('logout/out','refresh');
	// 	}
	// }
	public function index()
	{
		$this->load->model('List_FormBantuan');
		$data["pengenalan_tempat"] = $this->List_FormBantuan->getTampilPengenalanTempat();
		$data["keterangan_pengesahan"] = $this->List_FormBantuan->getTampilKeteranganPengesahan();
		$data["keterangan_perumahan"] = $this->List_FormBantuan->getTampilKeteranganPerumahan();
		$data["keterangan_sosial_ekonomi"] = $this->List_FormBantuan->getTampilKeteranganSosialEkonomi();
		$data["kepemilikan_aset"] = $this->List_FormBantuan->getTampilKepemilikanAset();
		$data['user'] = $this->List_FormBantuan->getUser();
		$this->load->view('FormBantuan/Tampil_DataBantuan', $data);	
	}
	public function create()// sudah di isi di autoloard 
	{
		//Form Pengenalan Tempat
		$this->load->model('List_FormBantuan');
	    $this->form_validation->set_rules('provinsi', 'provinsi', 'trim|required');
		$this->form_validation->set_rules('provinsi', 'provinsi', 'trim|required');
		$this->form_validation->set_rules('kabupaten', 'kabupaten', 'trim|required');
		$this->form_validation->set_rules('kecamatan', 'kecamatan', 'trim|required');
		$this->form_validation->set_rules('nama_sls', 'nama_sls', 'trim|required');
	    $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	    $this->form_validation->set_rules('no_urut_rt', 'no_urut_rt', 'trim|required');
	    $this->form_validation->set_rules('nama_krt', 'nama_krt', 'trim|required');
	    $this->form_validation->set_rules('jumlah_ART', 'jumlah_ART', 'trim|required');
	    $this->form_validation->set_rules('jumlah_keluarga', 'jumlah_keluarga', 'trim|required');
	    $this->form_validation->set_rules('no_kk_setiap_ART', 'no_kk_setiap_ART', 'trim|required');

	    //Form Pengesahan
	    $this->form_validation->set_rules('tanggal_verivali', 'tanggal_verivali', 'trim|required');
		$this->form_validation->set_rules('nama_petugas', 'nama_petugas', 'trim|required');
		$this->form_validation->set_rules('tanggal_pemeriksaan', 'tanggal_pemeriksaan', 'trim|required');
		$this->form_validation->set_rules('hasil_verivali', 'hasil_verivali', 'trim|required');

		// Form Keterangan Perumahan
		$this->form_validation->set_rules('status_bangunan', 'status_bangunan', 'trim|required');
		$this->form_validation->set_rules('status_lahan', 'status_lahan', 'trim|required');
		$this->form_validation->set_rules('luas_lantai', 'luas_lantai', 'trim|required');
		$this->form_validation->set_rules('jenis_lantai_terluas', 'jenis_lantai_terluas', 'trim|required');
	    $this->form_validation->set_rules('jenis_dinding_terluas', 'jenis_dinding_terluas', 'trim|required');
	    $this->form_validation->set_rules('kondisi_dinding', 'kondisi_dinding', 'trim|required');
	    $this->form_validation->set_rules('jenis_atap', 'jenis_atap', 'trim|required');
	    $this->form_validation->set_rules('kondisi_atap', 'kondisi_atap', 'trim|required');
	    $this->form_validation->set_rules('jumlah_kamar', 'jumlah_kamar', 'trim|required');
	    $this->form_validation->set_rules('sumber_air_minum', 'sumber_air_minum', 'trim|required');
	    $this->form_validation->set_rules('kode_pelanggan_air', 'kode_pelanggan_air', 'trim|required');
	    $this->form_validation->set_rules('cara_memperoleh_air', 'cara_memperoleh_air', 'trim|required');
	    $this->form_validation->set_rules('sumber_penerangan', 'sumber_penerangan', 'trim|required');
	    $this->form_validation->set_rules('daya_terpasang', 'daya_terpasang', 'trim|required');
        $this->form_validation->set_rules('id_pln', 'id_pln', 'trim|required');
        $this->form_validation->set_rules('bahan_bakar_memasak', 'bahan_bakar_memasak', 'trim|required');
        $this->form_validation->set_rules('id_pelanggan_gas', 'id_pelanggan_gas', 'trim|required');
        $this->form_validation->set_rules('fasilitas_bab', 'fasilitas_bab', 'trim|required');
        $this->form_validation->set_rules('jenis_kloset', 'jenis_kloset', 'trim|required');
        $this->form_validation->set_rules('tempat_PAT', 'tempat_PAT', 'trim|required');

        //Form Sosial Ekonomi
        $this->form_validation->set_rules('hub_kepala_keluarga', 'hub_kepala_keluarga', 'trim|required');
		$this->form_validation->set_rules('jenis_cacat', 'jenis_cacat', 'trim|required');
		$this->form_validation->set_rules('penyakit_kronis', 'penyakit_kronis', 'trim|required');
		$this->form_validation->set_rules('partisipasi_sekolah', 'partisipasi_sekolah', 'trim|required');
	    $this->form_validation->set_rules('jenjang_pendidikan', 'jenjang_pendidikan', 'trim|required');
	    $this->form_validation->set_rules('ijazah_tertinggi', 'ijazah_tertinggi', 'trim|required');
	    $this->form_validation->set_rules('kelas_tertinggi', 'kelas_tertinggi', 'trim|required');
	    $this->form_validation->set_rules('lapangan_usaha', 'lapangan_usaha', 'trim|required');
	    $this->form_validation->set_rules('status_kedudukan', 'status_kedudukan', 'trim|required');
	    $this->form_validation->set_rules('KKS', 'KKS', 'trim|required');
	    $this->form_validation->set_rules('KIS', 'KIS', 'trim|required');
	    $this->form_validation->set_rules('KIP', 'KIP', 'trim|required');
	    $this->form_validation->set_rules('RASKIN', 'RASKIN', 'trim|required');


		//Form Kepemilikan Asset
		$this->form_validation->set_rules('jml_tabung_gas', 'jml_tabung_gas', 'trim|required');
		$this->form_validation->set_rules('jml_AC', 'jml_AC', 'trim|required');
		$this->form_validation->set_rules('jml_pemanas_air', 'jml_pemanas_air', 'trim|required');
		$this->form_validation->set_rules('jml_telepon_rumah', 'jml_telepon_rumah', 'trim|required');
		$this->form_validation->set_rules('jml_televisi', 'jml_televisi', 'trim|required');
	    $this->form_validation->set_rules('jml_emas', 'jml_emas', 'trim|required');
	    $this->form_validation->set_rules('jml_komputer', 'jml_komputer', 'trim|required');
	    $this->form_validation->set_rules('jml_sepeda', 'jml_sepeda', 'trim|required');
	    $this->form_validation->set_rules('jml_spdmotor', 'jml_spdmotor', 'trim|required');
	    $this->form_validation->set_rules('jml_mobil', 'jml_mobil', 'trim|required');
	    $this->form_validation->set_rules('jml_perahu', 'jml_perahu', 'trim|required');
	    $this->form_validation->set_rules('jml_motor_tempel', 'jml_motor_tempel', 'trim|required');
	    $this->form_validation->set_rules('jml_perahumotor', 'jml_perahumotor', 'trim|required');
	    $this->form_validation->set_rules('jml_kapal', 'jml_kapal', 'trim|required');
	    $this->form_validation->set_rules('jml_lahan', 'jml_lahan', 'trim|required');
        $this->form_validation->set_rules('jml_rumahlain', 'jml_rumahlain', 'trim|required');
        $this->form_validation->set_rules('jml_sapi', 'jml_sapi', 'trim|required');
        $this->form_validation->set_rules('jml_kerbau', 'jml_kerbau', 'trim|required');
        $this->form_validation->set_rules('jml_kuda', 'jml_kuda', 'trim|required');
        $this->form_validation->set_rules('jml_babi', 'jml_babi', 'trim|required');
        $this->form_validation->set_rules('jml_kambing', 'jml_kambing', 'trim|required');

		$this->load->model('List_FormBantuan');
		$data["pengenalan_tempat"] = $this->List_FormBantuan->getTampilPengenalanTempat1();
		$data["keterangan_pengesahan"] = $this->List_FormBantuan->getTampilKeteranganPengesahan2();
		$data["keterangan_perumahan"] = $this->List_FormBantuan->getTampilKeteranganPerumahan3();
		$data["keterangan_sosial_ekonomi"] = $this->List_FormBantuan->getTampilKeteranganSosialEkonomi4();
		$data["kepemilikan_aset"] = $this->List_FormBantuan->getTampilKepemilikanAset5();
		$data['user'] = $this->List_FormBantuan->getUser();

		$this->load->model('list_penduduk');
		$data["penduduk"] = $this->list_penduduk->getTampilPendudukPerum();


		if($this->form_validation->run() == FALSE) {
			$this->load->view('FormBantuan/input_data_bantuan',$data);
		}
		else{
			$this->List_FormBantuan->insertFormBantuan();
			echo "<script> alert('Data FOrm Bantuan Berhasil Ditambahkan'); window.location.href='';
			</script>";
		}
	}
	
}
