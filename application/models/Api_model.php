<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Api_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function loginApi($user, $password)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $user);
		$this->db->where('password', $password);
		$query = $this->db->get();
		return $query;
	}
    function __construct()
    {
        parent::__construct();
    }

	function getAllApi()
	{
    function loginApi($user,$pass,$table){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('akses', 'user.id_akses = akses.id_akses');
		$this->db->where('username',$user);
		$this->db->where('password',$password);
		$query = $this->db->get();
		return $query;
	}

	function input_dataApi($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function edit_dataApi($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
	function getProfile($id)
    {
        return $this->db->get_where('user', ['id_user' => $id]);
    }

	function update_dataApi($where, $data, $table)
	public function daftarApi($level)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
		$object = array(
			'username'	=> $this->input->post('username'),
			'password'	=> md5($this->input->post('password')),
			'level'		=> $level
		);

	function hapus_dataApi($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
		$this->db->insert('user', $object);
	}

	function tampilIdGrupApi()
	public function getUser1Api($id, $level)
	{
		$query = $this->db->query('select * from akses');
		return $query->result_array();
	}
		// if($level==2){
		// 	$this->db->select('idUser,username,password,idMember,namaMember,jenisKelamin');
		// }else if($level==3){

	public function getLowonganApi($get, $getkat = 0, $kategori = 0, $idPerusahaan = 0)
	{
		$this->db->join('perusahaan', 'lowongan.idPerusahaan = perusahaan.idPerusahaan', 'left');
		$this->db->join('kategori_pekerjaan kp', 'lowongan.fkKategori = kp.idKategori', 'left');
		$this->db->where('status', 'buka');
		$this->db->where('kuota >', 0);
		if ($get > 0) {
			$this->db->where('idLowongan', $get);
		}
		if ($kategori > 0) {
			$this->db->where('idLowongan !=', $getkat);
			$this->db->where('fkKategori', $kategori);
		}
		if ($idPerusahaan > 0) {
			$this->db->where('lowongan.idPerusahaan', $idPerusahaan);
		// }
		$this->db->from('user');
		if ($level == 2) {
			$this->db->join('member', 'user.idUser = member.fkUser');
		}
		$this->db->order_by('tglPost', 'desc');
		$query = $this->db->get('lowongan');
		//  else if ($level ==3) {
		// 	$this->db->join('perusahaan', 'user.idUser = perusahaan.fkUser');
		// 	$this->db->join('jenis_perusahaan', 'perusahaan.idJenisPerusahaan = jenis_perusahaan.idJenisPerusahaan');
		// }
		$this->db->where('idUser', $id);

		if ($get == 'num') {
			return $query->num_rows();
		} else {
			return $query->result();
		}
		return $this->db->get()->result();
	}

	public function getKategoriApi($limit = 6)
    
	public function getUserApi($id)
	{
		return $this->db->get('kategori_pekerjaan', $limit)->result();
		$this->db->select('*');
		$this->db->from('user as u');
		$this->db->join('member as m', 'm.fkUser = u.idUser','INNER');
		$this->db->where('u.idUser',$id);
		return $this->db->get()->result();
	}

	public function updateKuotaLowongan($idLowongan, $isiBaru, $status)
	public function insertMemberApi($idUser)
	{
		if ($status == '') {
			$data = array(
				'kuota'	=> $isiBaru
			);
		} else {
			$data = array(
				'kuota'	=> $isiBaru,
				'status' => $status
			);
		}

		$this->db->where('idLowongan', $idLowongan);
		$this->db->update('lowongan', $data);
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

		if ($this->upload->do_upload('cv')) {
		
		if ($this->upload->do_upload('cv')){
			return array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
		} else {
		}
		else{
			return array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
		}
	}
@@ -141,7 +118,7 @@ public function getPendaftarLowonganApi($level, $id)
		$this->db->from('pendaftar p');
		$this->db->join('lowongan l', 'p.idLowongan = l.idLowongan');
		if ($level == 'member') {
			$this->db->where('p.idMember', $id);
			$this->db->where('p.idMember', $id);			
		} elseif ($level == 'perusahaan') {
			$this->db->join('member m', 'p.idMember = m.idMember');
			$this->db->where('p.idLowongan', $id);
@@ -151,72 +128,17 @@ public function getPendaftarLowonganApi($level, $id)

		return $this->db->get()->result();
	}

	public function tambahLowonganApi($idPerusahaan)
	{
		$data = array(
			'lowongan' => $this->input->post('lowongan'),
			'deskripsi' => $this->input->post('deskripsi'),
			'persyaratan' => $this->input->post('persyaratan'),
			'idPerusahaan' => $idPerusahaan,
			'tglPost' => date('Y-m-d'),
			'status' => 'buka',
			'gaji' => $this->input->post('gaji'),
			'kota' => $this->input->post('kota'),
			'jamKerja' => $this->input->post('jamKerja'),
			'kuota' => $this->input->post('kuota'),
			'fkKategori' => $this->input->post('fkKategori'),
		);

		$this->db->insert('lowongan', $data);

    public function updateUserApi($id){
		$data = array('namaMember' => $this->input->post('nama'),'alamat' => $this->input->post('alamat'),'tanggalLahir' => $this->input->post('tanggalLahir'),'agama' => $this->input->post('agama'),'noTelp' => $this->input->post('notelp'),'jenisKelamin' => $this->input->post('jkl'),'email' => $this->input->post('email'));
		$this->db->where('fkUser',$id);
		$this->db->update('member',$data);
	}

	public function updateLowonganApi($id)
	{
		$data = array(
			'lowongan' => $this->input->post('lowongan'),
			'deskripsi' => $this->input->post('deskripsi'),
			'persyaratan' => $this->input->post('persyaratan'),
			'gaji' => $this->input->post('gaji'),
			'kota' => $this->input->post('kota'),
			'jamKerja' => $this->input->post('jamKerja'),
			'kuota' => $this->input->post('kuota'),
			'fkKategori' => $this->input->post('fkKategori'),
		);

		$this->db->where('idLowongan', $id);
		$this->db->update('lowongan', $data);
	}

	public function hapusLowonganApi($id)
	{
		$this->db->where('idLowongan', $id);
		$this->db->delete('lowongan');
	}

	public function verifikasiPendaftarApi($idPendaftar, $keterangan)
	{
		if ($keterangan == 'terima') {
			$data = array('statusDaftar' => 'lolos', 'keterangan' => 'Terverifikasi');
		} else {
			$data = array('statusDaftar' => 'tidak lolos', 'keterangan' => 'Terverifikasi');
		}
		$this->db->where('idPendaftar', $idPendaftar);
		$this->db->update('pendaftar', $data);
	}

	public function updateUserApi($id)
	{
		$data = array('namaMember' => $this->input->post('nama'), 'alamat' => $this->input->post('alamat'), 'tanggalLahir' => $this->input->post('tanggalLahir'), 'agama' => $this->input->post('agama'), 'noTelp' => $this->input->post('notelp'), 'jenisKelamin' => $this->input->post('jkl'), 'email' => $this->input->post('email'));
		$this->db->where('fkUser', $id);
		$this->db->update('member', $data);
	}

	public function updatefotomApi($id)
	{
    public function updatefotomApi($id){
		$file = $this->upload->data();
		$data = array('fotoMember' => $file['file_name']);
		$this->db->where('fkUser', $id);
		$this->db->update('member', $data);
		$this->db->where('fkUser',$id);
		$this->db->update('member',$data);
	}
}
