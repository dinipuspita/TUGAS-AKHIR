<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class ListKriteriaBantuan extends CI_Controller {
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
		$this->load->model('list_KriteriaBantuan');
		$data["kriteria_bantuan"] = $this->list_KriteriaBantuan->getTampil();
		$data['user'] = $this->list_KriteriaBantuan->getUser();
		$this->load->view('KriteriaBantuan/kriteria', $data);	
	}
	public function create()// sudah di isi di autoloard 
	{
		$this->load->model('list_KriteriaBantuan');
		$this->form_validation->set_rules('isi_kriteria', 'isi_kriteria', 'trim|required');

		$this->load->model('list_KriteriaBantuan');
		$data["kriteria_bantuan"] = $this->list_KriteriaBantuan->getTampilKriteria();
		$data['user'] = $this->list_KriteriaBantuan->getUser();

		$this->load->model('list_bantuan');
		$data["jenis_bantuan"] = $this->list_bantuan->getTampilBantuan();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('KriteriaBantuan/input_data_kriteria',$data);
		}
		else{
			$this->list_KriteriaBantuan->insertKriteria();
			echo "<script> alert('Data Bantuan Berhasil Ditambahkan'); window.location.href='';
			</script>";
		}
	}
	
	public function update($id)
	{
	
		$this->load->model('list_KategoriBantuan');
		$this->form_validation->set_rules('isi_kriteria', 'isi_kriteria', 'trim|required');
		$this->form_validation->set_rules('id_jenis_bantuan', 'fk_bantuan', 'trim|required');

		$this->load->model('list_KriteriaBantuan');
		$data["kriteria_bantuan"] = $this->list_KriteriaBantuan->getTampilKriteria($id);
		$data['user'] = $this->list_KriteriaBantuan->getUser();

		$this->load->model('list_bantuan');
		$data['jenis_bantuan'] = $this->list_bantuan->getBantuan($id);

		if($this->form_validation->run() == FALSE) {
			$this->load->view('KriteriaBantuan/edit_data_kriteria',$data);
		}else{
			$this->list_KriteriaBantuan->updateById($id);
			echo "<script> alert('Data Bantuan Berhasil Diupdate'); window.location.href='';
			</script>";
		}
	}
	
	public function delete($id)
	{
		$this->load->model('list_KriteriaBantuan');
		$this->list_KriteriaBantuan->delete($id);
		redirect('ListKriteriaBantuan','refresh');
	}
	
}
