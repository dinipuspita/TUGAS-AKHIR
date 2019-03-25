<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class ListKepalaDesa extends CI_Controller {
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
		$this->load->model('list_KepalaDesa');
		$data["kepala_desa"] = $this->list_KepalaDesa->getTampil();
		$data['user'] = $this->list_KepalaDesa->getUser();
		$this->load->view('KepalaDesa/kepalaDesa',$data);	
	}
	public function create()// sudah di isi di autoloard 
	{
		$this->load->model('list_KepalaDesa');
		$this->form_validation->set_rules('nama_kepala_desa', 'nama_kepala_desa', 'trim|required');

		$this->load->model('list_KepalaDesa');
		$data["kepala_desa"] = $this->list_KepalaDesa->getTampilKepala();
		$data['user'] = $this->list_KepalaDesa->getUser();

		$this->load->model('list_desa');
		$data["desa"] = $this->list_desa->getTampilDesa();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('KepalaDesa/input_data_kepdes',$data);
		}
		else{
			$this->list_KepalaDesa->insertKepdes();
			echo "<script> alert('Data Kepala Desa Berhasil Ditambahkan'); window.location.href='';
			</script>";
		}
	}
	public function update($id)
	{
	
		$this->load->model('list_KepalaDesa');
		$this->form_validation->set_rules('nama_kepala_desa', 'nama_kepala_desa', 'trim|required');
		$this->form_validation->set_rules('id_desa', 'id_desa', 'trim|required');

		$data['user'] = $this->list_KepalaDesa->getUser();

		$this->load->model('list_KepalaDesa');
		$data['kepala_desa'] = $this->list_KepalaDesa->getKepalaDesa($id);

		$this->load->model('list_desa');
		$data["desa"] = $this->list_desa->getTampilDesa($id);

		if($this->form_validation->run() == FALSE) {
			$this->load->view('KepalaDesa/edit_data_kepdes',$data);
		}else{
			$this->list_KepalaDesa->updateById($id);
			echo "<script> alert('Data Kepala Desa Berhasil Diupdate'); window.location.href='';
			</script>";
		}
	}
	
	public function delete($id)
	{
		$this->load->model('list_KepalaDesa');
		$this->list_KepalaDesa->delete($id);
		redirect('listKepalaDesa','refresh');
	}
}
