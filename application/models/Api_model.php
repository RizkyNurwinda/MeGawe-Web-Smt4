<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Api_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function loginApi($user,$pass,$table){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username',$user);
		$this->db->where('password',$password);
		$query = $this->db->get();
		return $query;
	}

	function getProfile($id)
    {
        return $this->db->get_where('user', ['id_user' => $id]);
    }

	public function daftarApi($level)
	{
		$object = array(
			'username'	=> $this->input->post('username'),
			'password'	=> md5($this->input->post('password')),
			'level'		=> $level
		);

		$this->db->insert('user', $object);
	}

	public function getUser1Api($id, $level)
	{
		// if($level==2){
		// 	$this->db->select('idUser,username,password,idMember,namaMember,jenisKelamin');
		// }else if($level==3){

		// }
		$this->db->from('user');
		if ($level == 2) {
			$this->db->join('member', 'user.idUser = member.fkUser');
		}
		//  else if ($level ==3) {
		// 	$this->db->join('perusahaan', 'user.idUser = perusahaan.fkUser');
		// 	$this->db->join('jenis_perusahaan', 'perusahaan.idJenisPerusahaan = jenis_perusahaan.idJenisPerusahaan');
		// }
		$this->db->where('idUser', $id);

		return $this->db->get()->result();
	}
    
	public function getUserApi($id)
	{
		$this->db->select('*');
		$this->db->from('user as u');
		$this->db->join('member as m', 'm.fkUser = u.idUser','INNER');
		$this->db->where('u.idUser',$id);
		return $this->db->get()->result();
	}

	public function insertMemberApi($idUser)
	{
		$file = $this->upload->data();
		$data = array(
			'namaMember' 	=> $this->input->post('nama'),
			'jenisKelamin' 	=> $this->input->post('jkl'),
			'tanggalLahir' 	=> $this->input->post('tanggalLahir'),
			'agama' 		=> $this->input->post('agama'),
			'alamat' 		=> $this->input->post('alamat'),
			'noTelp' 		=> $this->input->post('notelp'),
			'email' 		=> $this->input->post('email'),
			'fotoMember'	=> $file['file_name'],
			'fkUser'		=> $idUser
		);
		$this->db->insert('member', $data);
	}

	public function uploadCVApi()
	{
		$config['upload_path'] = './assets/cv/';
		$config['allowed_types'] = 'pdf';
		$config['remove_space']  = TRUE;
		
		$this->load->library('upload', $config);
		
		if ($this->upload->do_upload('cv')){
			return array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
		}
		else{
			return array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
		}
	}

	public function applyApi($idLowongan, $idMember, $upload)
	{
		$data = array(
			'idMember'		=> $idMember,
			'idLowongan'	=> $idLowongan,
			'tglDaftar'		=> date('Y-m-d'),
			'cv'			=> $upload['file']['file_name'],
			'statusDaftar'	=> 'baru',
			'keterangan'	=> 'Belum di verifikasi'
		);

		$this->db->insert('pendaftar', $data);
	}

	public function getPendaftarApi()
	{
		return $this->db->get('pendaftar')->result();
	}

	public function getPendaftarLowonganApi($level, $id)
	{
		$this->db->from('pendaftar p');
		$this->db->join('lowongan l', 'p.idLowongan = l.idLowongan');
		if ($level == 'member') {
			$this->db->where('p.idMember', $id);			
		} elseif ($level == 'perusahaan') {
			$this->db->join('member m', 'p.idMember = m.idMember');
			$this->db->where('p.idLowongan', $id);
		} else {
			$this->db->where('p.idPendaftar', $id);
		}

		return $this->db->get()->result();
	}
    
    public function updateUserApi($id){
		$data = array('namaMember' => $this->input->post('nama'),'alamat' => $this->input->post('alamat'),'tanggalLahir' => $this->input->post('tanggalLahir'),'agama' => $this->input->post('agama'),'noTelp' => $this->input->post('notelp'),'jenisKelamin' => $this->input->post('jkl'),'email' => $this->input->post('email'));
		$this->db->where('fkUser',$id);
		$this->db->update('member',$data);
	}

    public function updatefotomApi($id){
		$file = $this->upload->data();
		$data = array('fotoMember' => $file['file_name']);
		$this->db->where('fkUser',$id);
		$this->db->update('member',$data);
	}
}