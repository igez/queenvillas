<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Emails extends CI_Controller {
	
	public function index() {
		$this->load->view('email_test');
	}

}

?>