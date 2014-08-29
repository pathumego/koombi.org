<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
		
    } # __construct
	
	function sign_in( $postData )
	{
		// Session registration
		$sessionData = array(
			'signedin'  => TRUE,
			'uid' => '',
			'utype' => $postData['user_type'],
			'utoken' => '',
			'ustatus' => ''
		);
		
		$this->session->set_userdata($sessionData);
		
		return TRUE;
		
	} # (sign_in)
	
	function sign_out()
	{
		// destroy sessions
		$this->session->sess_destroy();

		return TRUE;
				
	} # (sign_out)
	
	public function is_authenticated_user()
	{
		if ( ($this->is_signedin()) && ($this->session->userdata('utype')=='usr') )
		{
			return TRUE;
		}
	} # (is_user)
	
	public function is_admin()
	{
		if ( ($this->is_signedin()) && ($this->session->userdata('utype')=='admn') )
		{
			return TRUE;
		}
	} # (is_admin)
	
	public function is_signedin()
	{	
		if ( $this->session->userdata('signedin') )
		{
			return TRUE;
		}
	} # (is_signed_in)
	
}

// EOF.