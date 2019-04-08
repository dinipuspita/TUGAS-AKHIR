<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class List_Penduduk extends CI_Model {
	public function insertPenduduk()
	{
		// $tgl=$this->input->post('tanggal_lahir');
		// $tglraw=explode('-', $tgl);
		// $tglfix=$tglraw[2].'-'.$tglraw[1].'-'.$tglraw[0];
		$session_data = $this->session->userdata('logged_in');
		$id_desa = $session_data['id_desa'];

		$object = array(
						'NIK' => $this->input->post('NIK'), 
						'NO_KK' => $this->input->post('NO_KK'), 
						'nama_penduduk' => $this->input->post('nama_penduduk'), 
						'tempat_lahir' => $this->input->post('tempat_lahir'),
						'tanggal_lahir' => $this->input->post('tanggal_lahir'),
						'jenis_kelamin' => $this->input->post('jenis_kelamin'),
						'agama' => $this->input->post('agama'),
						'status' => $this->input->post('status'), 
						'kewarganegaraan' => $this->input->post('kewarganegaraan'), 
						'alamat' => $this->input->post('alamat'),
						'RT' => $this->input->post('RT'),
						'RW' => $this->input->post('RW'),
						'id_pekerjaan' => $this->input->post('id_pekerjaan'),
						'usia' => $this->input->post('usia'),
						'id_desa' => $session_data['id_desa'],
						// 'id_desa' => $this->input->post('fk_desa'),
						);
		
		$this->db->insert('penduduk', $object);
	}

	public function insertDesa()
	{

		$data = array('id_desa' => $this->input->post('id_desa'), 
					  'nama_desa' => $this->input->post('nama_desa'));				
		
		$this->db->insert('desa', $data);
	}

	public function insertPekerjaan()
	{
		
	$object = array('id_pekerjaan' => $this->input->post('id_pekerjaan'),
					'nama_pekerjaan' => $this->input->post('nama_pekerjaan')
				   );
		
		$this->db->insert('pekerjaan', $object);
	}

	public function getPenduduk($id)
	{
		$this->db->where('NIK', $id);
		$query= $this->db->get('penduduk');
		return $query->result();
	}
	public function updateById($id)
	{

		$object = array(
						'NIK' => $this->input->post('NIK'), 
						'NO_KK' => $this->input->post('NO_KK'), 
						'nama_penduduk' => $this->input->post('nama_penduduk'), 
						'tempat_lahir' => $this->input->post('tempat_lahir'),
						'tanggal_lahir' => $this->input->post('tanggal_lahir'),
						'jenis_kelamin' => $this->input->post('jenis_kelamin'),
						'agama' => $this->input->post('agama'),
						'status' => $this->input->post('status'), 
						'kewarganegaraan' => $this->input->post('kewarganegaraan'), 
						'alamat' => $this->input->post('alamat'),
						'RT' => $this->input->post('RT'),
						'RW' => $this->input->post('RW'),
						'id_pekerjaan' => $this->input->post('id_pekerjaan'),
						'usia' => $this->input->post('usia')
						// 'id_desa' => $this->input->post('fk_desa'),
						);

		$this->db->where('NIK', $id);
		$this->db->update('penduduk', $object);
	}

	public function getTampil()
	{
		$session_data = $this->session->userdata('logged_in');
		$id_desa = $session_data['id_desa'];
		$query = $this->db->query("Select a.*,b.nama_desa from penduduk AS a Join desa AS b ON b.id_desa=a.id_desa where a.id_desa = $id_desa");
		return $query->result_array();
	}

	public function getTampilDinsos()
	{
	
		$query = $this->db->query("Select a.*,b.nama_desa from penduduk AS a Join desa AS b ON b.id_desa=a.id_desa");
		return $query->result_array();
	}

	public function delete($id)
	{
		$this->db->where('NIK', $id);
		$this->db->delete('penduduk');
	}
	public function getTampilPenduduk($id)
	{
		$query = $this->db->query("Select * from penduduk where NIK = $id");
		return $query->result_array();
	}

	public function getTampilDetail($id)
	{
		$query = $this->db->query("Select * from penduduk AS a Join desa AS b ON b.id_desa=a.id_desa Join pekerjaan AS c ON c.id_pekerjaan=a.id_pekerjaan where NIK = $id");
		return $query->result_array();
	}

	public function getTampilPendudukPerum()
	{
		$query = $this->db->query("Select * from penduduk");
		return $query->result_array();
	}

	public function getTampilSuratPenduduk()
	{
		$session_data = $this->session->userdata('logged_in');
		$id_desa = $session_data['id_desa'];

		$query = $this->db->query("Select a.*,b.nama_desa from penduduk AS a Join desa AS b ON b.id_desa=a.id_desa where a.id_desa = $id_desa");
		return $query->result_array();
	}
	
	public function getUser()
	{
		$session_data = $this->session->userdata('logged_in');
		$username = $session_data['username'];
		$query = $this->db->query("SELECT * from login where username='$username'");
		// var_dump($query);die();
		return $query->result_array();
	}
	//model
	function check_NIK($NIK){
   $this->db->select('NIK');
   $this->db->where('NIK',$NIK);		
   $query =$this->db->get('penduduk');
   $row = $query->row();
   if ($query->num_rows > 0){
         return $row->NIK; 
   }else{
         return "";
  }
}
	// 	public function getPendudukByUser()
	// {
	// 	$session_data = $this->session->userdata('logged_in');
	// 	$id_desa = $session_data['id_desa'];

	// 	$query = $this->db->query("Select * from penduduk AS a Join desa AS b where b.id_desa= '$id_desa'");
	// 	return $query->result_array();
	// }
	
}

