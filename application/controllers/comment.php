
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment extends CI_Controller {

	var $data;
	
	public function __construct() {
		parent::__construct();
		$this->load->model(array('post_model', 'category_model'));
		$this->data['nav'] = $this->post_model->fetchAll();
		$this->load->vars($this->data);
	}
	
	public function index()	{
		$this->load->model('comment_model');
		$data['contents'] = $this->comment_model->fetchAll();

		$this->load->view('comment_tpl', $data);
	}

}

/* End of file comment.php */
/* Location: ./application/controllers/comment.php */