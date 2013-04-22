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
			
			if (move_uploaded_file($_FILES['file']['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/assets/uploads/images/".$_FILES['file']['name'])) {
				$this->make_thumb($_SERVER['DOCUMENT_ROOT']."/assets/uploads/images/".$_FILES['file']['name'], $_SERVER['DOCUMENT_ROOT']."/assets/uploads/images/thumbs/thumb_".$_FILES['file']['name'], 100);
				echo "OK";
			}
			
		}
		else {
			echo "no post triggered";
		}
	}


	function make_thumb($src, $dest, $desired_width) {

	  /* read the source image */
	  $source_image = imagecreatefromjpeg($src);
	  $width = imagesx($source_image);
	  $height = imagesy($source_image);
	  
	  /* find the "desired height" of this thumbnail, relative to the desired width  */
	  $desired_height = floor($height * ($desired_width / $width));
	  
	  /* create a new, "virtual" image */
	  $virtual_image = imagecreatetruecolor($desired_width, $desired_height);
	  
	  /* copy source image at a resized size */
	  imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);
	  
	  /* create the physical thumbnail image to its destination */
	  imagejpeg($virtual_image, $dest);
	}

}