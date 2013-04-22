<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	var $data;
	
	public function __construct() {
		parent::__construct();
		$this->load->model(array('post_model', 'category_model'));
		$this->data['nav'] = $this->post_model->fetchAll();
		$this->load->vars($this->data);
	}
	
	public function index()	{
		$this->load->model('setting_model');

		$data['slide'] = $this->setting_model->fetchSetting();

		$this->load->view('landing_page', $data);
		
		
	}
	
	public function accomodation() {
		$id = $this->uri->segment('2');
		
		
		$id = $this->post_model->findBySlug($id);
		
		if (empty($id)) {
			show_404();
		}
		else {
			if ($this->post_model->fetchById($id) !== FALSE) {
				$data['content'] = $this->post_model->fetchById($id);
				
				$data['images'] = explode(', ', $data['content']->images);
				
				if ($data['content']->facilities != NULL) {
					$fac = explode(', ', $data['content']->facilities);
					$data['facility'] = array();
					foreach ($fac as $row) {
						$data['facility'][] = $this->post_model->getFacility($row);
					}
				}
				else {
					$data['facility'] = '';
				}
				
				$this->load->view('accomodation/view', $data);
			}
			
			else {
				show_404();
			}
		}
	}
	
	public function facilities() {
		if (!$_POST) {
			$id = $this->uri->segment('2');
			$id = $this->post_model->findBySlug($id);
			if (empty($id)) {
				show_404();
			}
			else {
				//check if slug is exist
				//var_dump($this->facility_model->searchBySlug($id));
				if ($this->post_model->fetchById($id) !== FALSE) {
					$this->session->set_userdata(array('chal' => $this->strToimg()));
					$data['content'] = $this->post_model->fetchById($id);
					$this->load->view('facility/view', $data);
				}
				
				else {
					show_404();
				}
				
				// if slug exist show the view
				
				
				//slug not exist show 404
			}
		}

		else {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('firstname', 'First Name', 'required');
			$this->form_validation->set_rules('lastname', 'Last Name', 'required');
			$this->form_validation->set_rules('city', 'City', 'required');
			$this->form_validation->set_rules('country', 'Country', 'required');
			$this->form_validation->set_rules('phone', 'Phone', 'required');
			$this->form_validation->set_rules('address1', 'Address', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('email-confirm', 'Email Confirmation', 'required');

			if ($this->form_validation->run() == FALSE)
			{
				$id = $this->uri->segment('2');
				$id = $this->post_model->findBySlug($id);
				$this->form_validation->set_error_delimiters('<span class="alert alert-error" style="width: 250px;">', '</span>');
				$this->session->set_userdata(array('chal' => $this->strToimg()));
				$data['content'] = $this->post_model->fetchById($id);
				$this->load->view('facility/view', $data);
			}
			else
			{
				$this->load->model('message_model');
				$this->message_model->saveMetting($_POST, $_SERVER['REMOTE_ADDR']);
				$this->session->unset_userdata('chal');
				redirect('/booking/success', 'refresh');

			}
		}

	}
	
	public function gallery() {
		$data['content'] = 'gallery';
		$this->load->view('admin/index', $data);
	}
	
	public function rsvp() {
		if (!$_POST) {
			$id = $this->uri->segment(5);
			if ($id == 'meeting-room') {
				$this->load->view('rsvp/meeting');
			}
		}
		else {
			if ($this->session->userdata('chal') === $_POST['challange']) {
				die('success');
			}
		}
		//var_dump($id);
	}

	// package main function
	public function package() {
		$this->load->view('package_tpl');
	}

	public function notFound() {
		$this->load->view('404');
	}

	public function booking_meeting() {
		print_r("<pre>");
		var_dump($_POST);
		print_r("</pre>");
		
	}

	public function booking_success() {
		$this->load->view('page/thanks');
	}

	function strToimg($length = 5) {
		$rand = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
        	$randomString .= $rand[rand(0, strlen($rand) - 1)];
    	}

    	return $randomString;
	}
			
}
