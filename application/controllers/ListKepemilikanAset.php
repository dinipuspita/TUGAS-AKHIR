<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class listKepemilikanAset extends CI_Controller {
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
		$this->load->model('List_KepemilikanAset');
		$data["kepemilikan_aset"] = $this->list_kepemilikanAset->getTampil();
		$data['user'] = $this->list_kepemilikanAset->getUser();
		$this->load->view('FormKetAset/keterangan_kepemilikanAset', $data);	
	}
	public function create()// sudah di isi di autoloard 
	{
		$this->load->model('list_kepemilikanAset');
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

		$this->load->model('list_KepemilikanAset');
		$data["kepemilikan_aset"] = $this->list_KepemilikanAset->getTampilKetAset();
		$data['user'] = $this->list_KepemilikanAset->getUser();

		$this->load->model('list_penduduk');
		$data["penduduk"] = $this->list_penduduk->getTampilPendudukPerum();


		if($this->form_validation->run() == FALSE) {
			$this->load->view('FormKetAset/input_data_ket_aset',$data);
		}
		else{
			$this->list_KepemilikanAset->insertKetAset();
			echo "<script> alert('Data Kepemilikan aset Berhasil Ditambahkan'); window.location.href='';
			</script>";
		}
	}
	// public function update($id)
	// {
	
	// 	$this->load->model('list_KeteranganAset');
	// 	$this->form_validation->set_rules('status_penguasaan_bangunan', 'status_penguasaan_bangunan', 'trim|required');
	// 	$this->form_validation->set_rules('status_lahan', 'status_lahan', 'trim|required');
	// 	$this->form_validation->set_rules('luas_lantai', 'luas_lantai', 'trim|required');
	// 	$this->form_validation->set_rules('jenis_lantai_terluas', 'jenis_lantai_terluas', 'trim|required');
	//     $this->form_validation->set_rules('jenis_dinding_terluas', 'jenis_dinding_terluas', 'trim|required');
	//     $this->form_validation->set_rules('kondisi_dinding', 'kondisi_dinding', 'trim|required');
	//     $this->form_validation->set_rules('jenis_atap', 'jenis_atap', 'trim|required');
	//     $this->form_validation->set_rules('kondisi_atap', 'kondisi_atap', 'trim|required');
	//     $this->form_validation->set_rules('jumlah_kamar', 'jumlah_kamar', 'trim|required');
	//     $this->form_validation->set_rules('sumber_air_minum', 'sumber_air_minum', 'trim|required');
	//     $this->form_validation->set_rules('kode_pelanggan_air', 'kode_pelanggan_air', 'trim|required');
	//     $this->form_validation->set_rules('cara_memperoleh_air', 'cara_memperoleh_air', 'trim|required');
	//     $this->form_validation->set_rules('sumber_penerangan', 'sumber_penerangan', 'trim|required');
	//     $this->form_validation->set_rules('daya_terpasang', 'daya_terpasang', 'trim|required');
 //        $this->form_validation->set_rules('id_pln', 'id_pln', 'trim|required');
 //        $this->form_validation->set_rules('bahan_bakar_memasak', 'bahan_bakar_memasak', 'trim|required');
 //        $this->form_validation->set_rules('id_pelanggan_gas', 'id_pelanggan_gas', 'trim|required');
 //        $this->form_validation->set_rules('fasilitas_bab', 'fasilitas_bab', 'trim|required');
 //        $this->form_validation->set_rules('jenis_kloset', 'jenis_kloset', 'trim|required');
 //        $this->form_validation->set_rules('tempat_PAT', 'tempat_PAT', 'trim|required');

	// 	$data['user'] = $this->list_keteranganPerumahan->getUser();
	// 	$this->load->model('list_keteranganPerumahan');
	// 	$data['keterangan_perumahan'] = $this->list_keteranganPerumahan->getKetPerumahan($id);

	// 	if($this->form_validation->run() == FALSE) {
	// 		$this->load->view('KepalaDesa/edit_data_ket_perumahan',$data);
	// 	}else{
	// 		$this->list_keteranganPerumahan->updateById($id);
	// 		echo "<script> alert('Data Keterangan Perumahan Berhasil Diupdate'); window.location.href='';
	// 		</script>";
	// 	}
	// }
	
	public function delete($id)
	{
		$this->load->model('List_KepemilikanAset');
		$this->list_KepemilikanAset->delete($id);
		redirect('ListKepemilikanAset','refresh');
	}
}
