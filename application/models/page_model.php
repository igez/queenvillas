<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class page_model extends CI_Model {
	
	public function fetchAll() {
		$q = $this->db->get('pages');
		
		return $q->result();
	}
	
	public function fetch($id) {
		$q = $this->db->get_where('pages', array('id' => $id));
		
		return $q->row();
	}
	
}

?>