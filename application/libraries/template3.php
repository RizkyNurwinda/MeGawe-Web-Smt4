<?php    
class Template3 {      
	protected $_ci;  function __construct() {  $this->_ci = &get_instance();     
	}    
	function views3($template = NULL, $data = NULL) {  
		if ($template != NULL) {  
	$data['head'] = $this->_ci->load->view('tentangkami/head', $data, TRUE);          
	$data['tentangkami'] = $this->_ci->load->view('tentangkami/tentangkami', $data, TRUE); 
	$data['isi'] = $this->_ci->load->view($template, $data, TRUE);  
	$data['footer'] = $this->_ci->load->view('tentangkami/footer', $data, TRUE);           
	echo $data['template']= $this->_ci->load->view('tentangkami/template', $data, TRUE); 
		}
	}

	
}
?> 