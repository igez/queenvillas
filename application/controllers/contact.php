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
		$this->load->view('contact_page');
	}
}