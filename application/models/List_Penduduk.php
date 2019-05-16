<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class List_Penduduk extends CI_Model {
	public function insertPenduduk()
	{
		// $tgl=$this->input->post('tanggal_lahir');
		// $tglraw=explode('-', $tgl);
		// $tglfix=$tglraw[2].'-'.$tglraw[1].'-'.$tglraw[0];
		$session_data = $this->session->userdata('logged_in'); // mengecek session data berdasarkan login
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
						'status_hubungan_keluarga' => $this->input->post('status_hubungan_keluarga'),
						'nama_ayah' => $this->input->post('nama_ayah'),
						'nama_ibu' => $this->input->post('nama_ibu'),
						'pendidikan' => $this->input->post('pendidikan')
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
	public function updateById($id) //parameter
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
						'usia' => $this->input->post('usia'),
						'status_hubungan_keluarga' => $this->input->post('status_hubungan_keluarga'),
						'nama_ayah' => $this->input->post('nama_ayah'),
						'nama_ibu' => $this->input->post('nama_ibu'),
						'pendidikan' => $this->input->post('pendidikan')
						);

		$this->db->where('NIK', $id); // nik diumpakan $id
		$this->db->update('penduduk', $object);
	}

	public function getTampil() // tampil data di desa pada index di C listpenduduk
	{
		$session_data = $this->session->userdata('logged_in'); // mengecek session data berdasarkan login
		$id_desa = $session_data['id_desa']; // dengan variabel id_desa dan dicek session berdasarkan id_desa
		$query = $this->db->query("Select a.*,b.nama_desa from penduduk AS a Join desa AS b ON b.id_desa=a.id_desa where a.id_desa = $id_desa group by NO_KK"); 
		return $query->result_array(); // mengembalikan data yang berulang-ulang dan data nya muncul secara array
	}

	public function getTampilDinsos() // tampil data di dinsos pada index di C listpenduduk
	{
	
		$query = $this->db->query("Select a.*,b.nama_desa from penduduk AS a Join desa AS b ON b.id_desa=a.id_desa group by NO_KK");
		return $query->result_array(); // mengembalikan data yang berulang-ulang dan data nya muncul secara array
	}

	public function delete($id) // delete NIK dari penduduk
	{
		$this->db->where('NIK', $id);
		$this->db->delete('penduduk');
	}
	public function getTampilPenduduk($id) //menampilkan data detail penduduk berdasarkan dari NIK
	{
		$query = $this->db->query("Select * from penduduk where NIK = $id");
		return $query->result_array();
	}
	public function getTampilFormBantuan($id)
	{
		$query = $this->db->query("Select * from penduduk AS a Join pengenalan_tempat AS b ON b.NIK=a.NIK where NIK = $id");
		return $query->result_array();
	}

	public function getTampilDetail($id)
	{
		$query = $this->db->query("Select * from penduduk AS a Join desa AS b ON b.id_desa=a.id_desa Join pekerjaan AS c ON c.id_pekerjaan=a.id_pekerjaan where NIK = $id");
		return $query->result_array();
	}

	public function getTampilPendudukPerum($id)
	{
		$query = $this->db->query("Select * from penduduk where NIK='$id'");
		return $query->result_array();
	}

	public function getTampilSuratPenduduk() //menampilkan surat penduduk
	{
		$session_data = $this->session->userdata('logged_in'); // untuk mengecek data berdasarkan session
		$id_desa = $session_data['id_desa'];

		$query = $this->db->query("Select a.*,b.nama_desa from penduduk AS a Join desa AS b ON b.id_desa=a.id_desa where a.id_desa = $id_desa");
		return $query->result_array(); // mengembalikan data yang berulang-ulang dan data nya muncul secara array
	}
	
	public function getUser()
	{
		$session_data = $this->session->userdata('logged_in'); // mengecek session data berdasarkan login
		$username = $session_data['username'];
		$query = $this->db->query("SELECT * from login where username='$username'");
		// var_dump($query);die();
		return $query->result_array();
	}

	//model
	function cekNIK(){
	   $nik = $this->input->post('NIK');
	   $this->db->select('NIK'); // di database nya
	   $this->db->where('NIK',$nik); // di cocokan NIK		
	   $query =$this->db->get('penduduk'); //dari tabel penduduk
	   $row = $query->row();
	   if ($query->num_rows() > 0){ //jika lebih besar dari 0 maka nik sudah ada
	         return $row->NIK; 
	   }else{
	         return "";
	  }
	}
	public function getTampilGroup($NO_KK) //tampil group berdasarkan parameter NO_KK
	{
		$session_data = $this->session->userdata('logged_in'); // mengecek session data berdasarkan login
		$id_desa = $session_data['id_desa']; // dengan variabel id_desa dan dicek session berdasarkan id_desa
		
		$query = $this->db->query("Select a.*,b.nama_desa from penduduk AS a Join desa AS b ON b.id_desa=a.id_desa  Join pekerjaan AS c ON c.id_pekerjaan=a.id_pekerjaan where NO_KK = $NO_KK");
		return $query->result_array(); // mengembalikan data yang berulang-ulang dan data nya muncul secara array
	}
	
	public function getTampilGroupDinsos($NO_KK)
	{
		$query = $this->db->query("Select * from penduduk AS a Join desa AS b ON b.id_desa=a.id_desa Join pekerjaan AS c ON c.id_pekerjaan=a.id_pekerjaan where NO_KK = $NO_KK");
		return $query->result_array();
	}
	
}

