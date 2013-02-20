<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class facility_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}
	
	public function searchBySlug($slug) {
		$q = $this->db->get_where('facilities', array('slug' => $slug));
		
		if ($q->row()) {
			return $q->row();
		}
		
		else {
			return FALSE;
		}
	}
	
}
