<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
	function getActiveProjects()
	{
		$this->db->select('*');
		$this->db->where('project_status','1');
		$query = $this->db->get('tbl_projects'); 
		
		return $query->result();
		
	} # (getActiveProjects)
}

// EOF.