<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class ListFilterSurat extends CI_Controller {
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
	// 				redirect('login','refresh');
	// 			}
	// 		}
	// 	}
	// 	else{
	// 		redirect('logout/out','refresh');
	// 	}
	// }
	public function index()
	{
		$this->load->model('list_FilterSurat');
		$data["surat"] = $this->list_FilterSurat->getTampil();
		$data['user'] = $this->list_FilterSurat->getUser();
		$this->load->view('Surat/FilterSurat', $data);	
	}
	public function create()// sudah di isi di autoloard 
	{
		$this->load->model('list_FilterSurat');
		$this->form_validation->set_rules('NIK', 'NIK', 'trim|required');
		$this->form_validation->set_rules('pendapatan', 'pendapatan', 'trim|required');
		$this->form_validation->set_rules('tanggungan_keluarga', 'tanggungan_keluarga', 'trim|required');
		$this->form_validation->set_rules('kelengkapan_dokumen', 'kelengkapan_dokumen', 'trim|required');
		$this->form_validation->set_rules('status_bangunan', 'status_bangunan', 'trim|required');
		$this->form_validation->set_rules('jml_lahan', 'jml_lahan', 'trim|required');

		$data['user'] = $this->list_FilterSurat->getUser();

		$this->load->model('list_Penduduk');
		$data["penduduk"] = $this->list_Penduduk->getTampilSuratPenduduk();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('Surat/input_data_FilterSurat',$data);
		}
		else{
			$this->list_FilterSurat->insertFilterSurat();
			echo "<script> alert('Data Surat Berhasil Ditambahkan'); window.location.href='';
			</script>";
		}
	}
	// public function update($id)
	// {
	
	// 	$this->load->model('list_FilterSurat');
	// 	$this->form_validation->set_rules('id_penduduk', 'id_penduduk', 'trim|required');
	// 	$this->form_validation->set_rules('tanggal_surat', 'tanggal_surat', 'trim|required');

	// 	$this->load->model('list_FilterSurat');
	// 	$data['surat'] = $this->list_FilterSurat->getSurat($id);

	// 	if($this->form_validation->run() == FALSE) {
	// 		$this->load->view('Surat/edit_data_surat',$data);
	// 	}else{
	// 		$this->list_FilterSurat->updateById($id);
	// 		echo "<script> alert('Data Surat Berhasil Diupdate'); window.location.href='';
	// 		</script>";
	// 	}
	// }
	
	public function delete($id)
	{
		$this->load->model('list_FilterSurat');
		$this->list_FilterSurat->delete($id);
		redirect('ListFIlterSurat','refresh');
	}
}
