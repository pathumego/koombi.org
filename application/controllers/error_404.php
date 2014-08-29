<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error_404 extends CI_Controller {

	public function index()
	{
		// Page attributes
		$data['page'] = 'error_404';
		
		// Load the page template
		$this->load->vars($data);
		$this->load->view('public/template');	
	
	} # (index)
	
}

// EOF.