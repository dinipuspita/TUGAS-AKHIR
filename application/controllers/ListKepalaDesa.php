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
		$data["kepala_desa"] = $this->list_KepalaDesa->getTampil(); //$nama variabel dari array kepaladesa yg ditampilkan pada model list_kepaladesa
		$data['user'] = $this->list_KepalaDesa->getUser();
		$this->load->view('KepalaDesa/kepalaDesa',$data);	
	}
	public function create()// sudah di isi di autoloard 
	{
		$this->load->model('list_KepalaDesa');
		$this->form_validation->set_rules('nama_kepala_desa', 'nama_kepala_desa', 'trim|required');
		$this->form_validation->set_rules('jabatan_mulai', 'jabatan_mulai', 'trim|required');
		$this->form_validation->set_rules('jabatan_selesai', 'jabatan_selesai', 'trim|required');

		$this->load->model('list_KepalaDesa');
		$data["kepala_desa"] = $this->list_KepalaDesa->getTampilKepala(); //$nama variabel dari array kepaladesa yg mengambil data kepaladesa

		$data['user'] = $this->list_KepalaDesa->getUser();

		$this->load->model('list_desa');
		$data["desa"] = $this->list_desa->getTampilDesa2();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('KepalaDesa/input_data_kepdes',$data);
		}
		else{
			$this->list_KepalaDesa->insertKepdes(); // dimana pada model list_kepala desa melakukan insertkepaladesa
			echo "<script> alert('Data Kepala Desa Berhasil Ditambahkan'); window.location.href='';
			</script>";
		}
	}
	public function update($id) //update berdasarkan parameter id
	{
	
		$this->load->model('list_KepalaDesa');
		$this->form_validation->set_rules('nama_kepala_desa', 'nama_kepala_desa', 'trim|required');
		$this->form_validation->set_rules('id_desa', 'id_desa', 'trim|required');
		$this->form_validation->set_rules('jabatan_mulai', 'jabatan_mulai', 'trim|required');
		$this->form_validation->set_rules('jabatan_selesai', 'jabatan_selesai', 'trim|required');

		$data['user'] = $this->list_KepalaDesa->getUser();

		$this->load->model('list_KepalaDesa');
		$data['kepala_desa'] = $this->list_KepalaDesa->getKepalaDesa($id); //$nama variabel dari array kepaladesa yg mengambil data kepaladesa

		$this->load->model('list_desa');
		$data["desa"] = $this->list_desa->getTampilDesa2($id);

		if($this->form_validation->run() == FALSE) {
			$this->load->view('KepalaDesa/edit_data_kepdes',$data);
		}else{
			$this->list_KepalaDesa->updateById($id); // dimana pada model list_kepaladesa melakukan updateKepalaDesa
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
