<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class ListPenduduk extends CI_Controller {
	
	public function __construct()
	{

		parent::__construct();
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
			$data['id_desa'] = $session_data['id_desa'];
			$current_controller = $this->router->fetch_class();
			$this->load->library('acl');
			if (! $this->acl->is_public($current_controller))
			{
				if (! $this->acl->is_allowed($current_controller, $data['level']))
				{
					redirect('admin','refresh');
				}
			}
			$this->load->model('Dashboardmod');
		}
		else{
			redirect('logout/out','refresh');
		}
	}
	public function index()
	{
		$this->load->model('list_Penduduk'); //memuat model yg akan digunakan pada model di list_penduduk
		$data["penduduk"] = $this->list_Penduduk->getTampil(); //$nama variabel dari array penduduk yg di tampilkan
		$data["pendudukByDinsos"] = $this->list_Penduduk->getTampilDinsos(); //$nama variabel dari array penduduk yg di tampilkan dinsos
		$data['user'] = $this->list_Penduduk->getUser();	// untuk mengecek data berdasarkan session
		// $data['pendudukByUser'] = $this->list_Penduduk->getPendudukByUser();
		$this->load->view('Penduduk/penduduk', $data);	 //meload ke view di folde penduduk
	}
	public function create()// sudah di isi di autoloard 
	{
		$this->load->model('list_Penduduk'); //memuat model yg akan digunakan pada model di list_penduduk
		// $data['last'] = $this->list_Penduduk->getLastPenduduk();
		// set_rules menetapkan peraturan untuk list_penduduk
		$this->form_validation->set_rules('NIK', 'NIK', 'trim|required');
		$this->form_validation->set_rules('NO_KK', 'NO_KK', 'trim|required');
		$this->form_validation->set_rules('nama_penduduk', 'nama_penduduk', 'trim|required');
		$this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'trim|required');
		$this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'trim|required');
		$this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'trim|required');
		$this->form_validation->set_rules('agama', 'agama', 'trim|required');
		$this->form_validation->set_rules('status', 'status', 'trim|required');
		$this->form_validation->set_rules('kewarganegaraan', 'kewarganegaraan', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		$this->form_validation->set_rules('RT', 'RT', 'trim|required');
		$this->form_validation->set_rules('RW', 'RW', 'trim|required');
		$this->form_validation->set_rules('id_pekerjaan', 'id_pekerjaan', 'trim|required');
		$this->form_validation->set_rules('usia', 'usia', 'trim|required');
		$this->form_validation->set_rules('status_hubungan_keluarga', 'status_hubungan_keluarga', 'trim|required');
		$this->form_validation->set_rules('nama_ayah', 'nama_ayah', 'trim|required');
		$this->form_validation->set_rules('nama_ibu', 'nama_ibu', 'trim|required');
		$this->form_validation->set_rules('pendidikan', 'pendidikan', 'trim|required');

		$this->load->model('list_desa'); //memuat model yg akan digunakan pada model di list_desa
		$data["desa"] = $this->list_desa->getTampilDesa(); //$nama variabel dari array desa yg mengambil tampil data desa

		$data["user"] = $this->list_desa->getUser(); //

		$this->load->model('list_pekerjaan'); //memuat model yg akan digunakan pada model di list_pekerjaan
		$data["pekerjaan"] = $this->list_pekerjaan->getTampilPekerjaan(); //$nama variabel dari array pekerjaan yg mengambil tampil data pekerjaan

		if($this->form_validation->run() == FALSE) {
			$this->load->view('penduduk/input_data_penduduk',$data); //memproses ke view di folder 'penduduk/input_data_penduduk' $data itu variabel
		}
		else 
		{
			//jika tidak kosong, cek nik berarti sudah ada
			if ($this->list_Penduduk->cekNIK() != ''){
				echo "<script> alert('NIK Sudah Ada'); window.location.href='';
				</script>";
				$this->load->view('penduduk/input_data_penduduk',$data);	
			}
			else{
				$this->list_Penduduk->insertPenduduk();
				echo "<script> alert('Data Penduduk Berhasil Ditambahkan'); window.location.href='';
				</script>";				
			}

		}	
	}
	public function update($id) //parameter
	{
	
		$this->load->model('list_penduduk'); //memuat model yg akan digunakan pada model di list_penduduk
		$this->form_validation->set_rules('NIK', 'NIK', 'trim|required');
		$this->form_validation->set_rules('NO_KK', 'NO_KK', 'trim|required');
		$this->form_validation->set_rules('nama_penduduk', 'nama_penduduk', 'trim|required');
		$this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'trim|required');
		$this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'trim|required');
		$this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'trim|required');
		$this->form_validation->set_rules('agama', 'agama', 'trim|required');
		$this->form_validation->set_rules('status', 'status', 'trim|required');
		$this->form_validation->set_rules('kewarganegaraan', 'kewarganegaraan', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		$this->form_validation->set_rules('RT', 'RT', 'trim|required');
		$this->form_validation->set_rules('RW', 'RW', 'trim|required');
		$this->form_validation->set_rules('id_pekerjaan', 'id_pekerjaan', 'trim|required');
		$this->form_validation->set_rules('usia', 'usia', 'trim|required');
		$this->form_validation->set_rules('status_hubungan_keluarga', 'status_hubungan_keluarga');
		$this->form_validation->set_rules('nama_ayah', 'nama_ayah', 'trim|required');
		$this->form_validation->set_rules('nama_ibu', 'nama_ibu', 'trim|required');
		$this->form_validation->set_rules('pendidikan', 'pendidikan', 'trim|required');

		$this->load->model('list_penduduk'); //memuat model yg akan digunakan pada model di list_penduduk
		$data['penduduk'] = $this->list_penduduk->getPenduduk($id); //$nama variabel dari array desa yg mengambil tampil data penduduk

		$data["user"] = $this->list_penduduk->getUser();

		$this->load->model('list_desa'); //memuat model yg akan digunakan pada model di list_desa
		$data["desa"] = $this->list_desa->getTampilDesa($id);

		$this->load->model('list_pekerjaan'); //memuat model yg akan digunakan pada model di list_pekerjaan
		$data["pekerjaan"] = $this->list_pekerjaan->getTampilPekerjaan($id); //$nama variabel dari array pekerjaan yg mengambil tampil data pekerjaan

		if($this->form_validation->run() == FALSE) {
			$this->load->view('Penduduk/edit_data_penduduk',$data);
		}else{
			$this->list_penduduk->updateById($id);
			echo "<script> alert('Data Penduduk Berhasil Diupdate'); window.location.href='';
			</script>";
		}

	}
	
	public function delete($id)
	{
		$this->load->model('list_penduduk'); //memuat model yg akan digunakan pada model di list_penduduk
		$this->list_penduduk->delete($id); 
		redirect('ListPenduduk','refresh');
	}

	public function detail($id)
	{
		// var_dump($data['penduduk']);
  //       die();  
		$this->load->model('list_penduduk'); //memuat model yg akan digunakan pada model di list_penduduk
		$data["penduduk"] = $this->list_penduduk->getTampilDetail($id);
		$data["user"] = $this->list_penduduk->getUser();
		$this->load->view('Penduduk/detailPenduduk', $data);	

	}
	
	// public function report($id)
	// {
	// 	$this->load->model('list_penduduk');
	// 	$data["penduduk"] = $this->list_penduduk->getTampilPenduduk($id);
	// 	$this->load->library('pdf');
	// 	$this->pdf->load_view('Penduduk/print_penduduk', $data);
	// }
	//controller CheckUsername
	function CheckNIK($NIK){
	$this->load->model('list_penduduk'); //load model list_penduduk
	   if ($this->list_penduduk->check_NIK($NIK)==''){
	      return true;
	   }else{
	      $this->form_validation->set_message('CheckNIK');
	      return false;		
	   }
	}
	public function tampilGroup($NO_KK) // parameter berdasarkan NO KK
	{
		$this->load->model('list_Penduduk');
		$data["penduduk"] = $this->list_Penduduk->getTampilGroup($NO_KK);
		$data["pendudukByDinsos"] = $this->list_Penduduk->getTampilGroupDinsos($NO_KK);
		$data['user'] = $this->list_Penduduk->getUser();		
		$this->load->view('Penduduk/pendudukPerKK', $data);	
	}

}
