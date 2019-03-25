<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class ListDesa extends CI_Controller {
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
		$this->load->model('list_desa');
		$data["desa"] = $this->list_desa->getTampil();
		$data['user'] = $this->list_desa->getUser();
		$this->load->view('Desa/desa', $data);	
	}
	public function create()// sudah di isi di autoloard 
	{
		$this->load->model('list_desa');
		$this->form_validation->set_rules('nama_desa', 'nama_desa', 'trim|required');
		$this->form_validation->set_rules('kode_pos', 'kode_pos', 'trim|required');
		$this->form_validation->set_rules('no_telepon', 'no_telepon', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		// $this->form_validation->set_rules('id_kepala_desa', 'id_kepala_desa', 'trim|required');
		$data['user'] = $this->list_desa->getUser();
		$this->load->model('list_desa');
		$data["desa"] = $this->list_desa->getTampil();

		// $this->load->model('list_KepalaDesa');
		// $data["kepala_desa"] = $this->list_KepalaDesa->getTampilKepala();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('Desa/input_data_desa',$data);
		}
		else{
			$this->list_desa->insertDesa();
			echo "<script> alert('Data Desa Berhasil Ditambahkan'); window.location.href='';
			</script>";
		}
	}
	public function update($id)
	{
	
		$this->form_validation->set_rules('nama_desa', 'nama_desa', 'trim|required');
		// $this->form_validation->set_rules('fk_id_kepala_desa', 'fk_id_kepala_desa', 'trim|required');
		$this->form_validation->set_rules('kode_pos', 'kode_pos', 'trim|required');
		$this->form_validation->set_rules('no_telepon', 'no_telepon', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');

		$this->load->model('list_desa');
		$data['desa'] = $this->list_desa->getDesa($id);
		$data['user'] = $this->list_desa->getUser();

		// $this->load->model('list_KepalaDesa');
		// $data["kepala_desa"] = $this->list_KepalaDesa->getTampilKepala($id);

		if($this->form_validation->run() == FALSE) {
			$this->load->view('Desa/edit_data_desa',$data);
		}else{
			$this->list_desa->updateById($id);
			echo "<script> alert('Data Desa Berhasil Diupdate'); window.location.href='';
			</script>";
		}
	}
	
	public function delete($id)
	{
		$this->load->model('list_desa');
		$this->list_desa->delete($id);
		redirect('ListDesa','refresh');
	}

}
