<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {
	
	public function index(){
		
		$template = array();
		$template['content'] = 'search_view';
		$this->load->view('template_user',$template);
	}
	
function find(){
	$this->load->model('afri_model');
	$template = array();
	
	$name= $this->input->post('findname');
	$ref= $this->input->post('findref');
	
	
	if($query=$this->afri_model->find_selected($name,$ref)){
		
		$template['records'] = $query;
	}
	   $template['content']= "result_view";
	        $this->load->view('template_user',$template);
}
}