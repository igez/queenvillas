<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('ion_auth');
		if (!$this->ion_auth->logged_in())	{
			redirect('admin/login');
		}
	}
	
	public function index()	{
		$this->load->view('admin/dashboard');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */