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
		$this->load->model('list_Penduduk');
		$data["penduduk"] = $this->list_Penduduk->getTampil();
		$data['user'] = $this->list_Penduduk->getUser();
		$this->load->view('Penduduk/penduduk', $data);	
	}
	public function create()// sudah di isi di autoloard 
	{
		$this->load->model('list_Penduduk');
		// $data['last'] = $this->list_Penduduk->getLastPenduduk();

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
		$this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'trim|required');
		$this->form_validation->set_rules('usia', 'usia', 'trim|required');
		// $this->form_validation->set_rules('pendapatan', 'pendapatan', 'trim|required');

		$this->load->model('list_desa');
		$data["desa"] = $this->list_desa->getTampilDesa();
		$data["user"] = $this->list_desa->getUser();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('penduduk/input_data_penduduk',$data);
		}
		else{
			$this->list_Penduduk->insertPenduduk();
			echo "<script> alert('Data Penduduk Berhasil Ditambahkan'); window.location.href='';
			</script>";
		}
	}
	public function update($id)
	{
	
		$this->load->model('list_penduduk');
		$this->form_validation->set_rules('NIK', 'NIK', 'trim|required');
		$this->form_validation->set_rules('No_KK', 'No_KK', 'trim|required');
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
		$this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'trim|required');
		$this->form_validation->set_rules('usia', 'usia', 'trim|required');
		$this->form_validation->set_rules('fk_desa', 'fk_desa', 'trim|required');
		// $this->form_validation->set_rules('pendapatan', 'pendapatan', 'trim|required');

		$this->load->model('list_penduduk');
		$data['penduduk'] = $this->list_penduduk->getPenduduk($id);
		$data["user"] = $this->list_penduduk->getUser();

		$this->load->model('list_desa');
		$data["desa"] = $this->list_desa->getTampilDesa($id);

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
		$this->load->model('list_penduduk');
		$this->list_penduduk->delete($id);
		redirect('ListPenduduk','refresh');
	}

	public function detail($id)
	{
		// var_dump($data['penduduk']);
  //       die();  

		$this->load->model('list_penduduk');
		$data["penduduk"] = $this->list_penduduk->getTampilDetail($id);
		$data["user"] = $this->list_penduduk->getUser();
		$this->load->view('Penduduk/detailPenduduk', $data);	

	}
	
	public function report($id)
	{
		$this->load->model('list_penduduk');
		$data["penduduk"] = $this->list_penduduk->getTampilPenduduk($id);
		$this->load->library('pdf');
		$this->pdf->load_view('Penduduk/print_penduduk', $data);
	}
}
