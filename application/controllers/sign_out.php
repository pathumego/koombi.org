<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sign_out extends CI_Controller {

	public function index()
	{
		if ( $this->user_model->sign_out() )
		{
			redirect('/');
		}
		
	} # (index)
	
}

// EOF.