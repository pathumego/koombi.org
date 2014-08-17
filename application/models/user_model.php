<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
	function sign_up( $submitted_data )
	{
		$timestamp = strtotime(date('Y-m-d H:i:s'));
	
		$tbl_users = array(
			'user_id' => $this->generate_user_id(),
			'user_name' => $submitted_data['user_name'],
			'user_email' =>$submitted_data['user_email'],
			'user_pwd' => $this->encrypt_pwd($submitted_data['user_pwd']),
			'user_type' => 0,
			'user_reg_type' => 0,
			'facebook_id' => '',
			'twitter_handler' => '',
			'google_id' => '',
			'linkedin_id' => '',
			'user_token' => $this->generate_user_token(),
			'created_timestamp' => $timestamp,
			'update_timestamp' => $timestamp,
			'user_status' => 0
		);
		
		if ( $this->db->insert( 'tbl_users', $tbl_users ) )
		{
			# SEND VERIFICATION EMAIL
			
			return TRUE;
		}
		
	} # (sign_up)
    
	function sign_in( $submitted_data )
	{
		# Count query
		$query = $this->db->select('COUNT(*) as count', FALSE)
		->from('tbl_users')
		->where('user_email', $submitted_data['user_email'])
		->where('user_pwd', $this->encrypt_pwd($submitted_data['user_pwd']))
		->where('user_status', 2);

		$tmp = $query->get()->result();
		$count = $tmp[0]->count;
			
		# If valid user with valid login credetials
		if ( $count > 0 )
		{
			$query = $this->db->get_where('tbl_users', array('user_email' => $submitted_data['user_email']));
				
			foreach ($query->result() as $row) 	
			{
				$user_id = $row->user_id;
				$user_name = $row->user_name;
				$user_type = $row->user_type;
				$user_token = $row->user_token;
				$user_status = $row->user_status;
			}
				
			# session_registration
			$data = array(
				'signed_in'  => TRUE,
				'uid' => $user_id,
				'uname' => $user_name,
				'uem' => $submitted_data['user_email'],
				'utype' => $user_type,
				'utoken' => $user_token,
				'ustatus' => $user_status
			);
			
			if ( $this->session->set_userdata($data) )
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
		else
		{
			return FALSE;
		}		
		
	} # (sign_in)
	
	function sign_out()
	{
		# Signing Out
		$this->session->sess_destroy();

		return TRUE;
				
	} # (sign_out)
	
	public function is_signed_in()
	{	
		if ( $this->session->userdata('signed_in') )
		{
			return TRUE;
		}
	} # (is_signed_in)
		
	function generate_user_id()
	{
		return strtotime(date('Y-m-d H:i:s')) . rand(0,999) . rand(1,99);
			
	} # (generate_user_id)
	
	function generate_user_token()
	{
		return sha1(uniqid() . rand(1,9999));
		
	} # (generate_user_token)
	
	function encrypt_pwd( $user_pwd )
	{
		return md5($user_pwd);
		
	} # (encrypt_pwd)
}

// EOF.