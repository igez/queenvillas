<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {

	var $data;
	
	public function __construct() {
		parent::__construct();
		$this->load->model(array('post_model', 'category_model', 'gallery_model'));
		$this->data['nav'] = $this->post_model->fetchAll();
		$this->load->vars($this->data);
	}

	public function index() {
		$data['content'] = $this->gallery_model->fetchAll();
		$this->load->view('gallery_tpl', $data);
	}

	public function upload() {
		if ($_FILES || $_POST) {
			var_dump($_FILES);
			
			if (move_uploaded_file($_FILES['file']['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/assets/upload-test/".$_FILES['file']['name'])) {
				echo '1';
			}
			
		}
		else {
			echo "no post triggered";
		}
	}

}