<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class category_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function findTheId($string) {
		$q = $this->db->get_where('categories', array('category' => $string));
		
		return $q->row('id');
	}
	
	public function findById($id) {
		$q = $this->db->get_where('categories', array('id' => $id));
		
		return $q->row('category');
	}
	
	public function fetchAll() {
		$q = $this->db->get('categories');
		
		return $q->result();
	}
}