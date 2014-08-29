<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		if ( ! $this->user_model->is_admin() ) { redirect('admin/sign_in'); }
		
		// Page attributes
		$data['page'] = 'admin/home';
		
		// Load the page template
		$this->load->vars($data);
		$this->load->view('admin/template');	
	
	} # (index)
	
	function sign_in()
	{
		if ( $this->user_model->is_admin() ) { redirect('admin'); }
		
		// Page attributes
		$data['page'] = 'admin/sign_in';
		
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
								'user_type' => 'admn'
								);
				
				// signing In
				if ( $this->user_model->sign_in( $postData ) )
				{
					$returnData['success'] = TRUE;
					$returnData['auth'] = TRUE;
					
					redirect('admin');
				}
				else
				{
					$returnData['success'] = TRUE;
					$returnData['firstAttempt'] = FALSE;
				}
								
			} # (sign_in)
			
		} # (actionRequest)
		
		$data['returnData'] = $returnData;
		
		// Load the page template
		$this->load->vars($data);
		$this->load->view('admin/template');
		
	} # (sign_in)
	
	function sign_out()
	{
		redirect('sign_out');
		
	} # (sign_out)

	
}

// EOF.