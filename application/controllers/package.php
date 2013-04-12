<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Package extends CI_Controller {


	var $data;
	
	public function __construct() {
		parent::__construct();
		$this->load->model(array('post_model', 'category_model'));
		$this->data['nav'] = $this->post_model->fetchAll();
		$this->load->vars($this->data);
	}

	public function index() {
		// load necessary data from package_model
		$data['content'] = $this->post_model->fetchByCategory('Package');

		$this->load->view('package_tpl',$data);
	}
	
	public function show() {
		$this->load->view('package/detail');
	}
}