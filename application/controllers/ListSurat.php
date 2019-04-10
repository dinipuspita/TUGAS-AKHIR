<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class ListSurat extends CI_Controller {
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
		$this->load->model('list_Surat');
		$data["surat"] = $this->list_Surat->getTampil();
		$data['user'] = $this->list_Surat->getUser();
		$this->load->view('Surat/surat', $data);	
	}
	public function create($nik,$status_surat)// sudah di isi di autoloard 
	{
	
		$this->form_validation->set_rules('id_surat', 'id_surat', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');

		$this->load->model('list_Surat');
		$data['last'] = $this->list_Surat->getLastSurat();
		$data['nik'] = $nik;

		$data['user'] = $this->list_Surat->getUser();

		$this->load->model('list_Penduduk');
		$data["penduduk"] = $this->list_Penduduk->getTampilSuratPenduduk();

		$this->load->model('list_desa');
		$data["desa"] = $this->list_desa->getTampilDesa();

		$this->load->model('list_KepalaDesa');
		$data["kepala_desa"] = $this->list_KepalaDesa->getTampilKepala();

		$this->load->model('list_FilterSurat');
		$data["surat"] = $this->list_FilterSurat->getTampil();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('Surat/input_data_surat',$data);
		}
		else{
			$this->list_Surat->insertSurat($status_surat);
			echo "<script> alert('Data Surat Berhasil Ditambahkan'); window.location.href='';
			</script>";
		}
	}

	// public function update($id)
	// {
	
	// 	$this->form_validation->set_rules('tanggal_surat', 'tanggal_surat', 'trim|required');
	// 	$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');

	// 	$this->load->model('list_Surat');
	// 	$data['surat'] = $this->list_Surat->getsurat($id);
	// 	$data['user'] = $this->list_Surat->getUser();

	// 	// $this->load->model('list_FilterSurat');
	// 	// $data["surat"] = $this->list_FilterSurat->getTampil($id);

	// 	if($this->form_validation->run() == FALSE) {
	// 		$this->load->view('Surat/edit_data_surat',$data);
	// 	}else{
	// 		$this->list_Surat->updateById($id);
	// 		echo "<script> alert('Data Surat Berhasil Diupdate'); window.location.href='';
	// 		</script>";
	// 	}
	// }
	public function update($id)
	{
	
		$this->load->model('list_surat');
		$this->form_validation->set_rules('tanggal_surat', 'tanggal_surat', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');

		$this->load->model('list_surat');
		$data['surat'] = $this->list_surat->getSurat($id);

		$data['user'] = $this->list_surat->getUser();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('Surat/edit_data_surat',$data);
		}else{
			$this->list_surat->updateById($id);
			echo "<script> alert('Data Surat Berhasil Diupdate'); window.location.href='';
			</script>";
		}
	}

	public function delete($id)
	{
		$this->load->model('list_Surat');
		$this->list_Surat->delete($id);
		redirect('ListSurat','refresh');
	}
	public function report($id)
	{
		$this->load->model('list_surat');
		$data["surat"] = $this->list_surat->getTampilSurat($id);
		$this->load->library('pdf');
		$data["surat"] = $this->list_surat->getTampilSurat($id);
		$this->pdf->load_view('Surat/print_surat', $data);
	}

	public function laporanSurat()
	{
	$this->load->model('list_surat');
		$data["surat"] = $this->list_surat->getReportSurat();
	
		if (empty($data['surat'])) {
			echo "<script> alert('Data Surat Masih Kosong'); window.location.href='../ListSurat';
			</script>";

		}else {

	    $this->load->library('pdf');	
		$this->pdf->load_view('Surat/print_laporan', $data);
		}
   }

   public function konfirmasi($id)
	{
		$this->load->model('list_surat');
		$this->list_surat->konfirmasiStatus($id);
		redirect('ListSurat');
	}
}

