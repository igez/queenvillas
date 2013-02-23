<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class package_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}
	
	public function fetchAll() {
		$q = $this->db->get('packages');

		return $q->result();
	}
}
