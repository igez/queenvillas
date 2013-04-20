<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {

	var $data;
	
	public function __construct() {
		parent::__construct();
		$this->load->model(array('post_model', 'category_model', 'gallery_model'));
		$this->data['nav'] = $this->post_model->fetchAll();
		$this->load->vars($this->data);
	}

	public function index() {
		$data['content'] = $this->post_model->fetchByCategory('Event');
		$this->load->view('events/index', $data);
	}

	public function read() {
		$id = $this->uri->segment(5);
		$cc =  $this->uri->segment(2). $this->uri->segment(3). $this->uri->segment(4);
		$cc = strtotime($cc);

		$data['content'] = $this->post_model->readEvent($id, $cc);
	}
}