<?php
class home_model extends CI_Model
{
	
	function getAll(){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('akses', 'user.id_akses = akses.id_akses');
		$query = $this->db->get();
		return $query;
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function tampilIdGrup()
	{
		$query = $this->db->query('select * from akses');
		return $query->result_array();
	}

	function login($user,$pass,$table){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$query = $this->db->get();
		return $query;
	}

	
}
?>