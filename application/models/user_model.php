<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	public function get_all()
	{
		$q = $this->db->get('users');

		return $q->result();
	}

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */