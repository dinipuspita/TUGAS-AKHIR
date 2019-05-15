<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class ListAkun extends CI_Controller {
	
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
		$delete = $this->list_akun->delete($id);
		redirect('ListAkun');
	}
	//    public function updateStatusAkun($id)
	// {
	// 	$this->load->model('list_akun');
	// 	$this->list_akun->UpdateStatus($id);
	// 	redirect('ListAkun');
	// }
  


}
