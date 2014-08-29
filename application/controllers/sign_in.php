<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sign_in extends CI_Controller {

	public function index()
	{
		if ( $this->user_model->is_authenticated_user() ) { redirect('user'); }
		
		// page attributes
		$data['page'] = 'public/sign_in';
		
		// returnData Inits
		$returnData['success'] = FALSE;
		$returnData['auth'] = FALSE;
		$returnData['firstAttempt'] = TRUE;
		
		// handle actionRequest
		if ( isset($_REQUEST['action']) )
		{
			// sign_in
			if ( $_REQUEST['action'] == 'sign_in' )
			{
				// catch postData
				$postData = array(
								'user_email' => $this->input->post('email'),
								'user_pwd' => $this->input->post('pwd'),
								'user_type' => 'usr'
								);
				
				// signing In
				if ( $this->user_model->sign_in( $postData ) )
				{
					$returnData['success'] = TRUE;
					$returnData['auth'] = TRUE;
					
					redirect('user');
				}
				else
				{
					$returnData['success'] = TRUE;
					$returnData['firstAttempt'] = FALSE;
				}
								
			} # (sign_in)
			
		} # (actionRequest)
		
		$data['returnData'] = $returnData;
		
		// load the page template
		$this->load->vars($data);
		$this->load->view('public/template');	
	
	} # (index)
	
}

// EOF.