<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class ListBantuan extends CI_Controller {
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
		$this->load->model('list_Bantuan');
		$data["jenis_bantuan"] = $this->list_Bantuan->getTampil();
		$data['user'] = $this->list_Bantuan->getUser();
		$this->load->view('Bantuan/bantuan', $data);	
	}
	public function create()// sudah di isi di autoloard 
	{
		$this->load->model('list_Bantuan');
		$this->form_validation->set_rules('nama_bantuan', 'nama_bantuan', 'trim|required');

		$this->load->model('list_KategoriBantuan');
		$data["kategori_bantuan"] = $this->list_KategoriBantuan->getTampilKategori();
		$data['user'] = $this->list_Bantuan->getUser();

		$this->load->model('list_bantuan');
		$data["jenis_bantuan"] = $this->list_bantuan->getTampilBantuan();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('Bantuan/input_data_bantuan',$data);
		}
		else{
			$this->list_Bantuan->insertBantuan();
			echo "<script> alert('Data Bantuan Berhasil Ditambahkan'); window.location.href='';
			</script>";
		}
	}
	// public function update($id)
	// {
	
	// 	$this->load->model('list_Bantuan');
	// 	$this->form_validation->set_rules('nama_bantuan', 'nama_bantuan', 'trim|required');
	// 	$this->form_validation->set_rules('id_kategori', 'fk_kategori', 'trim|required');

	// 	$this->load->model('list_Bantuan');

	// 	$data['user'] = $this->list_Bantuan->getUser();
	// 	$data['jenis_bantuan'] = $this->list_Bantuan->getBantuan($id);

		// $this->load->model('list_KategoriBantuan');
		// $data["kategori_bantuan"] = $this->list_KategoriBantuan->getTampilKategori();

	// 	if($this->form_validation->run() == FALSE) {
	// 		$this->load->view('Bantuan/edit_data_bantuan',$data);
	// 	}else{
	// 		$this->list_Bantuan->updateById($id);
	// 		echo "<script> alert('Data Bantuan Berhasil Diupdate'); window.location.href='';
	// 		</script>";
	// 	}
	// }
	public function update($id)
	{
	
		$this->load->model('list_Bantuan');
		$this->form_validation->set_rules('nama_bantuan', 'nama_bantuan', 'trim|required');
		$this->form_validation->set_rules('id_kategori', 'fk_kategori', 'trim|required');

		$this->load->model('list_KategoriBantuan');
		$data["kategori_bantuan"] = $this->list_KategoriBantuan->getTampilKategori($id);
		$data['user'] = $this->list_Bantuan->getUser();

		$this->load->model('list_bantuan');
		$data['jenis_bantuan'] = $this->list_Bantuan->getBantuan($id);

		if($this->form_validation->run() == FALSE) {
			$this->load->view('Bantuan/edit_data_bantuan',$data);
		}else{
			$this->list_bantuan->updateById($id);
			echo "<script> alert('Data Bantuan Berhasil Diupdate'); window.location.href='';
			</script>";
		}
	}
	
	public function delete($id)
	{
		$this->load->model('list_bantuan');
		$this->list_bantuan->delete($id);
		redirect('listbantuan','refresh');
	}
	public function detail($id)
	{
		// var_dump($data['bantuan']);
  //       die();  
		$this->load->model('list_bantuan');
		$data['jenis_bantuan'] = $this->list_bantuan->getTampilDetail($id);
		$this->load->view('Bantuan/detailBantuan', $data);	
	}
}
