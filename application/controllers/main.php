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
					$data['facility'] = [];
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
		$id = $this->uri->segment('2');
		$id = $this->post_model->findBySlug($id);
		
		if (empty($id)) {
			show_404();
		}
		else {
			//check if slug is exist
			//var_dump($this->facility_model->searchBySlug($id));
			if ($this->post_model->fetchById($id) !== FALSE) {
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
	
	public function gallery() {
		$data['content'] = 'gallery';
		$this->load->view('admin/index', $data);
	}
	
	public function rsvp() {
		$id = $this->uri->segment(5);
		if ($id == 'meeting-room') {
			$this->load->view('rsvp/meeting');
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

	public function strToimg() {
		echo $_GET['str'];
		$im = imagecreatefromstring($_GET['str']);
		if ($im !== false) {
		    header('Content-Type: image/png');
		    imagepng($im);
		    imagedestroy($im);
		}
		else {
		    echo 'An error occurred.';
		}
	}
			
}
