<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class home extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->library('template');
	}

	public function index()
	{
		$data['template'] = ('home/template'); 
		$this->load->view('home/head');
	}
}
?>