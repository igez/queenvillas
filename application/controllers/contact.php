<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	var $data;
	
	public function __construct() {
		parent::__construct();
		$this->load->model(array('post_model', 'category_model', 'gallery_model'));
		$this->data['nav'] = $this->post_model->fetchAll();
		$this->load->vars($this->data);
	}

	public function index() {
		//$this->load->library('recaptchalib');
		$this->load->view('contact_page');
	}

	public function sendMessage() {
		$this->load->model('message_model');

		if ($this->message_model->saveMessage($_POST)) {
			return true;
		}
		else {
			return false;
		}
	}
}