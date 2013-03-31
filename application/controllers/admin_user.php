<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	function index() {
		$this->load->model('user_model');
		$data['users'] = $this->user_model->get_all();
		$data['content'] = 'contents/setting_user';
		$this->load->view('admin/index',$data);
	}
}