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
		$data['desa'] = $this->list_FilterSurat->getTampilDesa2();

		$this->load->view('Surat/Surat', $data);	
	}
	public function create()// sudah di isi di autoloard 
	{
		//insert to surat
		$this->load->model('list_FilterSurat');
		$this->form_validation->set_rules('NIK', 'NIK', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');

		//inset to kepemilikan aset
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

		// $this->load->model('list_Penduduk');
		// $data["penduduk"] = $this->list_Penduduk->getTampilSuratPenduduk();

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
		$nokk = $this->input->post('nokk');
		$nama = $this->input->post('nama');
		$this->load->model('list_FilterSurat');
		$jumlahData = $this->list_FilterSurat->getHitungNoKK($nokk);
		$nikk = $this->list_FilterSurat->getDataKK($nokk, $nama);
		$data = [
		    'jumlah' => $jumlahData,
		    'nikk' => $nikk->NIK
		];
		
		echo json_encode($data);
	}

	public function getKKS(){
		$this->load->model('list_Filtersurat');
		$kriteria_bantuan = $this->input->post('kriteria_bantuan');
		$data = $this->list_Filtersurat->getDataKKS($kriteria_bantuan);
		$tempArr = array_unique(array_column($data, 'id_surat'));
		$data = array_intersect_key($data, $tempArr);
		$data = array_values($data);
		echo json_encode($data);
	}
	public function getKIS(){
		$this->load->model('list_Filtersurat');
		$kriteria_bantuan = $this->input->post('kriteria_bantuan');
		$data = $this->list_Filtersurat->getDataKIS($kriteria_bantuan);
		$tempArr = array_unique(array_column($data, 'id_surat'));
		$data = array_intersect_key($data, $tempArr);
		$data = array_values($data);
		echo json_encode($data);
	}
	public function getKIP(){
		$this->load->model('list_Filtersurat');
		$kriteria_bantuan = $this->input->post('kriteria_bantuan');
		$data = $this->list_Filtersurat->getDataKIP($kriteria_bantuan);
		$tempArr = array_unique(array_column($data, 'id_surat'));
		$data = array_intersect_key($data, $tempArr);
		$data = array_values($data);
		echo json_encode($data);
	}
	public function getRASKIN(){
		$this->load->model('list_Filtersurat');
		$kriteria_bantuan = $this->input->post('kriteria_bantuan');
		$data = $this->list_Filtersurat->getDataRASKIN($kriteria_bantuan);
		$tempArr = array_unique(array_column($data, 'id_surat'));
		$data = array_intersect_key($data, $tempArr);
		$data = array_values($data);
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
	

	public function tampilPengajuan()
	{
		$this->load->model('list_FilterSurat');
		$data["surat"] = $this->list_FilterSurat->getTampil();
		$data["suratByDinsos"] = $this->list_FilterSurat->getTampilSuratDinsos();
		$data['user'] = $this->list_FilterSurat->getUser();
		$data["jenis_bantuan"] = $this->list_FilterSurat->getTampilBantuan();

		$this->load->view('Surat/SuratByDinsos', $data);	
	}
	public function laporanSuratDinsos()
	{
		$this->form_validation->set_rules('id_desa', 'id_desa', 'trim|required');	
	
	
		$this->load->model('list_desa');
		$data["desa"] = $this->list_desa->getTampilDesa2();
		$data['user'] = $this->list_desa->getUser();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('Surat/view_laporan',$data);
		}else{
			$this->load->model('list_FilterSurat');
			$data["surat"] = $this->list_FilterSurat->getReportSuratDinsos();
			if (empty($data['surat'])) {
				echo "<script> alert('Maaf, Data Surat di Desa Tersebut Kosong');</script>";
				$this->load->view('Surat/view_laporan',$data);
			} else {
				$this->load->library('pdf');
				$this->pdf->load_view('Surat/print_laporanDinsos',$data);
			}
			// $this->load->view('Laporan/print_laporan',$data);
		}

	}

	public function getKriteriaOtomatis(){
		$this->load->model('list_Filtersurat');
		$kriteria_bantuan = $this->input->post('kriteria_bantuan');
		$data = $this->list_Filtersurat->getKriteriaSelected($kriteria_bantuan);
		echo json_encode($data);
	}

	// Tambahan ajax trambah transaksi bantuan
	public function tambahTransaksiBantuan(){
		$id_jenis_bantuan = $this->input->post('id_jenis_bantuan');
		$nik = $this->input->post('nik');
		$id_surat = $this->input->post('id_surat');
		$transaksiBantuan = array();
		$updateSurat = array();

		foreach ($nik as $nik) {
			array_push($transaksiBantuan, array(
				'id_jenis_bantuan' => $id_jenis_bantuan,
				'NIK' => $nik
			));
		}

		foreach ($id_surat as $id_surat) {
			array_push($updateSurat, array(
				'id_surat' => $id_surat,
				'persetujuan' => 'Disetujui'
			));
		}
		
		$this->load->model('list_FilterSurat');
		$tambahkanData = $this->list_FilterSurat->insertBanyak('transaksi_bantuan', $transaksiBantuan);
		$update = $this->list_FilterSurat->updateBanyak('surat', $updateSurat); //update 
		if ($update){
			echo 1;
		}
		else {
			echo 0;
		}
	}

}
