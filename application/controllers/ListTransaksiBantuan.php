<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class ListTransaksiBantuan extends CI_Controller {
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
		$this->load->model('list_TransaksiBantuan');
		$data["transaksi_bantuan"] = $this->list_TransaksiBantuan->getTampil();
		$data['user'] = $this->list_TransaksiBantuan->getUser();
		$this->load->view('TransaksiBantuan/transaksi', $data);	
	}
	public function create()// sudah di isi di autoloard 
	{
		$this->load->model('list_TransaksiBantuan');
		$this->form_validation->set_rules('id_jenis_bantuan', 'id_jenis_bantuan', 'trim|required');
		$this->form_validation->set_rules('NIK', 'NIK', 'trim|required');

		$this->load->model('list_penduduk');
		$data['penduduk'] = $this->list_penduduk->getTampil();

		$this->load->model('list_bantuan');
		$data["jenis_bantuan"] = $this->list_bantuan->getTampilBantuan();

		$data['user'] = $this->list_TransaksiBantuan->getUser();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('TransaksiBantuan/input_data_transaksi',$data);
		}
		else{
			$this->list_TransaksiBantuan->insertTransaksi();
			echo "<script> alert('Data Trasaksi Berhasil Ditambahkan'); window.location.href='';
			</script>";
		}
	}
	
	// public function update($id)
	// {
	
	// 	$this->load->model('list_KategoriBantuan');
	// 	$this->form_validation->set_rules('isi_kriteria', 'isi_kriteria', 'trim|required');
	// 	$this->form_validation->set_rules('fk_jenis_bantuan', 'fk_jenis_bantuan', 'trim|required');

	// 	$this->load->model('list_KriteriaBantuan');
	// 	$data["kriteria_bantuan"] = $this->list_KriteriaBantuan->getTampilKriteria($id);
	// 	$data['user'] = $this->list_KriteriaBantuan->getUser();

	// 	$this->load->model('list_bantuan');
	// 	$data['jenis_bantuan'] = $this->list_bantuan->getTampilBantuan($id);

	// 	if($this->form_validation->run() == FALSE) {
	// 		$this->load->view('KriteriaBantuan/edit_data_kriteria',$data);
	// 	}else{
	// 		$this->list_KriteriaBantuan->updateById($id);
	// 		echo "<script> alert('Data Bantuan Berhasil Diupdate'); window.location.href='';
	// 		</script>";
	// 	}
	// }
	
	public function delete($id)
	{
		$this->load->model('list_TransaksiBantuan');
		$this->list_TransaksiBantuan->delete($id);
		redirect('ListTrasnsaksiBantuan','refresh');
	}
	
}
