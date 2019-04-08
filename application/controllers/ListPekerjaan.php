<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class ListPekerjaan extends CI_Controller {
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
		$this->load->model('list_pekerjaan');
		$data["pekerjaan"] = $this->list_pekerjaan->getTampil();
		$data['user'] = $this->list_pekerjaan->getUser();
		$this->load->view('Pekerjaan/pekerjaan', $data);	
	}
	public function create()// sudah di isi di autoloard 
	{
		$this->load->model('list_pekerjaan');
		$this->form_validation->set_rules('nama_pekerjaan', 'nama_pekerjaan', 'trim|required');

		$data['user'] = $this->list_pekerjaan->getUser();

		$this->load->model('list_pekerjaan');
		$data["pekerjaan"] = $this->list_pekerjaan->getTampilPekerjaan();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('Pekerjaan/input_data_pekerjaan',$data);
		}
		else{
			$this->list_pekerjaan->insertPekerjaan();
			echo "<script> alert('Data Pekerjaan Berhasil Ditambahkan'); window.location.href='';
			</script>";
		}
	}
	
	public function update($id)
	{
	
		$this->load->model('list_pekerjaan');
		$this->form_validation->set_rules('nama_pekerjaan', 'nama_pekerjaan', 'trim|required');

		$this->load->model('list_pekerjaan');
		$data['pekerjaan'] = $this->list_pekerjaan->getPekerjaan($id);

		$data['user'] = $this->list_pekerjaan->getUser();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('Pekerjaan/edit_data_pekerjaan',$data);
		}else{
			$this->list_pekerjaan->updateById($id);
			echo "<script> alert('Data Pekerjaan Berhasil Diupdate'); window.location.href='';
			</script>";
		}
	}
	
	public function delete($id)
	{
		$this->load->model('list_pekerjaan');
		$this->list_pekerjaan->delete($id);
		redirect('ListPekerjaan','refresh');
	}
	
}
