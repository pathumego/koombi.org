<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		// Page attributes
		$data['page'] = 'public/home';
		
		// Load the page templates
		$this->load->vars($data);	
		$this->load->view('public/template');
		
	} # (index)
	
}

// EOF.