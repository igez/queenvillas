<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gallery_model extends CI_Model {

	public function fetchAll() {
		$q = $this->db->get('galleries');

		return $q->result();
	}
}