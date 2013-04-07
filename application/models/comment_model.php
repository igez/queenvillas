<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function fetchAll() {
		$this->db->select('*')->from('comments')->order_by("timestamp", "DESC"); 
		$q = $this->db->get();
		return $q->result();
	}

	public function fetch($id) {
		$q = $this->db->get_where('comments', array('id' => $id));

		return $q->row();
	}

	public function save($data) {
		$dataSet = array(
				'cust_name' => $data['name'],
				'cust_from' => $data['from'],
				'title' => $data['title'],
				'testimonial' => $data['testi'],
				'admin' => $data['admin']
			);

		if ($this->db->insert('comments', $dataSet)) {
			return true;
		}
	}

	public function add($data) {
		$dataSet = array(
				'cust_name' => $data['name'],
				'cust_from' => $data['from'],
				'title' => $data['title'],
				'testimonial' => $data['testi'],
				'admin' => $data['admin']
			);
		if ($this->db->insert('comments', $dataSet)) {
			return true;
		}
	}

	public function update($data) {
		$dataSet = array(
				'cust_name' => $data['name'],
				'cust_from' => $data['from'],
				'title' => $data['title'],
				'testimonial' => $data['testi'],
				'admin' => $data['admin']
			);
		$this->db->where('id', $data['id']);
		if ($this->db->update('comments', $dataSet)) {
			return true;
		}
	}

	public function delete($id) {
		if ($this->db->delete('comments', array('id' => $id))) {
			return true;
		}
		else {
			return false;
		}
	}

}

/* End of file comment_model.php */
/* Location: ./application/models/comment_model.php */