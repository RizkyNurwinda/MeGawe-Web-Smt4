<?php    
class Template2 {      
	protected $_ci;  function __construct() {  $this->_ci = &get_instance();     
	}    
	function views2($template = NULL, $data = NULL) {  
		if ($template != NULL) {  
	$data['head'] = $this->_ci->load->view('admin/head', $data, TRUE);
	$data['header'] = $this->_ci->load->view('admin/header', $data, TRUE);          
	$data['content'] = $this->_ci->load->view('admin/content', $data, TRUE);
	$data['sidebar'] = $this->_ci->load->view('admin/sidebar', $data, TRUE);   
	$data['footer'] = $this->_ci->load->view('home/footer', $data, TRUE);           
	echo $data['template']= $this->_ci->load->view('admin/template', $data, TRUE); 
		}
	}

	
}
?> 