<?php    
class Template {      
	protected $_ci;  function __construct() {  $this->_ci = &get_instance();     
	}    
	function views($template = NULL, $data = NULL) {  
		if ($template != NULL) {  
	$data['head'] = $this->_ci->load->view('home/head', $data, TRUE);          
	$data['content'] = $this->_ci->load->view('home/content', $data, TRUE);   
	$data['footer'] = $this->_ci->load->view('home/footer', $data, TRUE);           
	echo $data['template']= $this->_ci->load->view('home/template', $data, TRUE); 
		}
	}

	
}
?> 