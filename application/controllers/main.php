<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {


	public function index()	{
		$this->load->view('landing_page');
	}
	
	public function accomodation() {
		$id = $this->uri->segment('2');
		$this->load->model('accomodation_model');
		
		if (empty($id)) {
			show_404();
		}
		else {
			if ($this->accomodation_model->searchBySlug($id) !== FALSE) {
				$data['content'] = $this->accomodation_model->searchBySlug($id);
			
				$this->load->view('accomodation/view');
			}
			
			else {
				show_404();
			}
		}
	}
	
	public function facilities() {
		$id = $this->uri->segment('2');
		$this->load->model('accomodation_model');
		
		if (empty($id)) {
			show_404();
		}
		else {
			$data['content'] = $this->accomodation_model->searchBySlug($id);
			
			$this->load->view('facility/view');
		}

	}
	
}
