<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class ListAkun extends CI_Controller {
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
		$this->load->model('User');
		$data["login"] = $this->User->getTampil();
		$data['user'] = $this->User->getUser();
		$this->load->view('akun', $data);	
	}

	public function delete($id)
	{
		$this->load->model('list_akun');
		$this->list_akun->delete($id);
		redirect('ListAkun');
	}


}
