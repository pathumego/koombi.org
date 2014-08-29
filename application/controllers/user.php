<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		if ( ! $this->user_model->is_authenticated_user() ) { redirect('sign_in'); }
		
		// Page attributes
		$data['page'] = 'user/home';
		
		// Load the page template
		$this->load->vars($data);
		$this->load->view('user/template');	
	
	} # (index)
	
}

// EOF.