<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class ListFilterSurat extends CI_Controller {
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
		$this->load->model('list_FilterSurat');
		$data["surat"] = $this->list_FilterSurat->getTampil();
		$data["suratByDinsos"] = $this->list_FilterSurat->getTampilSuratDinsos();
		$data['user'] = $this->list_FilterSurat->getUser();
		$data["jenis_bantuan"] = $this->list_FilterSurat->getTampilBantuan();

		$this->load->view('Surat/Surat', $data);	
	}
	public function create()// sudah di isi di autoloard 
	{
		$this->load->model('list_FilterSurat');
		$this->form_validation->set_rules('NIK', 'NIK', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');

		$this->form_validation->set_rules('pendapatan', 'pendapatan', 'trim|required');
		$this->form_validation->set_rules('tanggungan_keluarga', 'tanggungan_keluarga', 'trim|required');
		$this->form_validation->set_rules('kelengkapan_dokumen', 'kelengkapan_dokumen', 'trim|required');
		$this->form_validation->set_rules('jml_lahan', 'jml_lahan', 'trim|required');

		$this->load->model('list_Filtersurat');
		$data['user'] = $this->list_FilterSurat->getUser();

		$this->load->model('list_Penduduk');
		$data["penduduk"] = $this->list_Penduduk->getTampilSuratPenduduk();

		$this->load->model('list_desa');
		$data["desa"] = $this->list_desa->getTampilDesa();

		$this->load->model('list_KepalaDesa');
		$data["kepala_desa"] = $this->list_KepalaDesa->getTampilKepala();

		$this->load->model('list_Penduduk');
		$data["penduduk"] = $this->list_Penduduk->getTampilSuratPenduduk();

		$this->load->model('list_FilterSurat');
		$data["surat"] = $this->list_FilterSurat->getTampil();

		$this->load->model('List_FormBantuan');
		$data["kepemilikan_aset"] = $this->List_FormBantuan->getTampilKepemilikanAset5();



		if($this->form_validation->run() == FALSE) {
			$this->load->view('Surat/input_data_FilterSurat',$data);
		}
		else{
			$this->list_FilterSurat->insertFilterSurat();
			echo "<script> alert('Data Surat Berhasil Ditambahkan'); window.location.href='';
			</script>";
		}
	}


	public function getHitungNoKK(){
		$this->load->model('list_Filtersurat');
		$nokk = $this->input->post('nokk');
		$data = $this->list_Filtersurat->getHitungNoKK($nokk);
		echo json_encode($data);
	}


		public function update($id)
	{
	
		$this->load->model('list_FilterSurat');
		$this->form_validation->set_rules('tanggal_surat', 'tanggal_surat', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');

		$this->load->model('list_Filtersurat');
		$data['surat'] = $this->list_FilterSurat->getSurat($id);

		$data['user'] = $this->list_FilterSurat->getUser();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('Surat/edit_data_surat',$data);
		}else{
			$this->list_Filtersurat->updateById($id);
			echo "<script> alert('Data Surat Berhasil Diupdate'); window.location.href='';
			</script>";
		}
	}

	public function delete($id)
	{
		$this->load->model('list_FilterSurat');
		$this->list_FilterSurat->delete($id);
		redirect('ListFilterSurat','refresh');
	}
	public function report($id)// cetak surat per id surat
	{
		$this->load->model('list_FilterSurat');
		$data["surat"] = $this->list_FilterSurat->getTampilSurat($id);
		$this->load->library('pdf');
		$this->pdf->load_view('Surat/print_surat', $data);
	}

	public function laporanSurat() //cetak laporan surat setiap desa
	{
	$this->load->model('list_FilterSurat');
		$data["surat"] = $this->list_FilterSurat->getReportSurat();
	
		if (empty($data['surat'])) {
			echo "<script> alert('Data Surat Masih Kosong'); window.location.href='../ListFilterSurat';
			</script>";

		}else {

	    $this->load->library('pdf');	
		$this->pdf->load_view('Surat/print_laporan', $data);
		}
   }

   public function konfirmasi($id)
	{
		$this->load->model('list_FilterSurat');
		$this->list_FilterSurat->konfirmasiStatus($id);
		redirect('ListFilterSurat');
	}
  
  public function persetujuan($id)
	{
		$this->load->model('list_Filtersurat');
		$this->list_Filtersurat->persetujuanStatus($id);
		redirect('ListFilterSurat');
	}
	
		public function getBantuanOtomatis(){
		$this->load->model('list_Filtersurat');
		$bantuan = $this->input->post('bantuan');
		$data = $this->list_Filtersurat->getBantuanSelected($bantuan);
		echo json_encode($data);
	}
}
