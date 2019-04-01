<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class Register extends CI_Controller {
	// public function home()
	// {
	// 	if($this->session->userdata('logged_in')){
	// 		$session_data = $this->session->userdata('logged_in');
	// 		$data['username'] = $session_data['username'];
	// 		$this->load->view('Home',$data);
	// 	}
	// 	else{
	// 		redirect('login','refresh');
	// 	}	
	// }
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
		$this->load->model('register_akun');
		$this->load->model('list_desa');
		$data["login"] = $this->register_akun->getTampil();
		$data["user"] = $this->register_akun->getUser();
		$data["desa"] = $this->list_desa->getTampilDesa();
		$this->load->view('Register', $data);	
	}
	public function create()// sudah di isi di autoloard 
	{
		$this->load->model('register_akun');
	
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		$this->form_validation->set_rules('konfirmasi', 'Konfirmasi', 'trim|required|callback_cekPassword');
		$this->form_validation->set_rules('no_telp', 'no_telp', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');


		$this->load->model('register_akun');
		$data["login"] = $this->register_akun->getTampil();
		$data["user"] = $this->register_akun->getUser();

		$this->load->model('list_desa');
		$data["desa"] = $this->list_desa->getTampilDesa();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('register',$data);
		}
		else{
			$this->register_akun->insertUser();
			echo "<script> alert('Registrasi Desa Berhasil'); window.location.href='';
			</script>";
		}
	}


	public function cekDaftar()
	{
		$this->load->model('create');
		$this->load->Library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('konfirmasi', 'Konfirmasi', 'trim|required|callback_cekPassword');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('no_telp', 'no_telp', 'trim|required');
		$this->form_validation->set_rules('id_desa', 'id_desa', 'trim|required');
	

		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('register');
		}else{
			$this->create->tambah();
			redirect('admin','refresh');
		}
	}

		public function cekPassword($konfirmasi)
	{
		$password = $this->input->post('password');
		if ($konfirmasi != $password)
		{
			$this->form_validation->set_message('cekPassword',"Password Tidak Sama");
			return false;
			
		}else{
			return true;
		}
	}
	
	public function delete($id)
	{
		$this->load->model('register_akun');
		$this->register_akun->delete($id);
		redirect('Register','refresh');
	}

}
