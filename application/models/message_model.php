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
}