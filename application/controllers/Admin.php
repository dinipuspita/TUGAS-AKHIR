
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('logged_in')){ // mengecek session data berdasarkan login
			$session_data = $this->session->userdata('logged_in'); // mengecek session data berdasarkan login
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
			$current_controller = $this->router->fetch_class();
			$this->load->library('acl'); //meload ke library acl
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
		
		$data['jumlahpenduduk'] = $this->Dashboardmod->getPenduduk(); //$nama variabel dari array jumlahpenduduk yg di tampilkan di dashboarmod untuk mengambil data penduduk dari model getPenduduk
		$data['jumlahpendudukByDesa'] = $this->Dashboardmod->getPendudukByDesa();
		$data['jumlahdesa'] = $this->Dashboardmod->getDesa();
		$data['jumlahbantuan'] = $this->Dashboardmod->getBantuan();
		$data['jumlahsurat'] = $this->Dashboardmod->getSurat();
		$data['jumlahakun'] = $this->Dashboardmod->getAkun();
		$data['user'] = $this->Dashboardmod->getUser();
		
		$this->load->view('index',$data); //meload view ke index
	}
	public function penduduk()
	{
		$this->load->view('penduduk');
	}
	public function desa()
	{
		$this->load->view('desa');
	}
	public function bantuan()
	{
		$this->load->view('bantuan');
	}
	public function surat()
	{
		$this->load->view('surat');
	}
	public function akun()
	{
		$this->load->view('akun');
	}
	public function error()
	{
		$this->load->view('404');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
?>