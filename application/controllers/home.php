<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		# Load Project Model
		$this->load->model('project_model');
		
		# Page attributes
		$data['page'] = 'home';
		
		$data['activeProjects'] = $this->project_model->getActiveProjects();
		
		# Load the page templates
		$this->load->vars($data);	
		$this->load->view('template');
		
	} # (index)
	
}

// EOF.