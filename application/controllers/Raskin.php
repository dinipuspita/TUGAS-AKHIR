<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class Raskin extends CI_Controller {
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
		$this->load->model('list_raskin');
		$data["raskin"] = $this->list_raskin->getTampil();
		$this->load->view('Raskin/raskin', $data);	
	}
	public function create()// sudah di isi di autoloard 
	{

		$this->load->model('list_Raskin');
		$this->form_validation->set_rules('tanggungan_keluarga', 'tanggungan_keluarga', 'trim|required');

		$this->load->model('list_penduduk');
		$data['penduduk'] = $this->list_penduduk->getTampilPendudukRaskin();

		$this->load->model('list_bantuan');
		$data['bantuan'] = $this->list_bantuan->getTampilBantuanRaskin();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('Raskin/input_data_raskin',$data);
		}
		else{
			$this->list_Raskin->insertRaskin();
			echo "<script> alert('Data Penerima Raskin Berhasil Ditambahkan'); window.location.href='';
			</script>";
		}
	}
	
	public function update($id)
	{
	
		$this->load->model('list_raskin');
		$this->form_validation->set_rules('tanggungan_keluarga', 'tanggungan_keluarga', 'trim|required');
		$this->form_validation->set_rules('fk_bantuan', 'fk_bantuan', 'trim|required');
		$this->form_validation->set_rules('fk_penduduk', 'fk_penduduk', 'trim|required');
		$this->form_validation->set_rules('fk_bantuan', 'fk_bantuan', 'trim|required');

		$this->load->model('list_raskin');
		$data['raskin'] = $this->list_raskin->getRaskin($id);

		$this->load->model('list_penduduk');
		$data["penduduk"] = $this->list_penduduk->getTampilPendudukRaskin($id);

		$this->load->model('list_bantuan');
		$data["bantuan"] = $this->list_bantuan->getTampilBantuanRaskin($id);


		if($this->form_validation->run() == FALSE) {
			$this->load->view('Raskin/edit_data_raskin',$data);
		}else{
			$this->list_raskin->updateById($id);
			echo "<script> alert('Data Penerima Raskin Berhasil Diupdate'); window.location.href='';
			</script>";
		}
	}
	
	public function delete($id)
	{
		$this->load->model('list_Raskin');
		$this->list_Raskin->delete($id);
		redirect('raskin','refresh');
	}
	public function report()
	{
		
		$this->form_validation->set_rules('id_desa', 'id_desa', 'trim|required');	
		$this->load->model('list_penduduk');
		$data["Penduduk"] = $this->list_penduduk->getTampilPendudukRaskin();
		$this->load->model('list_desa');
		$data["desa"] = $this->list_desa->getTampilDesa();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('Raskin/laporan_raskin',$data);

		}else{

			$this->load->model('list_raskin');
			$data["raskin"] = $this->list_raskin->getReport();
			$this->load->library('pdf');
			$this->pdf->load_view('Raskin/laporan', $data);
		}

	}
	// public function report($id)
	// {
	// 	$this->load->model('list_penduduk');
	// 	$data["penduduk"] = $this->list_penduduk->getTampilPenduduk($id);
	// 	$this->load->library('pdf');
	// 	$this->pdf->load_view('Penduduk/print_penduduk', $data);
	// }

}
