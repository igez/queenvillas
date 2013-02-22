<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	var $data = array();

	public function __construct() {
		parent::__construct();
		$this->load->library('ion_auth');
		if (!$this->ion_auth->logged_in())	{
			redirect('admin/login');
		}
		$this->load->model(array('post_model', 'category_model', 'page_model', 'setting_model'));
		$this->load->vars($this->data);
		
	}
	
	public function index()	{
		$data['content'] = "dashboard";
		$this->load->view('admin/index', $data);
	}
	
	public function posts() {
		
		// load the post_model library
		// if action not exist or null
		if ($this->input->get('action') == NULL) {
			// if category not exist
			if ($this->input->get('category') == NULL) {
				// throw 404 page
				show_404();
			}
			// if category has data and empty
			else {
				// fetch necessary data from post_model according to category and add them variable $data
				$data['data'] = $this->post_model->fetchByCategory($this->input->get('category'));
			}
			$data['content'] = "posts";
			$this->load->view('admin/index', $data);
		}
		elseif ($this->input->get('action') == 'add') {
			$data->content = "post_add_form";
			$data->category = $this->category_model->fetchAll();
			$this->load->view('admin/index', $data);
		}
		elseif ($this->input->get('action') == 'edit' && ($this->input->get('id') != NULL)) {
			
			$data['data'] = $this->post_model->fetchById($this->input->get('id'));
			$data['category'] = $this->category_model->fetchAll();
			$data['content'] = "post_edit_form";
			//var_dump($data->data);
			$this->load->view('admin/index', $data);
			
		}
		elseif ($this->input->get('action') == 'delete' && ($this->input->get('id') != NULL)) {
			// begin delete process
			// die("Begin Delete Process id=".$this->input->get('id'));
			if ($this->post_model->deletePost($this->input->get('id'))) {
				$this->session->set_flashdata('success', '<b>Success!</b> Your post has been deleted.');
				redirect('/admin/posts?category=1', 'refresh');
			}
		}
		else {
			$data->content = "post_add_form";
			$this->load->view('admin/index', $data);
		}
		
	}
	
	public function post_update() {
		if ($this->input->post('submit') === 'doSave') {
			$targetFolder = "/assets/uploads/images/cover/";
			if ($_FILES['cover']['error'] == 0) {
				$tempFile = $_FILES['cover']['tmp_name'];
				$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
				$targetFile = rtrim($targetPath,'/') . '/' . $this->input->post('slug').".".pathinfo($_FILES['cover']['name'], PATHINFO_EXTENSION);
				
				// Validate the file type
				$fileTypes = array('jpg','jpeg','gif','png'); // File extensions
				$fileParts = pathinfo($_FILES['cover']['name']);
				
				if (move_uploaded_file($tempFile,$targetFile)) {
					if ($this->post_model->updatePost($this->input->post(), $this->input->post('slug').".".pathinfo($_FILES['cover']['name'], PATHINFO_EXTENSION))) {
						$this->session->set_flashdata('success', '<b>Success!</b> Your post has been saved.');
						redirect('/admin/posts?category=1', 'refresh');
					}
					else {
						$this->session->set_flashdata('success', '<b>Failed!</b> Something went wrong.');
						redirect('/admin/posts?category=1', 'refresh');
					}
				}
				else {
					die('Error While Uploading Image');
				}
			}
			else {
				if ($this->post_model->updatePost($this->input->post())) {
					$this->session->set_flashdata('success', '<b>Success!</b> Your post has been saved.');
					redirect('/admin/posts?category=1', 'refresh');
				}
				else {
					$this->session->set_flashdata('success', '<b>Failed!</b> Something went wrong.');
					redirect('/admin/posts?category=1', 'refresh');
				}
			}
		}
	}
	
	public function post_save() {
		if ($this->input->post('submit') === 'doSave') {
			if ($this->post_model->savePost($this->input->post())) {
				$this->session->set_flashdata('success', '<b>Success!</b> Your post has been saved.');
				redirect('/admin/posts?category=1', 'refresh');
			}
		}
	}
	
	/*
	public function page() {
		if (empty($_GET['action'])) {
			$data['pages'] = $this->page_model->fetchAll();
			//var_dump($this->page_model->fetchAll());
			$data['content'] = 'contents/page_index';
		}
		elseif ($_GET['action'] == 'edit' && !empty($_GET['id'])) {
			$id = $_GET['id'];
			$data['page'] = $this->page_model->fetch($id);
			$data['content'] = 'contents/page_edit';
		}
		else {
			show_404();
		}
		$this->load->view('admin/index', $data);
	}
	*/
	
	public function setting() {
		$target = $this->input->get('target');
		$this->load->library('thumbify');
		
		// if target is empty
			if (empty($target)) {
				// throw 404 page
				show_404();
			}
			elseif ($target == 'landing-page') {
				$data['data'] = $this->setting_model->fetchSetting();
				/*
				$this->thumbify->load('/assets/img/01.jpg');
				$this->thumbify->resizeToWidth(200);
				$this->thumbify->save($_SERVER['DOCUMENT_ROOT'].'/assets/img/thumb_01.jpg');
				*/
				$data['content'] = 'contents/setting_landing';
				$this->load->view('admin/index',$data);
			}
			// execute setting_landing.php view
	}
	
}
