<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class admin extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->library('template2');
	}

	function index()
	{
		$this->load->view('admin/head');
	}

}
?>