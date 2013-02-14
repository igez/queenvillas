<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class accomodation_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}
	
	public function searchBySlug($slug) {
		$q = $this->db->get_where('accomodations', array('slug' => $slug));
		
		if ($q->row()) {
			return $q->row();
		}
		
		else {
			return FALSE;
		}
	}
	
}
