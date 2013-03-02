<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class message_model extends CI_Model {


	public function saveMessage($data) {
		$data = array(
				'rcpt_fname' => $_POST['fname'],
				'rcpt_lname' => $_POST['lname'],
				'rcpt_email' => $_POST['email'],
				'subject' => $_POST['subject'],
				'body' => $_POST['body'],
			);

		$q = $this->db->insert('messages', $data);

		if ($q) {
			return false;
		}
	}

	public function fetchAllMessage() {
		$q = $this->db->get('messages');

		return $q->result();
	}

	public function chkIsRead($id) {
		$q = $this->db->get_where('messages', array('id' => $id));

		if ($q) {
			return $q->row();
		}
	}

	public function isRead($id) {
		$data = array(
               'read' => 1,
            );

		$this->db->where('id', $id);
		$this->db->update('messages', $data); 
	}
}