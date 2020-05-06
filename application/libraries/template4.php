<?php    
class Template4 {      
	protected $_ci;  function __construct() {  $this->_ci = &get_instance();     
	}    
	function views4($template = NULL, $data = NULL) {  
		if ($template != NULL) {  
	$data['head'] = $this->_ci->load->view('kontak/head', $data, TRUE);          
	$data['kontak'] = $this->_ci->load->view('kontak/kontak', $data, TRUE); 
	$data['isi'] = $this->_ci->load->view($template, $data, TRUE);  
	$data['footer'] = $this->_ci->load->view('kontak/footer', $data, TRUE);           
	echo $data['template']= $this->_ci->load->view('kontak/template', $data, TRUE); 
		}
	}

	
}
?> 