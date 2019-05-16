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
		$this->load->model('list_FilterSurat'); //memuat model yg akan digunakan pada model di list_filtersurat
		$data["surat"] = $this->list_FilterSurat->getTampil(); //$nama variabel dari array surat yg ditampilkan pada model list_filtersurat
		$data["suratByDinsos"] = $this->list_FilterSurat->getTampilSuratDinsos(); //$nama variabel dari array suratByDinsos yg ditampilkan pada model list_filtersurat
		$data['user'] = $this->list_FilterSurat->getUser(); // untuk mengecek data berdasarkan session
		$data["jenis_bantuan"] = $this->list_FilterSurat->getTampilBantuan();
		$data['desa'] = $this->list_FilterSurat->getTampilDesa2(); //$nama variabel dari array desa yg ditampilkan pada model list_filtersurat

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
		$data['user'] = $this->list_FilterSurat->getUser(); // untuk mengecek data berdasarkan session

		$this->load->model('list_Penduduk');
		$data["penduduk"] = $this->list_Penduduk->getTampilSuratPenduduk(); //$nama variabel dari array penduduk yg mengambil tampil data penduduk

		$this->load->model('list_desa');
		$data["desa"] = $this->list_desa->getTampilDesa();  //$nama variabel dari array desa yg mengambil tampil data desa


		$this->load->model('list_KepalaDesa');
		$data["kepala_desa"] = $this->list_KepalaDesa->getTampilKepala();

		// $this->load->model('list_Penduduk');
		// $data["penduduk"] = $this->list_Penduduk->getTampilSuratPenduduk();

		$this->load->model('list_FilterSurat');
		$data["surat"] = $this->list_FilterSurat->getTampil();

		$this->load->model('List_FormBantuan');
		$data["kepemilikan_aset"] = $this->List_FormBantuan->getTampilKepemilikanAset5(); //$nama variabel dari array kepemilikan aset yg mengambil tampil data form bantuan




		if($this->form_validation->run() == FALSE) {
			$this->load->view('Surat/input_data_FilterSurat',$data);
		}
		else{
			$this->list_FilterSurat->insertFilterSurat(); // dimana pada model list_filtersurat melakukan insertfiltersurat
			echo "<script> alert('Data Surat Berhasil Ditambahkan'); window.location.href='';
			</script>";
		}
	}


	public function getHitungNoKK(){ //menampilkan hitung no-kk
		$nokk = $this->input->post('nokk'); //dimana variabel nokk di inputkan dengan nokk
		$nama = $this->input->post('nama'); //dimana variabel nama di inputkan dengan nama
		$this->load->model('list_FilterSurat'); //meload ke model list_filtersurat
		$jumlahData = $this->list_FilterSurat->getHitungNoKK($nokk); //dimana jumlahdata menampilkan hitung NO-KK dengan variabel nokk
		$nikk = $this->list_FilterSurat->getDataKK($nokk, $nama); //dimana nik di model list_filtersurat itu menampilkan dataKK dengan variabel nokk dan nama
		$data = [ //variabel data
		    'jumlah' => $jumlahData, //dimana variabel jumlahdata
		    'nikk' => $nikk->NIK // dimana variabel nikk itu NIK
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


	public function update($id) //update berdasarkan parameter
	{
	
		$this->load->model('list_FilterSurat');
		$this->form_validation->set_rules('tanggal_surat', 'tanggal_surat', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');

		$this->load->model('list_Filtersurat');
		$data['surat'] = $this->list_FilterSurat->getSurat($id);  //$nama variabel dari array surat yg mengambil data surat

		$data['user'] = $this->list_FilterSurat->getUser();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('Surat/edit_data_surat',$data);
		}else{
			$this->list_Filtersurat->updateById($id); // dimana pada model list_filtersurat melakukan updatefiltersurat
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
		$data["surat"] = $this->list_FilterSurat->getTampilSurat($id); //$nama variabel dari array surat yg mengambil data surat
		$this->load->library('pdf'); //meload ke library di pdf
		$this->pdf->load_view('Surat/print_surat', $data); // dimana pf meload ke view
	}

	public function laporanSurat() //cetak laporan surat setiap desa
	{
	$this->load->model('list_FilterSurat');
		$data["surat"] = $this->list_FilterSurat->getReportSurat(); //$nama variabel dari array surat yg mengambil data surat yang menampilkan report surat pada model list_filter_surat
	
		if (empty($data['surat'])) {
			echo "<script> alert('Data Surat Masih Kosong'); window.location.href='../ListFilterSurat';
			</script>";

		}else {

	    $this->load->library('pdf');	
		$this->pdf->load_view('Surat/print_laporan', $data);
		}
   }

   public function konfirmasi($id) // berdasarkan parameter id
	{
		$this->load->model('list_FilterSurat'); //meload ke model list_filtersurat
		$this->list_FilterSurat->konfirmasiStatus($id); //dimana mengkonfirmasi status surat
		redirect('ListFilterSurat');
	}
  
  public function persetujuan($id) // berdasarkan parameter id
	{
		$this->load->model('list_Filtersurat');		$this->list_Filtersurat->persetujuanStatus($id);
		redirect('ListFilterSurat');
	}
	
	public function getKriteriaOtomatis(){
		$this->load->model('list_Filtersurat');
		$kriteria_bantuan = $this->input->post('kriteria_bantuan');
		$data = $this->list_Filtersurat->getKriteriaSelected($kriteria_bantuan);
		echo json_encode($data);
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
