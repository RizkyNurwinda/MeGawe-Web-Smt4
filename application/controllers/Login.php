<?php 
defined('BASEPATH') OR exit('No direct access allowed');
class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
		$this->load->library('template');
		$this->load->library('session');
	}


	public function index(){
        $this->load->view('login');
        
    }
    public function daftar(){
        $this->load->view('daftar');
    }

	public function cek_log(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$cek = $this->Home_model->login($email,$password,'user')->result();
		if($cek != FALSE){
			foreach ($cek as $row) {
				$user = $row->email;
				$akses = $row->akses;
			}
			$this->session->set_userdata('session_user',$user);
			$this->session->set_userdata('session_akses',$akses);
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