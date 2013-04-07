
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment extends CI_Controller {

	public function index()	{
		$this->load->model('comment_model');
		$data['contents'] = $this->comment_model->fetchAll();

		$this->load->view('comment_tpl', $data);
	}

}

/* End of file comment.php */
/* Location: ./application/controllers/comment.php */