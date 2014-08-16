<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Join extends CI_Controller {

	public function index()
	{
		# Page attributes
		$data['page'] = 'join';
		
		if ( (isset($_REQUEST['action'])) && ($_REQUEST['action']=='sign_up') )
		{
			$this->form_validation->set_rules('first_name', 'First Name', 'required');
			$this->form_validation->set_rules('last_name', 'Last Name', 'required');
			$this->form_validation->set_rules('user_name', 'User name', 'required');
			$this->form_validation->set_rules('user_email', 'E-mail', 'required|valid_email');
			$this->form_validation->set_rules('user_pwd', 'Password', 'required|matched[user_pwd_re]');
			$this->form_validation->set_rules('user_pwd_re', 'Retype Password', 'required');
			
			if (! $this->form_validation->run() == FALSE)
			{
				$submitted_data = array(
										'first_name' => $this->input->post('first_name'),
										'last_name' => $this->input->post('last_name'),
										'user_name' => $this->input->post('user_name'),
										'user_email' => $this->input->post('user_email'),
										'user_pwd' => $this->input->post('user_pwd')
										);
				
				if ( $this->user_model->sign_up( $submitted_data ) )
				{
					print 'sss';
				}
			}
		}
		
		# Load the page templates
		$this->load->vars($data);	
		$this->load->view('template');
		
	} # (Index)
	
}

// EOF.