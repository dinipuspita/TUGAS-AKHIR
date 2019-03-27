<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class ListKategoriBantuan extends CI_Controller {
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
		$this->load->model('list_KategoriBantuan');
		$data["kategori_bantuan"] = $this->list_KategoriBantuan->getTampil();
		$this->load->view('KategoriBantuan/kategoriBantuan', $data);	
	}
	public function create()// sudah di isi di autoloard 
	{
		$this->load->model('list_KategoriBantuan');
		$this->form_validation->set_rules('nama_kategori', 'nama_kategori', 'trim|required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('KategoriBantuan/input_data_kategori',$data);
		}
		else{
			$this->list_KategoriBantuan->insertKategori();
			echo "<script> alert('Data Kategori Bantuan Berhasil Ditambahkan'); window.location.href='';
			</script>";
		}
	}
	public function update($id)
	{
	
		$this->load->model('list_KategoriBantuan');
		$this->form_validation->set_rules('nama_kategori', 'nama_kategori', 'trim|required');

		$this->load->model('List_KategoriBantuan');
		$data['kategori_bantuan'] = $this->ListKategoriBantuan->getKategoriBantuan($id);

		if($this->form_validation->run() == FALSE) {
			$this->load->view('KategoriBantuan/edit_data_kategori',$data);
		}else{
			$this->list_KategoriBantuan->updateById($id);
			echo "<script> alert('Data Kategori Bantuan Berhasil Diupdate'); window.location.href='';
			</script>";
		}
	}
	
	public function delete($id)
	{
		$this->load->model('list_KategoriBantuan');
		$this->list_KategoriBantuan->delete($id);
		redirect('ListKategoriBantuan','refresh');
	}
}
