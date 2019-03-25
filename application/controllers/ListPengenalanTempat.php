<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class ListPengenalanTempat extends CI_Controller {
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
		$this->load->model('list_pengenalanTempat');
		$data["pengenalan_tempat"] = $this->list_pengenalanTempat->getTampil();
		$data['user'] = $this->list_keteranganPerumahan->getUser();
		$this->load->view('FormPengenalanTempat/pengenalan_tempat');	
	}
	public function create()// sudah di isi di autoloard 
	{
		$this->load->model('list_pengenalanTempat');

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

		$this->load->model('list_pengenalanTempat');
		// $data["pengenalan_tempat"] = $this->list_pengenalanTempat->getTampilPengTempat();
		$data['user'] = $this->list_pengenalanTempat->getUser();

		$this->load->model('list_penduduk');
		$data["penduduk"] = $this->list_penduduk->getTampilPendudukPerum();


		if($this->form_validation->run() == FALSE) {
			$this->load->view('FormPengenalanTempat/input_data_peng_tempat',$data);
		}
		else{
			$this->list_pengenalanTempat->insertPengTempat();
			echo "<script> alert('Data Keterangan Perumahan Berhasil Ditambahkan'); window.location.href='';
			</script>";
		}
	}
	// // public function update($id)
	// // {
	
	// // 	$this->load->model('list_keteranganPerumahan');
	// // 	$this->form_validation->set_rules('status_penguasaan_bangunan', 'status_penguasaan_bangunan', 'trim|required');
	// // 	$this->form_validation->set_rules('status_lahan', 'status_lahan', 'trim|required');
	// // 	$this->form_validation->set_rules('luas_lantai', 'luas_lantai', 'trim|required');
	// // 	$this->form_validation->set_rules('jenis_lantai_terluas', 'jenis_lantai_terluas', 'trim|required');
	// //     $this->form_validation->set_rules('jenis_dinding_terluas', 'jenis_dinding_terluas', 'trim|required');
	// //     $this->form_validation->set_rules('kondisi_dinding', 'kondisi_dinding', 'trim|required');
	// //     $this->form_validation->set_rules('jenis_atap', 'jenis_atap', 'trim|required');
	// //     $this->form_validation->set_rules('kondisi_atap', 'kondisi_atap', 'trim|required');
	// //     $this->form_validation->set_rules('jumlah_kamar', 'jumlah_kamar', 'trim|required');
	// //     $this->form_validation->set_rules('sumber_air_minum', 'sumber_air_minum', 'trim|required');
	// //     $this->form_validation->set_rules('kode_pelanggan_air', 'kode_pelanggan_air', 'trim|required');
	// //     $this->form_validation->set_rules('cara_memperoleh_air', 'cara_memperoleh_air', 'trim|required');
	// //     $this->form_validation->set_rules('sumber_penerangan', 'sumber_penerangan', 'trim|required');
	// //     $this->form_validation->set_rules('daya_terpasang', 'daya_terpasang', 'trim|required');
 // //        $this->form_validation->set_rules('id_pln', 'id_pln', 'trim|required');
 // //        $this->form_validation->set_rules('bahan_bakar_memasak', 'bahan_bakar_memasak', 'trim|required');
 // //        $this->form_validation->set_rules('id_pelanggan_gas', 'id_pelanggan_gas', 'trim|required');
 // //        $this->form_validation->set_rules('fasilitas_bab', 'fasilitas_bab', 'trim|required');
 // //        $this->form_validation->set_rules('jenis_kloset', 'jenis_kloset', 'trim|required');
 // //        $this->form_validation->set_rules('tempat_PAT', 'tempat_PAT', 'trim|required');

	// // 	$data['user'] = $this->list_keteranganPerumahan->getUser();
	// // 	$this->load->model('list_keteranganPerumahan');
	// // 	$data['keterangan_perumahan'] = $this->list_keteranganPerumahan->getKetPerumahan($id);

	// // 	if($this->form_validation->run() == FALSE) {
	// // 		$this->load->view('KepalaDesa/edit_data_ket_perumahan',$data);
	// // 	}else{
	// // 		$this->list_keteranganPerumahan->updateById($id);
	// // 		echo "<script> alert('Data Keterangan Perumahan Berhasil Diupdate'); window.location.href='';
	// // 		</script>";
	// // 	}
	// // }
	
	// public function delete($id)
	// {
	// 	$this->load->model('list_keteranganPerumahan');
	// 	$this->list_keteranganPerumahan->delete($id);
	// 	redirect('listKeteranganPerumahan','refresh');
	// }
}
