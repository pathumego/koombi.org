<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		# is_signed_in
		if ( ! $this->user_model->is_signed_in() ) { redirect('join'); }
		
		# Page attributes
		$data['page'] = 'user';
		
		# Load the page templates
		$this->load->vars($data);	
		$this->load->view('template');
	}
}

// EOF.