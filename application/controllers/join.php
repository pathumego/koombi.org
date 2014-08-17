<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Join extends CI_Controller {

	public function index()
	{
		# is_signed_in
		if ( $this->user_model->is_signed_in() ) { redirect('user'); }
		
		# page attributes
		$data['page'] = 'join';
		
		# handle the actionRequest
		if ( isset($_REQUEST['action']) )
		{
			# action : sign_up	
			if ($_REQUEST['action']=='sign_up')
			{
				# form_validation
				$this->form_validation->set_rules('first_name', 'First Name', 'required');
				$this->form_validation->set_rules('last_name', 'Last Name', 'required');
				$this->form_validation->set_rules('user_name', 'User name', 'required');
				$this->form_validation->set_rules('user_email', 'E-mail', 'required|valid_email');
				$this->form_validation->set_rules('user_pwd', 'Password', 'required|matched[user_pwd_re]');
				$this->form_validation->set_rules('user_pwd_re', 'Retype Password', 'required');
				
				# form_validation is Ok
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
						$data['action_status'] = TRUE;
						$data['ack_type'] = 'success';
						$data['ack_msg'] = 'Successfully regsitered!';
					}
					else
					{
						$data['action_status'] = TRUE;
						$data['ack_type'] = 'error';
						$data['ack_msg'] = 'Error registration!!';
					}
					
				} # (form_validation is Ok)
				
			} # (action : sign_up)
			
			# action : sign_in
			if ($_REQUEST['action']=='sign_in')
			{
				# form_validation
				$this->form_validation->set_rules('user_email', 'E-mail', 'required');
				
				# form_validation is Ok
				if (! $this->form_validation->run() == FALSE)
				{
					$submitted_data = array(
											'user_email' => $this->input->post('user_email'),
											'user_pwd' => $this->input->post('user_pwd')
											);
											
					if ( $this->user_model->sign_in( $submitted_data ) )
					{
						$data['action_status'] = TRUE;
						$data['ack_type'] = 'success';
						$data['ack_msg'] = 'Successfully regsitered!';
						
						redirect('user');
					}
					else
					{
						$data['action_status'] = TRUE;
						$data['ack_type'] = 'error';
						$data['ack_msg'] = 'Invalid Login!';
					}
				
				} # (form_validation is Ok)
				
			} # (action : sign_in)
			
		} # (handle the actionRequest)
		
		# Load the page templates
		$this->load->vars($data);	
		$this->load->view('template');
		
	} # (Index)
	
}

// EOF.