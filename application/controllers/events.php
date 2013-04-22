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
		$this->load->library('pagination');
		$offset = 0;
		$config['uri_segment'] = 2;
		$start = $this->uri->segment($config['uri_segment']);
		$config['display_pages'] = FALSE;
		$config['base_url'] = '/events';
		$config['per_page'] = 2;
		if ($start == NULL) {
			$offset = 0;
		}
		else {
			$offset = $config['per_page'] * ($start-1);
		}
		$limit = $config['per_page'];
		$config['total_rows'] = $this->post_model->totalEvents();
		$data['content'] = $this->post_model->fetchEvent($offset, $limit);

		$config['next_link'] = 'Older &rarr;';
		$config['next_tag_open'] = '<li class="next">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&larr; Newer';
		$config['prev_tag_open'] = '<li class="previous">';
		$config['prev_tag_close'] = '</li>';
		$config['use_page_numbers'] = TRUE;
		//$data['paging'] = $this->pagination->create_links();
		$this->pagination->initialize($config);  
		$this->load->view('events/index', $data);
	}

	public function read() {
		$id = $this->uri->segment(5);
		$cc =  $this->uri->segment(2). $this->uri->segment(3). $this->uri->segment(4);
		$cc = strtotime($cc);

		$data['content'] = $this->post_model->readEvent($id, $cc);

		$this->load->view('events/read', $data);
	}
}