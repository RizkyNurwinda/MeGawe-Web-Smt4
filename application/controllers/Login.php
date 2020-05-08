<?php 
defined('BASEPATH') OR exit('No direct access allowed');
class Login extends CI_Controller
{

	public function index(){
        $this->load->view('login');
        
    }
    public function daftar(){
        $this->load->view('daftar');
    }

	public function cek_log(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->Mahasiswa_model->login($username,$password,'user')->result();
		if($cek != FALSE){
			foreach ($cek as $row) {
				$user = $row->username;
				$id_akses = $row->id_akses;
			}
			$this->session->set_userdata('session_user',$user);
			$this->session->set_userdata('session_akses',$id_akses);
			redirect('Home');
		}else{
			$this->load->view('login');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
?>